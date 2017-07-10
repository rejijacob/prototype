<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    //
    protected $table = 'Employee';

    protected $fillable =[
    'user_id','content'];
}
