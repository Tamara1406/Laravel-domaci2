<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip_aranzmana extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'naziv_tipa_aranzmana'
    ];

    protected $guarded=[];
}
