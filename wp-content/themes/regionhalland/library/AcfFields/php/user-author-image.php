<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_56c714b46105e',
    'title' => 'Profilbild',
    'fields' => array(
        0 => array(
            'return_format' => 'url',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => 500,
            'min_height' => 500,
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => 'jpg, png',
            'key' => 'field_56c714f8d0a42',
            'label' => __('Profile picture', 'regionhalland'),
            'name' => 'user_profile_picture_id',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        1 => array(
            'default_value' => '',
            'placeholder' => '',
            'key' => 'field_5885e2bff8eca',
            'label' => __('Facebook profile url', 'regionhalland'),
            'name' => 'user_facebook_url',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
        ),
        2 => array(
            'default_value' => '',
            'placeholder' => '',
            'key' => 'field_5885e2e0f8ecb',
            'label' => __('Linkedin profile url', 'regionhalland'),
            'name' => 'user_linkedin_url',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
        ),
        3 => array(
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => __(__('@', 'regionhalland'), 'regionhalland'),
            'append' => '',
            'key' => 'field_5885e2f5f8ecc',
            'label' => __('Instagram username', 'regionhalland'),
            'name' => 'user_instagram_username',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
        ),
        4 => array(
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => __(__('@', 'regionhalland'), 'regionhalland'),
            'append' => '',
            'key' => 'field_5885e306f8ecd',
            'label' => __('Twitter username', 'regionhalland'),
            'name' => 'user_twitter_username',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'user_form',
                'operator' => '==',
                'value' => 'all',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'seamless',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
    'local' => 'php',
));
}