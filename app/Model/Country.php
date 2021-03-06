<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

    protected $fillable = [
        'name',
        'official_state_name',
        'alpha-2',
        'alpha-3'
    ];

    public function translation()
    {
        return $this->hasMany(Translation::class, 'country_id', 'id');
    }
}
