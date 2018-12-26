<?php

namespace App\Models\Task;

use Illuminate\Database\Eloquent\Model;
use App\Models\Task\Traits\Relationship;
use App\User;
use App\Models\Task\Traits\Attribute;

class Task extends Model
{
    use Relationship, Attribute;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
