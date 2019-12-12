<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$content = new FieldsBuilder('content');
$content
    ->addFlexibleContent('content', [
        'button_label' => __('Add content', 'sage'),
        'acfe_flexible_copy_paste' => 1,
    ])
        ->addLayout(get_field_partial('flexbuilder.components.alertbox'), ['label' => __('Alertbox', 'sage')])
        ->addLayout(get_field_partial('flexbuilder.components.table'), ['label' => __('Table', 'sage')])
        ->addLayout(get_field_partial('flexbuilder.components.googlemap'), ['label' => __('Googlemap', 'sage')])
        ->addLayout(get_field_partial('flexbuilder.components.tabs'), ['label' => __('Tabs', 'sage')])
        ->addLayout(get_field_partial('flexbuilder.components.accordion'), ['label' => __('Accordion', 'sage')])
        ->addLayout(get_field_partial('flexbuilder.components.video'), ['label' => __('Video', 'sage')])
        ->addLayout(get_field_partial('flexbuilder.components.gallery'), ['label' => __('Gallery', 'sage')])
        ->addLayout(get_field_partial('flexbuilder.components.button_group'), ['label' => __('Button group', 'sage')])
        ->addLayout(get_field_partial('flexbuilder.components.button'), ['label' => __('Button', 'sage')])
        ->addLayout(get_field_partial('flexbuilder.components.image'), ['label' => __('Image', 'sage')])
        ->addLayout(get_field_partial('flexbuilder.components.heading'), ['label' => __('Heading', 'sage')])
        ->addLayout(get_field_partial('flexbuilder.components.editor'), ['label' => __('Text Editor', 'sage')])
    ->endFlexibleContent();

return $content;
