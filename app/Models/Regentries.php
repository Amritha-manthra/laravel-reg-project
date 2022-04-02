<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regentries extends Model
{
    use HasFactory;
    protected $fillable = [
    'website',
    'advertisement',
    'social media',
    'radio',
    'television',
    'print',
    'other',
    'first name',
    'middle name',
    'last name',
    'relationship', 
    'ocuupation',
    'company',
    'contact mobile',
    'contact email',
    'home phone',
    'other contact',
    'full name',
    'gender',
    'dob',
    'age',
    'nationality',
    'primary language',
    'secondory language',
    'previous school',
    'current grade',
    'admission year',
    'grade to which admission seeking'];
}
