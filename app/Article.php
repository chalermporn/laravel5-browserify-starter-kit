<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    protected $table = 'article';
    protected $guarded = [];
    protected $casts = [
        'photo'  => 'array',
        'attach' => 'array',
    ];
    /*
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    */
}
