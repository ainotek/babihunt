<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Role extends Model
{
    protected $fillable = ['name', 'description', 'created_at', 'updated_at'];
    public $timestamps = true;

    public final function admins(): Relation{
        return $this->hasMany(Admin::class);
    }
    public function permissions(){
        return $this->belongsToMany(Permission::class, 'role_permissions')
            ->withPivot('role_id', 'permission_id');
    }
}
