<?php

declare(strict_types=1);

namespace App\View\Components\Navigation;

use App\View\Components\BladeComponent;

final class FlyoutMenuSection extends BladeComponent
{
    public function __construct(public string $title)
    {
    }
}
