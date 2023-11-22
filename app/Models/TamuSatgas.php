<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class TamuSatgas extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'tamu_satgas';
    protected $primaryKey = 'id_tamu';

    protected $fillable = ['nama', 'nim', 'email', 'password', 'prodi'];




}