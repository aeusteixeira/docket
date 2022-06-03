<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'content',
        'image',
        'type_id',
        'call_to_action_id',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function callToAction()
    {
        return $this->belongsTo(CallToAction::class);
    }
}
