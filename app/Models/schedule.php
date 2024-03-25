<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;

    protected  $table = "schedules";
    protected  $fillable = ['Activity','Time_Dedicated','Completion_Status'];

}
