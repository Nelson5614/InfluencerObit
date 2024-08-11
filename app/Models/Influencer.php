<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    use HasFactory;

    protected $fillable =[
        'profilePicture',
        'name',
        'location',
        'followers',
        'chargeperhour',
        'website',
        'phone',
        'about'
    ];

        public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class, 'influencer_language');
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class, 'influencer_topic');
    }
    public function platforms()
    {
        return $this->belongsToMany(Platform::class, 'influencer_platforms');
    }
}
