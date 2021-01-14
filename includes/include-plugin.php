<?php namespace WSUWP\Plugin\PublicPending;


class Plugin {

	protected static $version = '1.0.0';

	public static function get( $property ) {

		switch ( $property ) {

			case 'version':
				return self::$version;

			case 'plugin_dir':
				return plugin_dir_path( dirname( __FILE__ ) );

			case 'plugin_url':
				return plugin_dir_url( dirname( __FILE__ ) );

			case 'template_dir':
				return plugin_dir_path( dirname( __FILE__ ) ) . '/templates';

			case 'class_dir':
				return plugin_dir_path( dirname( __FILE__ ) ) . '/classes';

			default:
				return '';

		}

	}


	public function init() {

		require_once __DIR__ . '/include-post-query.php';

		require_once __DIR__ . '/include-save-post.php';

		require_once __DIR__ . '/include-post-content.php';

	}

}


(new Plugin)->init();