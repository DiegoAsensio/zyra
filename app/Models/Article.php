<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'cover', 'summary', 'content', 'description'];

    public function categories(){
        return $this->belongsToMany(
            Category::class,
            'articles_have_categories',
            'article_fk',
            'category_fk',
            'id',
            'id'

        );
    }
}
