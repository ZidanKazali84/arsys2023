<?php

namespace App\Models\kaprodi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $fillable = ['event_id', 'event_code', 'event_type','application_deadline','event_date','draft_deadline','quota','current','creator','status'];
    protected $table = 'arsys_event';
}
