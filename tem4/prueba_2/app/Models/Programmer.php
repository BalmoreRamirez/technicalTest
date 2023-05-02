<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Programmer
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $edad
 * @property $email
 * @property $habilidades
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Programmer extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'edad' => 'required',
		'email' => 'required',
		'habilidades' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','edad','email','habilidades'];



}
