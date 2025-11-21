<?php declare(strict_types=1);

use PhpCsFixer\Fixer\FixerInterface;

function getCustomFixers(): Traversable
{
    yield from new \ErickSkrauch\PhpCsFixer\Fixers();
}

$finder = (new PhpCsFixer\Finder())
    ->in([
        'src',
    ]);

return (new PhpCsFixer\Config())
    ->registerCustomFixers(getCustomFixers())
    ->setRules([
        'ErickSkrauch/align_multiline_parameters' => [
            'variables' => true,
        ],
    ])
    ->setFinder($finder);
