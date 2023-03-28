<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipAranzmana extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'naziv_tipa_aranzmana'
    ];

    protected $guarded=[];

    public function aranzmani()
    {
        return $this->hasMany(Aranzman::class);
    }
}
