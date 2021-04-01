<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

function renderDemoCode(string $section, string $fileName): string
{
    if (! Str::endsWith($fileName, '.md')) {
        $fileName .= '.md';
    }

    $content = Cache::remember("demo-{$section}-{$fileName}", now()->addMinutes(60), function () use ($section, $fileName) {
        return File::get(resource_path("demos/{$section}/{$fileName}"));
    });

    return Str::markdown($content);
}

function demoExists(string $component): bool
{
    return array_key_exists($component, config('docs.demos', []));
}
