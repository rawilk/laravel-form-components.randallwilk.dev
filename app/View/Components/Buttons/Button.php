<?php

declare(strict_types=1);

namespace App\View\Components\Buttons;

use App\View\Components\BladeComponent;

abstract class Button extends BladeComponent
{
    public string $tag = 'button';

    public function __construct(public null|string $href = null, public string $size = 'lg')
    {
        if (! is_null($href)) {
            $this->tag = 'a';
        }
    }

    public function sizeClass(): string
    {
        return match($this->size) {
            'md' => 'px-5 py-2 text-sm md:py-3 md:text-base md:px-6',
            default => 'px-8 py-3 text-base md:py-4 md:text-lg md:px-10', // includes 'lg' size
        };
    }
}
