<?php

namespace App;

use Illuminate\Database\Eloqoent\Model;
use Illuminate\Notifications\Notifiable;

class customers extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone','name','item','description','price',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       // 'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
      // 'email_verified_at' => 'datetime',
    ];
}
