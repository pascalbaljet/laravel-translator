<?php declare(strict_types=1);

use Translator\Framework\LaravelConfigLoader;
use Translator\Infra\LaravelJsonTranslationRepository;

return [
    'languages' => ['pt-br', 'es'],
    'directories' => [
        app_path(),
        resource_path('views'),
    ],
    'output' => resource_path('lang'),
    'container' => [
        'config_loader' => LaravelConfigLoader::class,
        'sentence_repository' => LaravelJsonTranslationRepository::class,
    ],
];