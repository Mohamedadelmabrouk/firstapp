<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employess extends Model
{
    //table name
    protected $table='employesses';
    //identify the relation between companies model and this model
    public function companies()
    {
       return $this->belongsTo('app\companies');
    }
    //primary key
    public $primarykey='id';
    //employee first name name 
    public $employeef_name='first_name';
     //employee last name name
     public $employeel_name='last_name';
    //employee email
    public $employeeemail='email';
    //employee phone number
    public $employeephone='phone';
    //forign key
    public $forignkey='id';
    //timestampes
    public $timestampes=false;
}
