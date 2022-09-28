<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Laboratory extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'laboratory';

    protected $fillable = [
        'name',
    ];

    public function devices(): HasMany
    {
        return $this->hasMany('Device');
    }
}
