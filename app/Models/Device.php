<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Device extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'devices';

    protected $fillable = [
        'type_of_device',
        'measurement_limits',
        'manufacturer',
        'serial_number',
        'current_location',
        'person_in_charge',
        'instrument_description',
        'manufacturer_details',
        'manufacturer_instructions',
        'maintenance_plan',
        'equipment_status',
        'eramed_laboratory_identification_code',
        'laboratory_id',
        'calibration_id',
        'intermediate_check_id'
    ];

    public function laboratory(): BelongsTo
    {
        return $this->belongsTo(Laboratory::class, 'laboratory_id', 'id');
    }
}
