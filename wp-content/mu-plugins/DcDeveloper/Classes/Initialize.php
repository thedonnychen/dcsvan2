<?php 
namespace Plugins\DcDeveloper\Classes;

class Initialize
{
    /**
     * Actions and Filters go here
     */
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueueAssets']);
        add_filter('body_class', [$this, 'addPostNameToBodyClass']);
        add_action('login_head', [$this, 'customLoginLogo']);
        add_action('admin_head', [$this, 'addFaviconBackend']);
    }

    public function enqueueAssets()
    {
        $frontend_js_file_path = '/dist/frontend.bundle.min.js';
        $frontend_css_file_path = '/dist/frontend.bundle.min.css';
       
        // User is on the frontend page
        if (is_admin() === false) {
            if (file_exists(get_stylesheet_directory() . $frontend_js_file_path)) {
                wp_enqueue_script('frontend-js', get_stylesheet_directory_uri() . $frontend_js_file_path, array('jquery'), filemtime(get_stylesheet_directory() . $frontend_js_file_path), true);
            }

            if (file_exists(get_stylesheet_directory() . $frontend_css_file_path)) {
                wp_enqueue_style('frontend-css', get_stylesheet_directory_uri() . $frontend_css_file_path, false, filemtime(get_stylesheet_directory() . $frontend_css_file_path));
            }
        }
    }

    /**
     * Adds the post slug to the body class, used to style individual pages
     * @return string
     */
    public function addPostNameToBodyClass($classes)
    {
        global $post;

        if ($post) {
            $classes[] = $post->post_name;
        }

        return $classes;
    }

    /**
     * Adds a custom logo for the WordPress admin login
     * @return string
     */
    public function customLoginLogo()
    {
        if (file_exists(get_stylesheet_directory() . "/src/images/admin-logo.png")) {
            echo 
            "<style type='text/css'>
	          .login h1 a {
	            background: url(" . get_stylesheet_directory_uri() . "/src/images/admin-logo.png) no-repeat center center !important;
	            width: auto;
	            max-width: 326px;
	            background-size: contain !important;
	          }
            </style>";
        }
    }

    /**
     * Adds a favicon to the admin panel
     * @return string
     */
    public function addFaviconBackend()
    {
        if (file_exists(get_stylesheet_directory() . "/src/images/favicon.png")) {
            $favicon_path = get_stylesheet_directory_uri() . "/src/images/favicon.png";
            echo '<link rel="shortcut icon" href="' . $favicon_path . '" />';
        }
    }
}