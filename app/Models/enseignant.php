<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enseignant  extends Model
{
    protected $table = 'enseignants';
    protected $fillable = ['nom','prenom','grade','discipline','sexe','email','password'];
    use HasFactory;
    }
