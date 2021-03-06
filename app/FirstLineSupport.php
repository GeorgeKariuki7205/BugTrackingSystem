<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirstLineSupport extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'bug_id', 'firstLineSupport_id', 'approval', 'reason'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'approval' => 'boolean'
    ];

    /**
     * Get the Bug for the FirstLineSupport.
     */
    public function bug()
    {
        return $this->belongsTo(\App\Bug::class);
    }

}
