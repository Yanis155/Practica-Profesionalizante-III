<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Machine;
class Maintenance extends Model
{
    use HasFactory;

     protected $fillable = [
        'type',
        'model',
        'start_date',
        'end_date',
        'current_mileage',
        'machine_id',
    ];
     public function machines(){
        return $this->belongsToMany(Machine::class);
    }
}
