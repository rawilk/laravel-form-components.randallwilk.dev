<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Livewire\Component;

final class FormGroupErrorHandling extends Component
{
    public $firstName = '';
    public $lastName = '';
    public $email = '';

    protected $rules = [
        'firstName' => ['required', 'min:2'],
        'lastName' => ['required', 'max:20'],
        'email' => ['required', 'email'],
    ];

    public function updated(string $field): void
    {
        $this->validateOnly($field);
    }

    public function validateAll(): void
    {
        $this->validate();
    }

    public function resetForm(): void
    {
        $this->reset();
        $this->resetErrorBag();
    }
}
