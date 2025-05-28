<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Machine;
use App\Models\Province;

class Work extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'province_id',
    ];
    protected $atributtes= [
        'start_date'=> null,
    ];
    public function getFechaInicioAttribute($value)
    {
        return $value ?? now()->toDateString();
    }

    public function work_machines(){
        return $this->belongsToMany(Machine::class, 'work_machines');
    }
     public function provinces(){
        return $this->belongsToMany(Province::class);
    }


    
}
