<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostModel extends Model
{
    use HasFactory;
    use Filterable;
    use SoftDeletes;

    
    protected $table = "post_news";

    /*
    * protected $guarded - для того чтобы можно было создать, добавить 
    * объект в базу данных
    */
    protected $guarded = [];


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }
}
