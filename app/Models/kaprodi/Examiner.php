<?php

namespace App\Models\Kaprodi;

use App\Models\ArSys\Staff;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examiner extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $table = 'arsys_defense_examiner';

    protected $guarded = ['id'];
    public function examiner() {
        return $this->belongsTo(Staff::class, 'examiner_id', 'id');
    }
}
