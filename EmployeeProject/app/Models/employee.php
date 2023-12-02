<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table='employees';
    protected $fillable=['Name','Gender','Dob','Address','Mobile','Email','Department','Designation','Doj'];
}
