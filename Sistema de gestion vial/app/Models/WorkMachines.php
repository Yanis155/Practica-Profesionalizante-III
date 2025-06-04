<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Work;
use App\Models\Machine;
class WorkMachines extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_id',
        'machine,id',
        'start_date',
        'end_date',
        'final_reason',
        'mileage_traveled',
    ];

    public function work(){
        return $this->belongsTo(Work::class);
    }
    public function machine(){
        return $this->belongsTo(Machine::class);
    }
    
}
