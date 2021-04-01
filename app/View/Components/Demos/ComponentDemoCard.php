<?php

declare(strict_types=1);

namespace App\View\Components\Demos;

use App\View\Components\BladeComponent;

final class ComponentDemoCard extends BladeComponent
{
    public function __construct(public string $title = '', public null|string $source = '')
    {
    }
}
