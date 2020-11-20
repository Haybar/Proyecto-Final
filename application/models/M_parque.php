<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_parque extends CI_Model {

    public function get()
    {
    $this->db->from('parque');
    $this->db->where('estado',1);
    $query = $this->db->get();
    return $query->result();
    }

    public function registrarMap()
    {
        $this->db->select('*');
        $this->db->from('parque');
        $query= $this->db->get(); 
        return $query->result();
    }

    public function retornarInstitucion() /*poner arriba*/
    {
          $this->db->select('*');
          $this->db->from('parque');
        //   $this->db->where('tipoCentro','Institucion');
          return $this->db->get();
    }

    public function insert($data)
    {
        $this->db->insert('parque',$data);
        return TRUE;
    }
      // HERE STAR UPDATE
      public function detail ($idParque)
      {
      $this->db->from('parque');
      $this->db->where('idParque',$idParque);
      $query=$this->db->get();
      return $query->row();
      }
  
      public function  update($data)
      {
          $this->db->where('idParque',$data['idParque']);
          $this->db->update('parque',$data);
      }

      public function EliminarParque($idParque,$data)
    {
    $this->db->WHERE('idParque',$idParque);
    $this->db->UPDATE('parque',$data);
    }

}

/* End of file M_parque.php */


?>