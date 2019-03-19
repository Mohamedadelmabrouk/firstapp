<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    //table name
    protected $table= 'companies';
    //identify employess model and connect it one to many relation chip to companies
    public function employess()
    {
       return $this->hasMany('app\employess');
    }
    //primary key
    public $primarykey='id';
    //timestampes
    public $timestampes=true;
    /*
    //table name
    public $table='companies';
    
    //company name 
    public $name='name';
    //company email
    public $email='email';
    //company logo
    public $logo='logo';
    //company website
    public $website='website';
    
    

*/
}
