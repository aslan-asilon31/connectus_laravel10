<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleMaster extends Model
{
    use  HasFactory;

    protected $table = 'roles_masters';

    protected $fillable = [
        'roles_id',
        'status_id',
        'name',
        'lang',
        'lang_id',
    ];
}
