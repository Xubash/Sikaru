<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company_name extends Model
{
    use HasFactory;
    protected $fillable=['id' ,'name','slug','city','fk_location','branch','contact_details','logo','status','sort'];

}
