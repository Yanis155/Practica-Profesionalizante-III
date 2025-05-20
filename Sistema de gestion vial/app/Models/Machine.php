<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Work;
use App\Models\Province;
class Machine extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'model',
        'start_date',
        'end_date',
        'final_reason',
        'mileage_traveled',
        'work_id',
    ];
     public function work_machines(){
        return $this->belongsToMany(Work::class, 'work_machines');
    }
    public function province(){
        return $this->hasMany(Province::class);
    }
}
