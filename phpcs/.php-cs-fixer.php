<?php

$rules = [
    '@PSR2' => true,
    'array_syntax' => ['syntax' => 'short'],
    'no_empty_statement' => true,
    'no_unneeded_control_parentheses' => true,
    'no_unneeded_curly_braces' => true,
    'no_unused_imports' => true,
    'ordered_imports' => true,
    'protected_to_private' => true,
    'psr_autoloading' => true,
    'single_quote' => true,
]

$config = new PhpCsFixer\Config();

$finder = PhpCsFixer\Finder::create()
    ->notPath('.chglog')
    ->notPath('.docker')
    ->notPath('.github')
    ->notPath('.idea')
    ->notPath('bootstrap')
    ->notPath('node_modules')
    ->notPath('storage')
    ->notPath('vendor')
    ->in(getcwd())
    ->name('*.php')
    ->notName('*.blade.php')
    ->notName('_ide_helper.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return $config
    ->setUsingCache(false)
    ->setRiskyAllowed(true)
    ->setRules($rules)
    ->setFinder($finder)
;
