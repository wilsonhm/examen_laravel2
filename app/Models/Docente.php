<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 *
 * @property $id
 * @property $cursos_id
 * @property $nombre
 * @property $apellidos
 * @property $direccion
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docente extends Model
{
    
    static $rules = [
		'cursos_id' => 'required',
		'nombre' => 'required',
		'apellidos' => 'required',
		'direccion' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cursos_id','nombre','apellidos','direccion','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function curso()
    {
        return $this->hasOne('App\Models\Curso', 'id', 'cursos_id');
    }
    

}
