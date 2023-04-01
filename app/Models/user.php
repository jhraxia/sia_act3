<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
protected $table = 'students';
// column sa table
protected $fillable = [
'student_id', 'student_Fname', 'student_Lname', 'student_age'
];
}