<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    
    
       protected $table = 'children';
    
        protected $fillable = [
        'id',
       'birthNo' ,
        'first_name',
        'Last_name',
        'mother_name',
        'mothers_id',
        'father_name',
        'father_id',
        'mother_phone',
        'dob',
        'birth_county',
        'resident_county',
        'height' ,
        'weight',
        'gestation',
        'doctor_name',
        'license_number',
        
        ];

        public function immunization()
    {
        return $this->hasOne('App\Immunization');
    }

    
}
