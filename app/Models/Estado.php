<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Estado extends Model
{
    use HasFactory;

    protected $table = 'estados';
    protected $primaryKey = 'Cod_Estado';
    protected $guarded = [];


}
