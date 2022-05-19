<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Midsemester extends Model
{
    use HasFactory;
    protected $table = 'midsemesters';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id', 'kolom_judul', 'kolom_isi', 'kolom_penulis', 'kolom_keterangan'];
}
