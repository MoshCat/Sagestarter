<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$editor = new FieldsBuilder('editor');

$editor
    ->addWysiwyg('editor', ['media_upload' => 0, 'wrapper' => ['class' => 'autosize']]);

return $editor;
