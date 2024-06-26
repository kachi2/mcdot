<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientPostedJob extends Model
{
    use HasFactory;

    protected $table = "client_posted_jobs";
    protected $fillable = ['name', 'email', 'company', 'number_of_applicant', 'category_id', 'title', 'location', 'salary_range', 'job_details', 'job_type', 'status', 'deadline', 'is_approved'];
  
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
