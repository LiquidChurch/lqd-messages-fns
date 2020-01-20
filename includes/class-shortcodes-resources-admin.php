<?php
/**
 * LiquidChurch Functionality Shortcodes Resources Admin
 *
 * @package LiquidChurch Functionality
 */

/**
 * LiquidChurch Functionality Shortcodes Resources Admin.
 *
 * @since 0.1.0
 */
class LCF_Shortcodes_Resources_Admin extends WDS_Shortcode_Admin {
	 // Shortcode Run object @var   LCF_Shortcodes_Resources_Run @since 0.1.0
	protected $run;

	/**
	 * Constructor
	 *
	 * @since  0.1.0
	 *
	 * @param LCF_Shortcodes_Resources_Run $run LCF_Shortcodes_Resources_Run object.
	 */
	public function __construct( LCF_Shortcodes_Resources_Run $run ) {
		$this->run = $run;

		parent::__construct(
			$this->run->shortcode,
			LiquidChurch_Functionality::VERSION,
			$this->run->atts_defaults
		);
	}

	/**
	 * Sets up the button
	 *
	 * @return array
	 */
	function js_button_data() {
		return array(
			'qt_button_text' => __( 'Sermon Resources', 'lcf' ),
			'button_tooltip' => __( 'Sermon Resources', 'lcf' ),
			'icon'           => 'dashicons-media-interactive',
			// 'mceView'        => true, // The future
		);
	}

	/**
	 * Adds fields to the button modal using CMB2
	 *
	 * @param $fields
	 * @param $button_data
	 *
	 * @return array
	 */
	function fields( $fields, $button_data ) {
		$fields[] = array(
			'name'    => __( 'Resource Type', 'lcf' ),
			'desc'    => __( 'Select the type of resource to display.', 'lcf' ),
			'id'      => 'resource_type',
			'type'    => 'multicheck_inline',
			'default' => $this->atts_defaults['resource_type'],
			'options' => array(
				'files' => __( 'Files', 'lcf' ),
				'urls'  => __( 'URLs', 'lcf' ),
			),
		);

		$fields[] = array(
			'name'    => __( 'File Type', 'lcf' ),
			'desc'    => __( 'Only applies if checking "Files" as the Resource Type.', 'lcf' ),
			'id'      => 'resource_file_type',
			'type'    => 'multicheck_inline',
			'default' => $this->atts_defaults['resource_file_type'],
			'options' => array(
				'image' => __( 'Image', 'lcf' ),
				'video' => __( 'Video', 'lcf' ),
				'audio' => __( 'Audio', 'lcf' ),
				'pdf'   => __( 'PDF', 'lcf' ),
				'zip'   => __( 'Zip', 'lcf' ),
				'other' => __( 'Other', 'lcf' ),
			),
		);

		$fields[] = array(
			'name' => __( 'Use the Display Name', 'lcf' ),
			'desc' => __( 'By default, the Resource Name will be used.', 'lcf' ),
			'id'   => 'resource_display_name',
			'type' => 'checkbox',
		);

		 /*$fields[] = array(
		 	'name' => __( 'Sermon ID', 'lcf' ),
		 	'desc' => __( 'By default, will use the current ID.', 'lcf' ),
		 	'id'   => 'resource_post_id',
		 	'type' => 'text_small',
		 );*/

		$fields[] = array(
			'name'            => __( 'Sermon ID', 'lcf' ),
			'desc'            => __( 'If nothing is selected, it will use <code>get_the_id()</code>', 'lcf' ),
			'id'              => 'resource_post_id',
			'type'            => 'post_search_text',
			'post_type'       => gc_sermons()->sermons->post_type(),
			'select_type'     => 'radio',
			'select_behavior' => 'replace',
		);

		$fields[] = array(
			'name'    => __( 'Extra CSS Classes', 'lcf' ),
			'desc'    => __( 'Enter classes separated by spaces (e.g. "class1 class2")', 'lcf' ),
			'type'    => 'text',
			'id'      => 'resource_extra_classes',
		);

		$fields[] = array(
			'name'    => __( 'Resource Language', 'lcf' ),
			'desc'    => __( 'Please select the resource language', 'lcf' ),
			'type'    => 'multicheck_inline',
			'id'      => 'resource_lang',
			'default' => array_keys(LCF_Metaboxes::get_lng_fld_option()),
			'options' => LCF_Metaboxes::get_lng_fld_option(),
		);

		return $fields;
	}
}
