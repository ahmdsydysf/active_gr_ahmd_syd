<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Str;
class Blog extends Model
{
    use HasFactory;
    protected $fillable = [

        'blog_date',
        'title_en',
        'title_ar',
        'text_en',
        'text_ar',
        'image',
        'order',
        'active'

    ];

    public function getSlugAttribute(): string
    {
        if( LaravelLocalization::getCurrentLocale() == "en"){
            return str_slug($this->title_en);

        }else{
            // $urlString = str_replace('&', '%26', $this->title_ar);
            return urlencode(strip_tags($this->title_ar));
            // return Str::slug($this->title_ar)==""?strtolower(urlencode($this->title_ar)):Str::slug($this->title_ar);
// return $urlString;
// return str_slug($urlString);
        }
    }




    public function getUrlAttribute(): string
    {
        return action('web\BlogController@singleBlog', [$this->id, $this->slug]);
    }
}
