<?php

namespace WPGraphQLGravityForms\Tests\Factories;

use GFAPI;
use GFFormsModel;
use WP_UnitTest_Generator_Sequence;

class Form extends \WP_UnitTest_Factory_For_Thing {

	public function __construct( $factory = null ) {
		parent::__construct( $factory );
		$this->default_generation_definitions = [
			'title'       => new WP_UnitTest_Generator_Sequence( 'Form title %s' ),
			'description' => new WP_UnitTest_Generator_Sequence( 'Form description %s' ),
			'fields'      => [],
		];
	}

	public function create_object( $args ) {
		$form_id = GFAPI::add_form( $args );
		if ( ( array_key_exists( 'is_active', $args ) && ! $args['is_active'] ) || ! empty( $args['is_trash'] ) ) {
			$form = GFAPI::get_form( $form_id );
			$this->update_object(
				$form_id,
				array_merge(
					$form,
					[
						'is_active' => $args['is_active'] ?? 1,
						'is_trash'  => $args['is_trash'] ?? 0,
					]
				)
			);
		}
		return $form_id;
	}

	public function create_many( $count, $args = [], $generation_definitions = null ) {
		$form_ids = [];
		for ( $n = 0; $n < $count; $n++ ) {
			$form_args  = $args;
			$form_ids[] = $this->create( $form_args );
		}

		return $form_ids;
	}

	public function update_object( $form_id, $args ) {
		$form       = GFAPI::get_form( $form_id );
		$form       = array_merge( $form, $args );
		$is_updated = GFAPI::update_form( $form, $form_id );
		if ( ! empty( $args['is_trash'] ) ) {
			$is_updated = GFFormsModel::trash_form( $form_id );
		}
		return $is_updated;
	}

	public function get_object_by_id( $form_id ) {
		return GFAPI::get_form( $form_id );
	}
}