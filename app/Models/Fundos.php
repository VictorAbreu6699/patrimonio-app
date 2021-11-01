<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundos extends Model
{
    protected $table = 'fundos';

    protected $fillable = [
        'name'
    ];

    public function patrimonios()
    {
        return $this->hasMany(Patrimonios::class);
    }
}
