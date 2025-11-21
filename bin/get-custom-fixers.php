<?php

require_once __DIR__.'/../vendor/autoload.php';

function getCustomFixers(): Traversable
{
    yield from new \ErickSkrauch\PhpCsFixer\Fixers();
}

dd(iterator_to_array(getCustomFixers()));