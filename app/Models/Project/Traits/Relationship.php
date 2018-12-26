<?php
namespace App\Models\Project\Traits;

trait Relationship
{
    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id', 'id');
    }
}
