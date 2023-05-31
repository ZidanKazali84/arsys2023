<?php

namespace App\Models\Atj;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_select extends Model
{
    protected $fillable = [];
    protected $table = 'arsys_news_select';
    use HasFactory;

    public function news(){
        return $this->belongsTo(News::class, 'news_id','id' );
    }
}
