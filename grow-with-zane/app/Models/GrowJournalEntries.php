<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrowJournalEntries extends Model
{
    use HasFactory;
    protected $fillable = [
        'entry_date',
        'summary',
        'notes',
    ];
    public function images()
    {
        return $this->hasMany(GrowJournalEntryImage::class, 'entry_id');
    }
}
