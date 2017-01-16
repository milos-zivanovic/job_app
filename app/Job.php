<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'user_id', 'created_at', 'updated_at',
    ];
    
    
    /**
     * Get the user.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
