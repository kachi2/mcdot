<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantCV extends Model
{
    use HasFactory;

    protected $table = "applicant_cvs";
    protected $fillable = ['name', 'email', 'phone', 'cover_letter', 'cv'];
}
