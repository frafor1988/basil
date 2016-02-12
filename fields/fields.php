<?php 

/** These field are generated via the Advanced Custom Field 4 FREE plugin by Elliot Condon **/

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_blocks',
		'title' => 'Blocks',
		'fields' => array (
			array (
				'key' => 'field_567961c34c118',
				'label' => 'Activate Blocks?',
				'name' => 'activate_blocks',
				'type' => 'radio',
				'instructions' => 'Do you want to activate blocks for this post?',
				'choices' => array (
					1 => 'Yes',
					0 => 'No',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 0,
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_56792ad2c0a1f',
				'label' => 'Block 1',
				'name' => '',
				'type' => 'tab',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_567961c34c118',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
			),
			array (
				'key' => 'field_56a9f50fa8b4b',
				'label' => 'Block 1 Background',
				'name' => 'blockbg_1',
				'type' => 'image',
				'instructions' => 'Upload here an image to be used as background image when scrolling the block. If not set, the background defaults to the coloured triangle-base pattern. <strong>Suggested format, size: SVG or JPG, 1366 x 660px min. (bigger images will be resized accordingly)</strong>',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_567961c34c118',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'uploadedTo',
			),
			array (
				'key' => 'field_56792ae0c0a20',
				'label' => 'Activate Column 1?',
				'name' => 'activate_column_1_1',
				'type' => 'radio',
				'instructions' => 'Activate Column 1',
				'required' => 1,
				'choices' => array (
					1 => 'Yes',
					0 => 'No',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'No',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_56792ceac0a21',
				'label' => 'Existing or Custom Content?',
				'name' => 'eoc_1_1',
				'type' => 'radio',
				'instructions' => 'Would you like to display an existing post/page or just type in a custom content?',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56792ae0c0a20',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'existing' => 'Existing',
					'custom' => 'Custom',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_56792d72c0a22',
				'label' => 'Custom Content',
				'name' => 'custom_content_1_1',
				'type' => 'wysiwyg',
				'instructions' => 'Insert here your custom content! Please be brief and do not write a huge text block to respect the layout\'s spacing and proportions.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56792ae0c0a20',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_56792ceac0a21',
							'operator' => '==',
							'value' => 'custom',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_56792dcfc0a24',
				'label' => 'Existing Content',
				'name' => 'existing_content_1_1',
				'type' => 'relationship',
				'instructions' => 'Select the post/page or CPT that you want display.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56792ae0c0a20',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_56792ceac0a21',
							'operator' => '==',
							'value' => 'existing',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'id',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => 1,
			),
			array (
				'key' => 'field_56792f9592b19',
				'label' => 'Activate Column 2?',
				'name' => 'activate_column_1_2',
				'type' => 'radio',
				'instructions' => 'Activates Column 2',
				'required' => 1,
				'choices' => array (
					1 => 'Yes',
					0 => 'No',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'No',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_56792fdd121e6',
				'label' => 'Existing or Custom Content?',
				'name' => 'eoc_1_2',
				'type' => 'radio',
				'instructions' => 'Would you like to display an existing post/page or just type in a custom content?',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56792f9592b19',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'existing' => 'Existing',
					'custom' => 'Custom',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_56792fe1121e7',
				'label' => 'Custom Content',
				'name' => 'custom_content_1_2',
				'type' => 'wysiwyg',
				'instructions' => 'Insert here your custom content! Please be brief and do not write a huge text block to respect the layout\'s spacing and proportions.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56792f9592b19',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_56792fdd121e6',
							'operator' => '==',
							'value' => 'custom',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_56792fe4121e8',
				'label' => 'Existing Content',
				'name' => 'existing_content_1_2',
				'type' => 'relationship',
				'instructions' => 'Select the post/page or CPT that you want display.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56792f9592b19',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_56792fdd121e6',
							'operator' => '==',
							'value' => 'existing',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'id',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => 1,
			),
			array (
				'key' => 'field_5679315b3b592',
				'label' => 'Activate Column 3?',
				'name' => 'activate_column_1_3',
				'type' => 'radio',
				'instructions' => 'Activates Column 3',
				'required' => 1,
				'choices' => array (
					1 => 'Yes',
					0 => 'No',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'No',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_567931613b593',
				'label' => 'Existing or Custom Content?',
				'name' => 'eoc_1_3',
				'type' => 'radio',
				'instructions' => 'Would you like to display an existing post/page or just type in a custom content?',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5679315b3b592',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'existing' => 'Existing',
					'custom' => 'Custom',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_567931663b594',
				'label' => 'Custom Content',
				'name' => 'custom_content_1_3',
				'type' => 'wysiwyg',
				'instructions' => 'Insert here your custom content! Please be brief and do not write a huge text block to respect the layout\'s spacing and proportions.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5679315b3b592',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_567931613b593',
							'operator' => '==',
							'value' => 'custom',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5679316a3b595',
				'label' => 'Existing Content',
				'name' => 'existing_content_1_3',
				'type' => 'relationship',
				'instructions' => 'Select the post/page or CPT that you want display.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5679315b3b592',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_567931613b593',
							'operator' => '==',
							'value' => 'existing',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'id',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => 1,
			),
			array (
				'key' => 'field_567931f439e55',
				'label' => 'Activate Column 4?',
				'name' => 'activate_column_1_4',
				'type' => 'radio',
				'instructions' => 'Activates Column 4',
				'required' => 1,
				'choices' => array (
					1 => 'Yes',
					0 => 'No',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'No',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_567931f939e56',
				'label' => 'Existing or Custom Content?',
				'name' => 'eoc_1_4',
				'type' => 'radio',
				'instructions' => 'Would you like to display an existing post/page or just type in a custom content?',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_567931f439e55',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'existing' => 'Existing',
					'custom' => 'Custom',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_567931fd39e57',
				'label' => 'Custom Content',
				'name' => 'custom_content_1_4',
				'type' => 'wysiwyg',
				'instructions' => 'Insert here your custom content! Please be brief and do not write a huge text block to respect the layout\'s spacing and proportions.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_567931f439e55',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_567931f939e56',
							'operator' => '==',
							'value' => 'custom',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5679320139e58',
				'label' => 'Existing Content',
				'name' => 'existing_content_1_4',
				'type' => 'relationship',
				'instructions' => 'Select the post/page or CPT that you want display.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_567931f439e55',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_567931f939e56',
							'operator' => '==',
							'value' => 'existing',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'id',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => 1,
			),
			array (
				'key' => 'field_5679356429d9d',
				'label' => 'Block 2',
				'name' => '',
				'type' => 'tab',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_567961c34c118',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
			),
			array (
				'key' => 'field_56a9f5e42e348',
				'label' => 'Block 2 Background',
				'name' => 'blockbg_2',
				'type' => 'image',
				'instructions' => 'Upload here an image to be used as background image when scrolling the block. If not set, the background defaults to light gray. <strong>Suggested format, size: SVG or JPG, 1366px min.</strong>',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_567961c34c118',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'uploadedTo',
			),
			array (
				'key' => 'field_56793b021c50b',
				'label' => 'Activate Column 1?',
				'name' => 'activate_column_2_1',
				'type' => 'radio',
				'instructions' => 'Activates Column 1',
				'required' => 1,
				'choices' => array (
					1 => 'Yes',
					0 => 'No',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'No',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_56793b051c50c',
				'label' => 'Existing or Custom Content?',
				'name' => 'eoc_2_1',
				'type' => 'radio',
				'instructions' => 'Would you like to display an existing post/page or just type in a custom content?',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56793b021c50b',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'existing' => 'Existing',
					'custom' => 'Custom',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_56793b091c50d',
				'label' => 'Custom Content',
				'name' => 'custom_content_2_1',
				'type' => 'wysiwyg',
				'instructions' => 'Insert here your custom content! Please be brief and do not write a huge text block to respect the layout\'s spacing and proportions.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56793b021c50b',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_56793b051c50c',
							'operator' => '==',
							'value' => 'custom',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_56793b0b1c50e',
				'label' => 'Existing Content',
				'name' => 'existing_content_2_1',
				'type' => 'relationship',
				'instructions' => 'Select the post/page or CPT that you want display.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56793b021c50b',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_56793b051c50c',
							'operator' => '==',
							'value' => 'existing',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'id',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => 1,
			),
			array (
				'key' => 'field_56793b941ce14',
				'label' => 'Activate Column 2?',
				'name' => 'activate_column_2_2',
				'type' => 'radio',
				'instructions' => 'Activates Column 2',
				'required' => 1,
				'choices' => array (
					1 => 'Yes',
					0 => 'No',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'No',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_56793b971ce15',
				'label' => 'Existing or Custom Content?',
				'name' => 'eoc_2_2',
				'type' => 'radio',
				'instructions' => 'Would you like to display an existing post/page or just type in a custom content?',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56793b941ce14',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'existing' => 'Existing',
					'custom' => 'Custom',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_56793b991ce16',
				'label' => 'Custom Content',
				'name' => 'custom_content_2_2',
				'type' => 'wysiwyg',
				'instructions' => 'Insert here your custom content! Please be brief and do not write a huge text block to respect the layout\'s spacing and proportions.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56793b941ce14',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_56793b971ce15',
							'operator' => '==',
							'value' => 'custom',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_56793b9b1ce17',
				'label' => 'Existing Content',
				'name' => 'existing_content_2_2',
				'type' => 'relationship',
				'instructions' => 'Select the post/page or CPT that you want display.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56793b941ce14',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_56793b971ce15',
							'operator' => '==',
							'value' => 'existing',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'id',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => 1,
			),
			array (
				'key' => 'field_56793e0ed111b',
				'label' => 'Activate Column 3?',
				'name' => 'activate_column_2_3',
				'type' => 'radio',
				'instructions' => 'Activates Column 2',
				'required' => 1,
				'choices' => array (
					1 => 'Yes',
					0 => 'No',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'No',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_56793e10d111c',
				'label' => 'Existing or Custom Content?',
				'name' => 'eoc_2_3',
				'type' => 'radio',
				'instructions' => 'Would you like to display an existing post/page or just type in a custom content?',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56793e0ed111b',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'existing' => 'Existing',
					'custom' => 'Custom',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_56793e14d111d',
				'label' => 'Custom Content',
				'name' => 'custom_content_2_3',
				'type' => 'wysiwyg',
				'instructions' => 'Insert here your custom content! Please be brief and do not write a huge text block to respect the layout\'s spacing and proportions.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56793e0ed111b',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_56793e10d111c',
							'operator' => '==',
							'value' => 'custom',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_56793e16d111e',
				'label' => 'Existing Content',
				'name' => 'existing_content_2_3',
				'type' => 'relationship',
				'instructions' => 'Select the post/page or CPT that you want display.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56793e0ed111b',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_56793e10d111c',
							'operator' => '==',
							'value' => 'existing',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'id',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => 1,
			),
			array (
				'key' => 'field_56793ebec3595',
				'label' => 'Activate Column 4?',
				'name' => 'activate_column_2_4',
				'type' => 'radio',
				'instructions' => 'Activates Column 4',
				'required' => 1,
				'choices' => array (
					1 => 'Yes',
					0 => 'No',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'No',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_56793ec3c3596',
				'label' => 'Existing or Custom Content?',
				'name' => 'eoc_2_4',
				'type' => 'radio',
				'instructions' => 'Would you like to display an existing post/page or just type in a custom content?',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56793ebec3595',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'existing' => 'Existing',
					'custom' => 'Custom',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_56793ec7c3597',
				'label' => 'Custom Content',
				'name' => 'custom_content_2_4',
				'type' => 'wysiwyg',
				'instructions' => 'Insert here your custom content! Please be brief and do not write a huge text block to respect the layout\'s spacing and proportions.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56793ebec3595',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_56793ec3c3596',
							'operator' => '==',
							'value' => 'custom',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_56793ec9c3598',
				'label' => 'Existing Content',
				'name' => 'existing_content_2_4',
				'type' => 'relationship',
				'instructions' => 'Select the post/page or CPT that you want display.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56793ebec3595',
							'operator' => '==',
							'value' => '1',
						),
						array (
							'field' => 'field_56793ec3c3596',
							'operator' => '==',
							'value' => 'existing',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'id',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_subtitle',
		'title' => 'Subtitle',
		'fields' => array (
			array (
				'key' => 'field_568e84334cf19',
				'label' => 'Subtitle',
				'name' => 'subtitle',
				'type' => 'textarea',
				'instructions' => 'Write here your subtitle. It will be displayed on top of the post featured image, or slider.</br>
	<strong>Notes:</strong></br>
	You can use HTML tags to format the words or paragraph.</br>
	New lines are converted with an ending /br tag.</br>',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

?>
