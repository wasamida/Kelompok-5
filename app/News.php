<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable=['title','content','user_id'];
    protected $table='news';

    public function user(){
        return $this->belongsTo('User');
    }




}
