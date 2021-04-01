<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

final class Role extends Model
{
    use Sushi;

    protected $rows = [
        ['id' => 1, 'name' => 'Admin'],
        ['id' => 2, 'name' => 'Manager'],
        ['id' => 3, 'name' => 'Supervisor'],
        ['id' => 4, 'name' => 'User'],
    ];
}
