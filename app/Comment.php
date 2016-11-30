<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable=['content','articles_id','comments_id','user_id'];

     public function Articles(){
        return $this->belongsTo('Article');
     }

      public function childComments(){
        return $this->belongsTo('Comment');
     }

      public function parentComments(){
        return $this->belongsTo('Comment');
     }

      public function user(){
        return $this->belongsTo('User');
      }



}
