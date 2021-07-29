<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'mobile'                   => 'Mobile',
            'mobile_helper'            => ' ',
            'is_verified'              => 'Is Verified',
            'is_verified_helper'       => ' ',
        ],
    ],
    'category' => [
        'title'          => 'Category',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name_en'           => 'Name En',
            'name_en_helper'    => ' ',
            'name_bn'           => 'Name Bn',
            'name_bn_helper'    => ' ',
            'ranking'           => 'Ranking',
            'ranking_helper'    => ' ',
            'is_active'         => 'Is Active',
            'is_active_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'web_image'         => 'Web Image',
            'web_image_helper'  => ' ',
            'app_image'         => 'App Image',
            'app_image_helper'  => ' ',
        ],
    ],
    'product' => [
        'title'          => 'Product',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'category'              => 'category_id',
            'category_helper'       => ' ',
            'name_en'               => 'Name En',
            'name_en_helper'        => ' ',
            'name_bn'               => 'Name Bn',
            'name_bn_helper'        => ' ',
            'ranking'               => 'Ranking',
            'ranking_helper'        => ' ',
            'description_en'        => 'Description En',
            'description_en_helper' => ' ',
            'description_bn'        => 'Description Bn',
            'description_bn_helper' => ' ',
            'price'                 => 'Price',
            'price_helper'          => ' ',
            'sale_price'            => 'Sale Price',
            'sale_price_helper'     => ' ',
            'is_discount'           => 'Is Discount',
            'is_discount_helper'    => ' ',
            'amount'                => 'Amount',
            'amount_helper'         => ' ',
            'is_percentage'         => 'Is Percentage',
            'is_percentage_helper'  => ' ',
            'unit'                  => 'Unit',
            'unit_helper'           => ' ',
            'picture'               => 'Picture',
            'picture_helper'        => ' ',
            'image_1'               => 'Image 1',
            'image_1_helper'        => ' ',
            'image_2'               => 'Image 2',
            'image_2_helper'        => ' ',
            'image_3'               => 'Image 3',
            'image_3_helper'        => ' ',
            'stock'                 => 'Stock',
            'stock_helper'          => ' ',
            'status'                => 'Status',
            'status_helper'         => ' ',
            'is_active'             => 'Is Active',
            'is_active_helper'      => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'deliveryArea' => [
        'title'          => 'Delivery Area',
        'title_singular' => 'Delivery Area',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'is_active'         => 'Is Active',
            'is_active_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'notification' => [
        'title'          => 'Notification',
        'title_singular' => 'Notification',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'title'               => 'Title',
            'title_helper'        => ' ',
            'publish_date'        => 'Publish Date',
            'publish_date_helper' => ' ',
            'image'               => 'Image',
            'image_helper'        => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'is_active'           => 'Is Active',
            'is_active_helper'    => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'offer' => [
        'title'          => 'Offer',
        'title_singular' => 'Offer',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'description'              => 'Description',
            'description_helper'       => ' ',
            'is_first_install'         => 'Is First Install',
            'is_first_install_helper'  => ' ',
            'is_all_product'           => 'Is All Product',
            'is_all_product_helper'    => ' ',
            'is_category'              => 'Is Category',
            'is_category_helper'       => ' ',
            'category'                 => 'Category',
            'category_helper'          => ' ',
            'is_single_product'        => 'Is Single Product',
            'is_single_product_helper' => ' ',
            'product'                  => 'Product',
            'product_helper'           => ' ',
            'min_amount'               => 'Min Amount',
            'min_amount_helper'        => ' ',
            'max_amount'               => 'Max Amount',
            'max_amount_helper'        => ' ',
            'start_date'               => 'Start Date',
            'start_date_helper'        => ' ',
            'end_date'                 => 'End Date',
            'end_date_helper'          => ' ',
            'is_active'                => 'Is Active',
            'is_active_helper'         => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'order' => [
        'title'          => 'Order',
        'title_singular' => 'Order',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'user'                   => 'User',
            'user_helper'            => ' ',
            'order_date'             => 'Order Date',
            'order_date_helper'      => ' ',
            'product_price'          => 'Product Price',
            'product_price_helper'   => ' ',
            'delivery_charge'        => 'Delivery Charge',
            'delivery_charge_helper' => ' ',
            'sub_total'              => 'Sub Total',
            'sub_total_helper'       => ' ',
            'discount'               => 'Discount',
            'discount_helper'        => ' ',
            'total_price'            => 'Total Price',
            'total_price_helper'     => ' ',
            'due'                    => 'Due',
            'due_helper'             => ' ',
            'cash_collection'        => 'Cash Collection',
            'cash_collection_helper' => ' ',
            'name'                   => 'Name',
            'name_helper'            => ' ',
            'mobile'                 => 'Mobile',
            'mobile_helper'          => ' ',
            'house'                  => 'House',
            'house_helper'           => ' ',
            'flat'                   => 'Flat',
            'flat_helper'            => ' ',
            'road'                   => 'Road',
            'road_helper'            => ' ',
            'block'                  => 'Block',
            'block_helper'           => ' ',
            'area'                   => 'Area',
            'area_helper'            => ' ',
            'instruction'            => 'Instruction',
            'instruction_helper'     => ' ',
            'delivery_note'          => 'Delivery Note',
            'delivery_note_helper'   => ' ',
            'delivery_man'           => 'Delivery Man',
            'delivery_man_helper'    => ' ',
            'delivery_date'          => 'Delivery Date',
            'delivery_date_helper'   => ' ',
            'status'                 => 'Status',
            'status_helper'          => ' ',
            'cancel_note'            => 'Cancel Note',
            'cancel_note_helper'     => ' ',
            'admin_msg'              => 'Admin Msg',
            'admin_msg_helper'       => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'faqManagement' => [
        'title'          => 'FAQ Management',
        'title_singular' => 'FAQ Management',
    ],
    'faqCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'faqQuestion' => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'question'          => 'Question',
            'question_helper'   => ' ',
            'answer'            => 'Answer',
            'answer_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'course' => [
        'title'          => 'Course',
        'title_singular' => 'Course',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'desc'              => 'Desc',
            'desc_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'quiz' => [
        'title'          => 'Quiz',
        'title_singular' => 'Quiz',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'course'                => 'Course',
            'course_helper'         => ' ',
            'question_lenth'        => 'Question Lenth',
            'question_lenth_helper' => ' ',
            'unique'                => 'Unique',
            'title'                => 'Title',
            'unique_helper'         => ' ',
            'time'                  => 'Time',
            'time_helper'           => ' ',
            'status'                => 'Status',
            'status_helper'         => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'question' => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'quiz'              => 'Quiz',
            'quiz_helper'       => ' ',
            'question'          => 'Question',
            'question_helper'   => ' ',
            'choice_1'          => 'Choice 1',
            'choice_1_helper'   => ' ',
            'choice_2'          => 'Choice 2',
            'choice_2_helper'   => ' ',
            'choice_3'          => 'Choice 3',
            'choice_3_helper'   => ' ',
            'choice_4'          => 'Choice 4',
            'choice_4_helper'   => ' ',
            'answer'            => 'Answer',
            'answer_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];
