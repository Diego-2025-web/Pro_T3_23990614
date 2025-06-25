<?php
namespace App\Models;
use CodeIgniter\Model; 

class usuario_Model extends Model
{
	protected $table = 'usuarios'; //Es el nombre de la tabla
	protected $primaryKey = 'id_usuario'; //Identificador de la tabla
	protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'baja']; //Son todos los campos de la tabla
}
