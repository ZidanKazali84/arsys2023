<?php

namespace App\Models\Kaprodi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $table = 'arsys_defense_examiner_score';

    protected $guarded = ['id'];
    public function score() {
        return $this->belongsTo(Staff::class, 'examiner_id', 'id');
}
}