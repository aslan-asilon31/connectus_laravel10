<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterLogin extends Model
{
    use HasFactory;

    protected $table = 'master_login';

    protected $fillable = [
        'user_id',
        'company_id',
        'user_name',
        'role_id',
        'phone',
        'email',
        'password',
        'photo',
        'auth_token',
        'current_lng',
        'is_active',
        'created_by',
        'created_date',
        'modified_by',
        'modified_date',
        'nik',
        'last_update_pass_by',
        'last_update_pass_date',
        'key_login',
    ];
    
}
