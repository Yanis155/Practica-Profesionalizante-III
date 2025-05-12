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
     public function machine_works(){
        return $this->belongsToMany(Work::class, 'machine_work');
    }
}
