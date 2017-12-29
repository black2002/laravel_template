<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'country'
    ];
    protected $table = 'countries';
    protected $dates = ['deleted_at'];
    protected $guarded = [];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
