<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'post_name', 'post_slug','category_id','post_desc','post_content','post_image','post_status'
    ];
    protected $primaryKey = 'post_id';
 	protected $table = 'tbl_post';
}
