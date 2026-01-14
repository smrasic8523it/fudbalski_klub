<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prijava extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kandidat_id',
        'trening_id',
        'status_prijave_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'kandidat_id' => 'integer',
            'trening_id' => 'integer',
            'status_prijave_id' => 'integer',
        ];
    }

    public function kandidat(): BelongsTo
    {
        return $this->belongsTo(Kandidat::class);
    }

    public function trening(): BelongsTo
    {
        return $this->belongsTo(Trening::class);
    }

    public function statusPrijave(): BelongsTo
    {
        return $this->belongsTo(StatusPrijave::class);
    }
}
