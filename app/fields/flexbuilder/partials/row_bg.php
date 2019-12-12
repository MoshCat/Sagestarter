<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$row_bg = new FieldsBuilder('row_bg');
$row_bg
    ->addRadio('row_bg', ['label' => __('Background', 'sage')])
        ->addChoice('', __('None', 'sage'))
        ->addChoice('bg-primary', __('Color 1', 'sage'))
        ->addChoice('bg-secondary', __('Color 2', 'sage'))
        ->addChoice('bg-light', __('Light', 'sage'))
        ->addChoice('bg-dark text-light', __('Dark', 'sage'))
        ->addChoice('bg-img', __('Background image', 'sage'))
        ->setDefaultValue('')
    ->addImage('background_image', ['return_format' => 'id', 'label' => __('Background Image', 'sage'), 'preview_size' => 'thumbnail'])
        ->conditional('row_bg', '==', 'bg-img')
    ->addTrueFalse('background_repeat', ['label' => __('Background repeat', 'sage'), 'ui' => 1])
        ->conditional('row_bg', '==', 'bg-img');

return $row_bg;
