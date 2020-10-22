<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // you can change table name from model
    protected $table = 'posts';
    // you can also hange primary key from model 
    
    public $primarykey = 'id';

    //specify timestamps in your applications

    public $timestamps = true;

}
