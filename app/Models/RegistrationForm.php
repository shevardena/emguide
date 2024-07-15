<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class RegistrationForm extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images');
    }

    protected $fillable = [
        'country_id',
        'city_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'registered_to_participate_in_elections',
        'registration_help',
        'id_code',
        'consular_registration',
        'later_registration',
        'transportation_help',
        'agreement',
    ];

    /**
     * Get the country relation
     */
    public function country(): belongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get the city relation
     */
    public function city(): belongsTo
    {
        return $this->belongsTo(City::class);
    }
}
