<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_56c58bade87dc',
    'title' => 'Contact widget',
    'fields' => array(
        0 => array(
            'sub_fields' => array(
                0 => array(
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'key' => 'field_56c58bd7bddb1',
                    'label' => __('Contact person', 'regionhalland'),
                    'name' => 'contact_person',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'readonly' => 0,
                    'disabled' => 0,
                ),
                1 => array(
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'key' => 'field_56c58be9bddb2',
                    'label' => __('Company', 'regionhalland'),
                    'name' => 'contact_company',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'readonly' => 0,
                    'disabled' => 0,
                ),
                2 => array(
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'key' => 'field_56c5924f757b3',
                    'label' => __('Phone numer', 'regionhalland'),
                    'name' => 'phone_numer',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'readonly' => 0,
                    'disabled' => 0,
                ),
                3 => array(
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'key' => 'field_56c5925b757b4',
                    'label' => __('Email', 'regionhalland'),
                    'name' => 'email',
                    'type' => 'email',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                4 => array(
                    'default_value' => '',
                    'new_lines' => 'br',
                    'maxlength' => '',
                    'placeholder' => '',
                    'rows' => '',
                    'key' => 'field_56c59268757b5',
                    'label' => __('Address', 'regionhalland'),
                    'name' => 'address',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'readonly' => 0,
                    'disabled' => 0,
                ),
            ),
            'min' => 1,
            'max' => 0,
            'layout' => 'block',
            'button_label' => __('Lägg till rad', 'regionhalland'),
            'collapsed' => '',
            'key' => 'field_56c58bb2bddb0',
            'label' => __('Kontakter', 'regionhalland'),
            'name' => 'contacts',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'widget',
                'operator' => '==',
                'value' => 'minicipio-contact',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
    'local' => 'php',
));
}