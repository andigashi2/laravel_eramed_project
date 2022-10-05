<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntermediateCheck extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'intermediate_checks';

    protected $fillable = [
        "id",
        "date",
        "measurement",
        "expanded_uncertainty",
        "max_mpe",
        "device_id",
    ];
}
