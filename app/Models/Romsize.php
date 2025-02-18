<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Romsize extends Model
{
    #protected $table = 'romsizes';
    use HasFactory;
    protected function romsize(): Attribute {
        return new Attribute(
            // Mutador da formato al dato antes de ser guardado en la base de datos
            set: fn ($value) => ucwords($value),
            // Accesor da formato al dato antes de ser mostrado en la vista
            get: fn ($value) => ucwords($value)
        );
    }
}
