<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrimonios extends Model
{
    protected $table = 'patrimonios';

    protected $fillable = [
        'fundo_id',
        'value',
        'date'
    ];   

    public function fundos()
    {
        return $this->HasOne(Fundos::class);
    }
}
