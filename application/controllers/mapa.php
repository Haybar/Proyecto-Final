<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mapa extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    $this->load->library(array('googlemaps'));
    $this->load->model('M_parque');
    }
    public function index()
    {
        $this->load->view('admin/header_admin');
        
        $this->load->library('googlemaps');
        $config['center']= '-17.386640, -66.156917';
        $config['zoom']='15';
        $this->googlemaps->initialize($config);

        $organizacion=$this->M_parque->registrarMap();//verificar el model
        foreach ($organizacion as $key => $value) {
            $marker = array();
            $marker['animation']= 'DROP';
            $marker['position']= "$value->latitude, $value->longitude";
            $marker['infowindow_content']= '<div class="media" style="width:300px;">';
            $marker['infowindow_content'] .= '<div class="media-left">';
            $marker['infowindow_content'] .= '</div>';
            $marker['infowindow_content'] .= '<div class="media-body">';
            $marker['infowindow_content'] .= '<h5 class="media-heading">'.$value->Par_descripccion.'</5>';
            $marker['infowindow_content'] .= '<a>'.$value->Par_direccion.'</a>';
            $marker['infowindow_content'] = '</div>';
            $marker['infowindow_content'] = '</div>';
            $marker['icon']= base_url('assets/icon/tv.gif');


            $this->googlemaps->add_marker($marker);
        
        }
        $this->googlemaps->initialize($config);

        $data['map'] = $this->googlemaps-> create_map();

        $data['parque']=$this->M_parque->retornarInstitucion();
        $this->load->view('v_map',$data, FALSE);
        
        
        $this->load->view('admin/footer_admin');
    }

}

/* End of file mapa.php */

?>