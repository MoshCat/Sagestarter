<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$heading = new FieldsBuilder('heading');
$heading
    ->addText('heading_text', ['wrapper' => ['width' => 50]])
    ->addButtongroup('heading_size', ['wrapper' => ['width' => 50]])
        ->addChoice('1', __('H1', 'sage'))
        ->addChoice('2', __('H2', 'sage'))
        ->addChoice('3', __('H3', 'sage'))
        ->addChoice('4', __('H4', 'sage'))
        ->setDefaultValue('2');

return $heading;
