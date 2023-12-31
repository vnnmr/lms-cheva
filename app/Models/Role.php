<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public const ADMIN = "admin";
    public const MENTOR = "mentor";
    public const MURID = "murid";

    protected $table = 'role';

    protected $fillable = [
        'nama_role',
        'created_at',
        'updated_at'
    ];
}
