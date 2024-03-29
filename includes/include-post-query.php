<?php namespace WSUWP\Plugin\PublicPending;


class Post_Query {

	public function init() {

		add_filter( 'pre_get_posts', array( __CLASS__, 'add_pending_to_query' ), 99 );

	}


	public static function add_pending_to_query( $query ) {

		if ( $query->is_main_query() && ! is_admin() && ! defined( 'REST_REQUEST') ) {

			$query->set( 'post_status', array( 'publish', 'pending' ) );

		}

		return $query;

	}

}


(new Post_Query)->init();
