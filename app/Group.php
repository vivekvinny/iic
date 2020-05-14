<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubGroups;

class Group extends Model
{
    public function sub_groups()
    {
        return $this->hasMany(SubGroups::class, 'group_id', 'id');
    }
}
