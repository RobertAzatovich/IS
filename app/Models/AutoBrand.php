<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AutoBrand extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $guarded = false;
    protected $table = 'auto_brands';

    public function autos()
    {
        return $this->hasMany(Auto::class);
    }
}
