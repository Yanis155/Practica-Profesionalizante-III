<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Work;
class Machine extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'model',
    ];
     public function work_machines(){
        return $this->belongsToMany(Work::class, 'work_machines');
    }
}
