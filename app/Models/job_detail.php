<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_detail extends Model
{
    use HasFactory;
    protected $fillable=['title','slug','posted_date','deadline','short_description','short_description','key_responsibilities','requirements','fk_company','fk_category','fk_skill','no_of_opeanings','position_type','experience','education','fk_location','status','sort'];
    public $timestamps = false;

}
