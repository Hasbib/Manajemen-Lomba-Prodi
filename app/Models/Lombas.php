<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Lombas extends Model
{
    use HasFactory;
    use HasApiTokens;
    
    protected $table = 'Lombas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name_lomba',
        'description',
        'kontak',
        'tempat',
        'date_start',
        'date_end',
        'picture',
        'link_file',
        'biaya_daftar'
    ];
}

