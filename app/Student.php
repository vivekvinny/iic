<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubGroup;

class Student extends Model
{
	protected $fillable = [
        'group_id'
    ];
    public function group()
    {
        return $this->belongsTo(SubGroup::class);
    }
}
