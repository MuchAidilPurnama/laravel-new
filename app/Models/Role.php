<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    // Role.php
public function hasRole($role)
{
    return $this->where('name', $role)->exists();
}

}
