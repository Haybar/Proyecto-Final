<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


   public function __construct()
   {
   parent::__construct();
   $this->load->model('M_usuario');
   $this->load->model('M_parque');
   $this->load->library('upload');
    ;
   }
    public function index()
    {
        $this->load->view('admin/header_admin');
        $this->load->view('admin/v_admin');
        $this->load->view('admin/footer_admin');
        
    }

    public function usuario()
    {
        $this->load->view('admin/header_admin');
        $data['data']=$this->M_usuario->get();
        $this->load->view('admin/usuario/v_usuario',$data);
        $this->load->view('admin/footer_admin');
    }

    
    public function insertdata()
    {
    $nombre   = $this->input->post('nombre');
    $primerApellido = $this->input->post('primerApellido');
    $segundoApellido = $this->input->post('segundoApellido');
    $email = $this->input->post('email');
     // get foto
    $config['upload_path'] = './assets/picture';
    $config['allowed_types'] = 'jpg|png|jpeg|gif';
    $config['max_size'] = '2048';  //2MB max
    $config['max_width'] = '4480'; // pixel
    $config['max_height'] = '4480'; // pixel
    $config['file_name'] = $_FILES['fotopost']['name'];
    
    $this->upload->initialize($config);
    
    if (!empty($_FILES['fotopost']['name'])) {
    if ( $this->upload->do_upload('fotopost') ) {
    $foto = $this->upload->data();
    $data = array(
    'nombre'       => $nombre,
    'foto'       => $foto['file_name'],
    'primerApellido'     => $primerApellido,
    'segundoApellido'     => $segundoApellido,
    'email'     => $email,
    );
    $this->M_usuario->insert($data);
    
    redirect('admin/usuario','refresh');
    }else {
    die("subida fallida");
    }
    }else {
    echo "no entra";
    }
    }

    public function edit($idUsuario)
    {
        $this->load->view('admin/header_admin');
    $kondisi = array('idUsuario' => $idUsuario );
    $data['data'] = $this->M_usuario->get_by_id($kondisi);
    return $this->load->view('admin/usuario/v_updateUsuario',$data);
    $this->load->view('admin/footer_admin');
    }
    public function updatedata()
    {
    $idUsuario   = $this->input->post('idUsuario');
    $nombre = $this->input->post('nombre');
    $primerApellido = $this->input->post('primerApellido');
    $segundoApellido = $this->input->post('segundoApellido');
    $email = $this->input->post('email');
    
    $path = './assets/picture/';
    
    $kondisi = array('idUsuario' => $idUsuario );
    
    // get foto
    $config['upload_path'] = './assets/picture';
    $config['allowed_types'] = 'jpg|png|jpeg|gif';
    $config['max_size'] = '2048';  //2MB max
    $config['max_width'] = '4480'; // pixel
    $config['max_height'] = '4480'; // pixel
    $config['file_name'] = $_FILES['fotopost']['name'];
    
    $this->upload->initialize($config);
    
    if (!empty($_FILES['fotopost']['name'])) {
    if ( $this->upload->do_upload('fotopost') ) {
    $foto = $this->upload->data();
    $data = array(
    'nombre'       => $nombre,
    'foto'       => $foto['file_name'],
    'primerApellido'     => $primerApellido,
    'segundoApellido'     => $segundoApellido,
    'email'     => $email,
    );
    // hapus foto pada direktori
    @unlink($path.$this->input->post('filelama'));
    
    $this->M_usuario->update($data,$kondisi);
    return redirect('admin/usuario'); //REDIRECCIONANDO EL UPDATE
    }else {
    die("subida fallida");
    }
    }else {
    echo "al menos lo intentaste";
    }
    }

    public function EliminarContacto()
    {
    $idUsuario=$_POST['idUsuario'];
    $data['estado']=0;
    $this->M_usuario->EliminarContacto($idUsuario, $data);
    redirect(base_url('admin/usuario'),'refresh');
    }


    public function parque()
    {
        $this->load->view('admin/header_admin');
        $data['data']=$this->M_parque->get();
        $this->load->view('admin/turisticos/v_parque',$data);
        $this->load->view('admin/footer_admin');
    }


    public function insert()
    {
        $this->load->view('admin/header_admin');
        $this->load->library('googlemaps');
        $config['center']= '-17.393487, -66.157695';
        $config['zoom']='15';
        $this->googlemaps->initialize($config);
        $marker['position']='-17.393487, -66.157695';
        
        $marker['draggable']= true;
        $marker['ondragend']='setMapToForm(event.latLng.lat(),event.latLng.lng());';
        $this->googlemaps->add_marker($marker);
        
        //validacion input
        $valid=$this->form_validation;
        
        $valid->set_rules('Par_direccion','Par_direccion(Par_direccion)','required', array('required' =>'llene el campo %s'));
        //aqui podemos poner los datos restantes para poder validar con php
       
        if ($valid->run()==FALSE) {
            $data['map']= $this->googlemaps->create_map();
        $this->load->view('admin/turisticos/v_insertParque',$data);
            
        }
        else 
        {   
            $i=$this->input;
            $data = array('Par_descripccion'=> $i->post('Par_descripccion'),
                            'Par_direccion'=> $i->post('Par_direccion'),
                             'latitude'=> $i->post('latitude'),
                            'longitude'=> $i->post('longitude'),                   
                            'Par_horarioAtencion'=> $i->post('Par_horarioAtencion'),                   
                            'Par_precioIngreso'=> $i->post('Par_precioIngreso'),                   
                         );
                         $this->M_parque->insert($data);
                         
                         $this->session->set_flashdata('sukses', 'Se registro con existo!');
                         
                         redirect(base_url('admin/parque'),'refresh');
        }
        $this->load->view('admin/footer_admin');
    }

      // START UPDATE
      public function updateInsti($id)
      {
          
          $this->load->view('admin/header_admin');
          $this->load->library('googlemaps');
          $config['center']= '-17.393487, -66.157695';
          $config['zoom']='15';
          $this->googlemaps->initialize($config);
          $marker['position']='-17.393487, -66.157695';
          $marker['draggable']= true;
          $marker['ondragend']='setMapToForm(event.latLng.lat(),event.latLng.lng());';
          $this->googlemaps->add_marker($marker);
  
          $instituciones=$this->M_parque->detail($id); //update
          
          //validacion input
          $valid=$this->form_validation;
          
          $valid->set_rules('Par_direccion','Par_direccion(s)','required', array('required' =>'llene el campo %s'));
          
          if ($valid->run()==FALSE) {
              $map= $this->googlemaps->create_map();
              $data=array(
                  'map' => $map, 
                  'institucion' =>$instituciones
          );
  
          $this->load->view('admin/turisticos/v_updateParque',$data, False);      
          }
          else 
          {   
              $i=$this->input;
              $data = array(
                              'idParque' => $id,
                              'Par_descripccion'=> $i->post('Par_descripccion'),
                              'Par_direccion'=> $i->post('Par_direccion'),
                              'latitude'=> $i->post('latitude'),
                              'longitude'=> $i->post('longitude'),
                            
                              'Par_horarioAtencion'=> $i->post('Par_horarioAtencion'),
                              'Par_precioIngreso'=> $i->post('Par_precioIngreso'),
                              
                           );
  
                           $this->M_parque->update($data);
                           $this->session->set_flashdata('sukses', 'Se registro con existo!');
                           
                           redirect(base_url('admin/parque'),'refresh');
          }
          $this->load->view('admin/footer_admin');
      }
      // HERE END UPDATE

      public function EliminarParque()
      {
      $idParque=$_POST['idParque'];
      $data['estado']=0;
      $this->M_parque->EliminarParque($idParque, $data);
      redirect(base_url('admin/parque'),'refresh');
      }


   
    




}
