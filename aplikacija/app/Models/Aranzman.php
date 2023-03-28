<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aranzman extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'naziv',
        'tip_aranzmana_id',
        'mesto_id'
    ];

    protected $guarded=[];
}
