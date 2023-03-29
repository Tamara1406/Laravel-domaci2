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
        'mesto_id',
        'user_id'
    ];

    protected $guarded=[];

    public function tip()
    {
        return $this->belongsTo(TipAranzmana::class, 'tip_aranzmana_id');
    }

    public function mesto()
    {
        return $this->belongsTo(Mesto::class, 'mesto_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
