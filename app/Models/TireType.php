<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TireCode;

class TireType extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function tire()
    {
        return $this->hasMany(TireCode::class);
    }
}
