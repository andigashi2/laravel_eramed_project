<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'methods';

    protected $fillable = [
        "id",
        "value",
        "unit",
        "max_difference",
        "axial_uni_uncertified",
    ];
}
