<?php namespace WSUWP\Plugin\PublicPending;


class Save_Post {

	public function init() {

		add_filter( 'wp_insert_post_data', array( __CLASS__, 'set_post_slug' ), '99', 2 );

	}


	public static function set_post_slug( $data, $postarr ) {

		if ( 'pending' === $data['post_status'] && 'publish' === get_post_status( $postarr['ID'] ) ) {

			$post = get_post( $postarr['ID'] );

			$data['post_name'] = get_post_field( 'post_name', $postarr['ID'] );

			update_post_meta( $postarr['ID'], '_wsuwp_public_pending_content', $post->post_content );

		}

		return $data;

	}

}


(new Save_Post)->init();

