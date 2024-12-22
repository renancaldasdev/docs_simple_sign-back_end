<?php

declare(strict_types=1);

namespace App\Signatures\Models;

use App\Documents\Models\Document;
use App\Users\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Signature extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_id',
        'user_id',
        'signed_at',
        'status',
    ];

    public function document(): belongsTo
    {
        return $this->belongsTo(Document::class);
    }

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
}
