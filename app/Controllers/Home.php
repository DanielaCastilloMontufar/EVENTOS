<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
    public function __construct(){
        helper('form');
    }

    public function guarda(){
        $db = \Config\Database::connect();  
        $userModel = new UserModel($db);
        $request= \Config\Services::request();
        $data= array(
            'Id_usuario'=>$request->getPost('Id_usuario'),
            'Nombre_evento'=>$request->getPost('Nombre_evento'),
            'Tipo'=>$request->getPost('Tipo'),
            'Fecha'=>$request->getPost('Fecha'),
            'Hora'=>$request->getPost('Hora'),
            'Descripcion'=>$request->getPost('Descripcion'),
            'Organizador'=>$request->getPost('Organizador'),
            'Enlace'=>$request->getPost('Enlace'),
            'Imagen'=>$request->getFile('Imagen')->getName()

            
            
        );

        
        if($Imagen=$request->getFile('Imagen'))
        {
            if($Imagen->isValid() && !$Imagen->hasMoved())
            {
                $newName = $Imagen->getName();
                $Imagen->move(ROOTPATH . 'public/uploads/images', $newName);
            }
        }
        echo 'Para poder obtener la informacion de todos los eventos ingrese al siguiente link:';
        echo '<p><p><a href="http://localhost/eventos/principal.php">Registro de eventos</a></p> </p>';

        echo "<p>";

        echo '<h1> EVENTOS <h1>';

        if ($request->getPost('Id_usuario')){
            $data['Id_usuario']=$request->getPostGet('Id_usuario');
        }
        if($userModel->save($data)===false){
          var_dump($userModel->errors());
        }

        if ($request->getPost('Id_usuario')){
            $users = $userModel->find([$request->getPost('Id_usuario')]);
            $users = array('eventos' => $users);  
            $estructura =  view('estructura/header').view('estructura/formulario', $users);
        }

        else {
            $users = $userModel->findAll();
            $users = array('eventos' => $users);  
            $estructura =  view('estructura/header').view('estructura/body', $users);
        }
        return $estructura;
    }

    public function editar(){
        $db = \Config\Database::connect();  
        $userModel = new UserModel($db);
        $request= \Config\Services::request();
        $id=$request->getPost('Id_usuario');
        $users=$userModel->find([$id]);
        $users=array('users'=>$users);
        $estructura=view('estructura/header').view('estructura/formulario',$users);
        return $estructura;
            
    }

    public function formulario(){
        $estructura =  view('estructura/header').view('estructura/formulario');
        return $estructura;
    }
    
    public function index()
    {
        $db = \Config\Database::connect();
        $userModel = new UserModel($db);

       /* if($userModel->save($data)===false){
            var_dump($userModel->errors());

        } */

       /* $users = $userModel->where('Organizador','Ana García')
        ->orderBy('Id_usuario','asc')
        ->findAll();*/

        $userModel = new UserModel($db);
        //$users = $userModel->find([1234,2468]);
        $users = $userModel->findAll();
        //$users = $userModel->where('Organizador', 'Manuel Osorio')->findAll();
        $array = array('eventos' => $users);  
        $estructura =  view('estructura/header').view('estructura/body', $array);
        return $estructura;




    }
}
