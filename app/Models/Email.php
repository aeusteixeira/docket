<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
    ];

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'emails_groups');
    }
}
