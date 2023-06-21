<?php

namespace App\Models\Kaprodi\Seminar;

use App\Models\ArSys\Staff;
use App\Models\ArSys\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examiner extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $table = 'arsys_defense_examiner_score';

    protected $guarded = ['id'];
    public function dosen() {
        return $this->belongsTo(Staff::class, 'examiner_id', 'id' );
    }
    public function student() {
        return $this->belongsTo(Student::class, 'applicant_id', 'id');
    }
    public function event() {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}