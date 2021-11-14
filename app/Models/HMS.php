<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HMS extends Model
{
    use HasFactory;

    protected $table = 'NhapHMS';
    protected $fillable = ['BienSo','SoKhung','Km'];
}
