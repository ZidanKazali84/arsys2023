<?php

namespace App\Models\Kaprodi\Seminar;

use App\Models\ArSys\Staff;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $table = 'arsys_defense_examiner';

    protected $guarded = ['id'];
    public function examiner() {
        return $this->belongsTo(Staff::class, 'examiner_id', 'id');
}
}
