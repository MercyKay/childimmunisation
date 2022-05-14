<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immunization extends Model
{
    
    protected $fillable = ['bcg_at_birth','opv_at_birth','opv_at_6_weeks','opv_at_10_weeks','opv_at_14_weeks','dpt_at_6_weeks','dpt_at_10_weeks'];

    public function child()
    {
        return $this->belongsTo('App\children');
    }
}
