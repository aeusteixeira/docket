<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        'action',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function callToAction()
    {
        return $this->belongsTo(CallToAction::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    protected function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

}
