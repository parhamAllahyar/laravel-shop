<?php

namespace Admin\Database\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Acl\Traits\HasPermissions;
use Comment\Trait\HasComments;

class Admin extends Authenticatable implements JWTSubject
{
    use HasFactory, HasPermissions,HasComments;
    protected $guard = 'admin';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    public function getJWTCustomClaims()
    {
        return [];
    }
}
