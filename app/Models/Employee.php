<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'image','manager_id'
    ];
    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }
}
