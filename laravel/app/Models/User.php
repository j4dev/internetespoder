<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['email', 'first_name', 'last_name', 'n_document', 'phone_number'];
}
