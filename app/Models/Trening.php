<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trening extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tip_treninga_id',
        'datum',
        'vreme',
        'opis',
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
            'tip_treninga_id' => 'integer',
            'datum' => 'date',
        ];
    }

    public function tipTreninga(): BelongsTo
    {
        return $this->belongsTo(TipTreninga::class);
    }
}
