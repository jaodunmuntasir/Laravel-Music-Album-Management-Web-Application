<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Track extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'filename', 'color', 'project_id'];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
