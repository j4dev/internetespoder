<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $table = "family";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['father_name', 'mother_name', 'id_user'];
}
