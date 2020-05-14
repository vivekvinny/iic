<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Group;

class SubGroup extends Model
{
    protected $fillable = [
        'group_id'
    ];
    public function students()
    {
        return $this->hasMany(Student::class, 'group_id', 'id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
