<?php

namespace App\Models;

use App\Traits\DatesTranslator;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, DatesTranslator;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'last_login', 'image_filename',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function channel()
    {
        return $this->hasMany(Channel::class);
    }
    
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
    
    public function videos()
    {
        return $this->hasManyThrough(Video::class, Channel::class);
    }
    
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
    
    protected $appends = ['avatar'];
    
    public function getAvatarAttribute()
    {
        //return 'https://www.gravatar.com/avatar/' .md5($this->email) . '?s=45&d=mm';
        if(!$this->image_filename){
            return config('fiesta.buckets.images') . '/profile/' . 'avatar.png';
        }
        return config('fiesta.buckets.images') . '/profile/' . $this->image_filename;
    }

    public function likes()
    {
        return $this->morphyMany(Like::class, 'likeable');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
