<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$googlemap = new FieldsBuilder('googlemap');
$googlemap
    ->addGoogleMap('map', ['placeholder' => __('Map', 'sage'), 'center_lat' => '51.9228958', 'center_lng' => '4.4631727']);

    return $googlemap;
