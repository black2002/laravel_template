<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'role'
    ];
    protected $table = 'roles';
    protected $dates = ['deleted_at'];
    protected $guarded = [];
    public function user(){
        return $this->belongsToMany('App\User');
    }
}
