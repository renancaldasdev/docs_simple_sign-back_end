<?php

namespace App\State\Models;

use App\City\Models\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'states';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'uf',
        'name',
    ];

    /**
     * Relationships
     */
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
