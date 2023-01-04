<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "task_models";


     /*
    * protected $guarded - для того чтобы можно было создать, добавить 
    * объект в базу данных
    */
    protected $guarded = [];
}


/*
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }
*/
