<?php
namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;
 
class usuario_controller extends Controller{
 
 	public function __construct(){
 			helper(['form', 'url']);
 	}
 	
 	public function create() {
 	
 			$dato['titulo']='Registro';
 			echo view('front/head_view', $dato);
 			echo view('front/navbar_view');
 			echo view('back/usuario/registro');
 			echo view('front/footer_view');
 		}
 		
 		public function formValidation() {
 		
 			$input = $this->validate([
 				'nombre' => 'required|min_length[3]',
 				'apellido' => 'required|min_length[3]|max_length[25]',
 				'usuario' => 'required|min_length[3]',
 				'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
 				'pass' => 'required|min_length[3]|max_length[20]'
 				],
 				);
 				 $formModel = new usuario_Model();
 				 if (!$input){
 				 	$data['titulo']='registro';
 				 	echo view('front/head_view',$data);
 				 	echo view('front/navbar_view');
 				 	echo view('back/usuario/registro',['validation' => $this->validator]);
 				 	echo view('front/footer_view');
 				 } else {
 				 	$formModel->save([
 				 	'nombre' => $this->request->getvar('nombre'),
 				 	'apellido' => $this->request->getvar('apellido'),
 				 	'usuario' => $this->request->getvar('usuario'),
 				 	'email' => $this->request->getvar('email'),
 				 	'pass' => password_hash($this->request->getvar('pass'), PASSWORD_DEFAULT)
 				 	//password_hash() crea un nuevo hash de contraseña usando un algoritmo de hash de único sentido.
 				 	]);
 				 	
 				 	//Flashdata funciona solo en redirigir la funbción en el controlador en la vista de carga.
 				 		session()->setFlashdata('msg', 'Usuario registarado con éxito');
 				 		return $this->response->redirect('/registro');
 				 	}
 				 }
 			}
 				 	
