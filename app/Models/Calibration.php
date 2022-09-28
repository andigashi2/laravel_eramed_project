<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calibration extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'calibrations';

    protected $fillable = [
    'cal_date',
    'nr_cert_cal',
    'cal_lab',
    'cal_due_date',
    'cal_interval',
    ];
}
