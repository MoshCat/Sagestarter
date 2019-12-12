<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$columns = new FieldsBuilder('columns');
$columns

    // Column options
    ->addTab('columns', ['placement' => 'left'])

        // Column layouts
        ->addFlexibleContent('columns', [
            'button_label' => __('Add columns', 'sage'),
            'acfe_flexible_title_edition' => 1,
            'acfe_flexible_copy_paste' => 1
        ])
            // Heading
            ->addLayout('heading', ['label' => __('Heading', 'sage')])
                ->addFields(get_field_partial('flexbuilder.components.heading'))

            // Divider
            ->addLayout('divider', ['label' => __('Divider', 'sage')])
                ->addTruefalse('display_line', ['message' => __('Display Horizontal rule', 'sage')])

            // 1 Column small
            ->addLayout('1_column_sm', ['label' => __('1 Column Narrow', 'sage')])
                ->addGroup('col_1')
                    ->addFields(get_field_partial('flexbuilder.partials.column_content'))
                ->endGroup()

            // 1 Column
            ->addLayout('1_column', ['label' => __('1 Column', 'sage')])
                ->addGroup('col_1')
                    ->addFields(get_field_partial('flexbuilder.partials.column_content'))
                ->endGroup()

            // 2 Columns
            ->addLayout('2_columns', ['label' => __('2 Columns', 'sage')])
                ->addGroup('col_1')
                    ->addFields(get_field_partial('flexbuilder.partials.column_content'))
                ->endGroup()
                ->addGroup('col_2')
                    ->addFields(get_field_partial('flexbuilder.partials.column_content'))
                ->endGroup()

            // 3 Columns
            ->addLayout('3_columns', ['label' => __('3 Columns', 'sage')])
                ->addGroup('col_1')
                    ->addFields(get_field_partial('flexbuilder.partials.column_content'))
                ->endGroup()
                ->addGroup('col_2')
                    ->addFields(get_field_partial('flexbuilder.partials.column_content'))
                ->endGroup()
                ->addGroup('col_3')
                    ->addFields(get_field_partial('flexbuilder.partials.column_content'))
                ->endGroup()

            // Left wide columns
            ->addLayout('left_wide', ['label' => __('Left wide', 'sage')])
                ->addGroup('col_1')
                    ->addFields(get_field_partial('flexbuilder.partials.column_content'))
                ->endGroup()
                ->addGroup('col_2')
                    ->addFields(get_field_partial('flexbuilder.partials.column_content'))
                ->endGroup()

            // Right wide columns
            ->addLayout('right_wide', ['label' => __('Right wide', 'sage')])
                ->addGroup('col_1')
                    ->addFields(get_field_partial('flexbuilder.partials.column_content'))
                ->endGroup()
                ->addGroup('col_2')
                    ->addFields(get_field_partial('flexbuilder.partials.column_content'))
                ->endGroup()
        ->endFlexibleContent()

    // Container options
    ->addTab('container_options', ['placement' => 'left'])
        ->addFields(get_field_partial('flexbuilder.partials.container_width'))
        ->addFields(get_field_partial('flexbuilder.partials.row_bg'))

    // Column options
    ->addTab('column_options', ['placement' => 'left'])
        ->addCheckbox('row_options', ['label' => __('Options', 'sage'), 'allow_custom' => 1])
        ->addChoice('text-center', __('Center all text', 'sage'))
        ->addChoice('v-center', __('Vertical center', 'sage'));

return $columns;
