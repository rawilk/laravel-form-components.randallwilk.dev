<?php

declare(strict_types=1);

namespace App\View\Components\Navigation;

use App\View\Components\BladeComponent;
use Illuminate\Support\HtmlString;

abstract class NavigationItem extends BladeComponent
{
    public function __construct(public string $href = '#', public null|bool $active = null, public bool $external = false)
    {
        if (is_null($this->active)) {
            $this->active = request()?->fullUrlIs($this->href) ?? false;
        }
    }

    public function externalLinkAttributes(): HtmlString
    {
        return new HtmlString(implode(PHP_EOL, [
            'target="_blank"',
            'rel="noreferrer noopener nofollow"',
        ]));
    }
}
