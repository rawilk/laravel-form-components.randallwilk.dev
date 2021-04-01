<?php

declare(strict_types=1);

namespace App\View\Components\Navigation;

final class FlyoutMenuItem extends NavigationItem
{
    public function __construct(public string $href = '#', public string $icon = 'heroicon-s-code', public null|bool $active = null)
    {
        parent::__construct(href: $this->href, active: $this->active);
    }
}
