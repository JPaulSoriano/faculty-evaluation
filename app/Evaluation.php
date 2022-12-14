<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'student_id', 'faculty_id','section_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function section(){
        return $this->belongsTo('App\Section');
    }
}
