<?php

namespace App\Customer\Models;

use App\City\Models\City;
use App\State\Models\State;
use App\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'document_type',
        'document_number',
        'telephone',
        'email',
        'logo',
        'company_size',
        'reason_for_registration',
        'number_of_documents_per_month',
        'customer_signature',
        'state_id',
        'city_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'document_type' => 'string',
    ];

    /**
     * Relationships
     */

    public function users()
    {
        return $this->belongsToMany(User::class, 'customer_user')
            ->withTimestamps()
            ->using(CustomerUser::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
