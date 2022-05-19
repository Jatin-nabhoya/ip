<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
        
    }
    
    public function getDobAttribute($value){
        
        return date('d-M-Y' , strtotime($value));
    }
}
