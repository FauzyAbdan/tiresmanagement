<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TireType;

class TireCode extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function type()
    {
        return $this->belongsTo(TireType::class);
       
    }
}
