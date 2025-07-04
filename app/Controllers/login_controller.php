<?php 
namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;

class login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $dato['titulo']='login';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_Model();

        //traemos los datos del formulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();
        if ($data){
            $pass = $data['pass'];
                $ba = $data['baja'];
                    if ($ba == 'SI'){
                        $session->setFlashdata('msg', 'Usuario dado de baja');
                        return redirect()->to('/login');
                }
                    // Se verifica los datos ingresados para ingresar, si cumple la verificacion, inicia la session
                $verify_pass = password_verify($password, $pass);
                    // password_verify determina los requisitos de configuracion de la contraseña
                if ($verify_pass){
                    $ses_data = [
                        'id_usuario'     => $data['id_usuario'],
                        'nombre'         => $data['nombre'],
                        'apellido'       => $data['apellido'],
                        'usuario'        => $data['usuario'],
                        'email'          => $data['email'],
                        'perfil_id'      => $data['perfil_id'],
                        'logged_in'      =>  TRUE
                    ];
                    //Se cumple la verificacion, inicia sesión
                    $session->set($ses_data);

                    session()->setFlashdata('msg', '¡¡Bienvenido!!');
                    return redirect()->to('/panel');
                } else {
                    //no paso la validacion de password 
                    $session->setFlashdata('msg', 'Contraseña Incorrecta');
                    return redirect()->to('/login');  
                }
                } else {
            $session->setFlashdata('msg', 'No existe el Email o es Incorrecto');
            return redirect()->to('/login');
        }
    }

    public function logout (){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
