<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flexbuilder = new FieldsBuilder('flexbuilder', [
    'style' => 'seamless',
    'title' => 'flexbuilder',
    'menu_order' => 100,
    'hide_on_screen' => [0 => 'the_content']
]);

$flexbuilder
    ->setLocation('page_template', '==', 'views/flexbuilder.blade.php')
    ->addFlexibleContent('flexbuilder', [
        'button_label' => __('Add Section', 'sage'),
        'acfe_flexible_title_edition' => 1,
        'acfe_flexible_copy_paste' => 1,
    ])
        ->addLayout(get_field_partial('flexbuilder.posts'), ['label' => __('Posts', 'sage')])
        ->addLayout(get_field_partial('flexbuilder.item_list'), ['label' => __('Item list', 'sage')])
        ->addLayout(get_field_partial('flexbuilder.columns'), ['label' => __('Columns', 'sage')])
    ->endFlexibleContent();

return $flexbuilder;
