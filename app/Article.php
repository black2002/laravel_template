<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model



{


    use SoftDeletes;
    protected $guarded = [];
    protected $table = 'articles';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'head','text','user_id'
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }


}
