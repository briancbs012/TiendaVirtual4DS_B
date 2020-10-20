<?php

class Login extends Controllers
{
    public function __construct(){
        parent:: __construct();

    }
    public function login(){
        $data['page_tag'] ="Iniciar Sesion";
        $data['page_title'] = " Login <small> Tienda Virtual</small>";
        $data['page_name'] = "Iniciar Sesion";
        $data['page_function_js'] = "function_login.js";
        $this->views->getView($this,"login",$data);
    }

    public function getUsuario($idpersona){
        $intIdpersona = intval($idpersona);
        if ($intIdpersona > 0) {
            $arrData = $this->model->selectUsuario($intIdpersona);
            // dep($arrData);
            if (empty($arrData)) {
                $arrResponse = array('status' => false, 'msg' => 'Datos no Encontrados');
            } else {
                $arrResponse = array('status' => true, 'data' => $arrData);
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
    }
}
