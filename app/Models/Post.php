<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'slug', 'image', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // una funzione standarta che modifica il titpo da Ciao mondo a Ciao-mondo 
    public static function generateSlug($title){
        return Str::slug($title, '-');
    }
}
