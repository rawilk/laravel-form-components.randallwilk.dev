<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Sushi\Sushi;

final class User extends Model
{
    use Sushi;

    protected $rows = [
        // Admins
        ['id' => 1, 'name' => 'Byron Kim', 'role_id' => 1],
        ['id' => 2, 'name' => 'Gene Delgado', 'role_id' => 1],

        // Managers
        ['id' => 3, 'name' => 'Regina George', 'role_id' => 2],
        ['id' => 4, 'name' => 'Howard Hunt', 'role_id' => 2],
        ['id' => 5, 'name' => 'Sherri Cunningham', 'role_id' => 2],

        // Supervisors
        ['id' => 6, 'name' => 'Hugo Andrews', 'role_id' => 3],
        ['id' => 7, 'name' => 'Brad Flores', 'role_id' => 3],

        // Users
        ['id' => 8, 'name' => 'Derrick Peterson', 'role_id' => 4],
        ['id' => 9, 'name' => 'Sidney Curry', 'role_id' => 4],
        ['id' => 10, 'name' => 'Angelina Rodriquez', 'role_id' => 4],
        ['id' => 11, 'name' => 'Kate Fuller', 'role_id' => 4],
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
