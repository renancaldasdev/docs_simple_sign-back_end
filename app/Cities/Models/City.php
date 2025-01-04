<?php

namespace App\Cities\Models;

use App\States\Models\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cities';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'state_id',
    ];

    /**
     * Relationships
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
