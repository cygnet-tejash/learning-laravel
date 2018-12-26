<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project\Traits\Relationship;
use App\User;
use App\Models\Project\Traits\Attribute;

class Project extends Model
{
    use Relationship, Attribute;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
