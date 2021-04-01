<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

final class ComponentsController
{
    public function index(): ViewContract
    {
        return view('pages.component.all-demos', [
            'availableDemos' => $this->availableDemos(),
        ]);
    }

    public function show(string $component): ViewContract
    {
        abort_unless(View::exists("pages.component.demos.{$component}"), Response::HTTP_NOT_FOUND);

        $config = $this->componentConfig($component);

        return view('pages.component.index', [
            'componentName' => $component,
            'pageTitle' => $config['page_title'] ?? $component,
            'intro' => $config['intro'] ?? '',
            'availableDemos' => $this->availableDemos(),
        ]);
    }

    private function availableDemos(): array
    {
        return collect(Config::get('docs.demos', []))
            ->map(fn (array $config, string $slug) => ['id' => $slug, 'name' => $config['page_title'] ?? $slug, 'intro' => $config['intro'] ?? ''])
            ->sortBy('name')
            ->values()
            ->toArray();
    }

    private function componentConfig(string $component): array
    {
        return Config::get("docs.demos.{$component}", [
            'page_title' => $component,
            'intro' => '',
        ]);
    }
}
