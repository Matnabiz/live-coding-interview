<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'path',
        'title',
        'description',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function parent()
    {
        return $this->belongsTo(Topic::class, 'parent_id');
    }


}
