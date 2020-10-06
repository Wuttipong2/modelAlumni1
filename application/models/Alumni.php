<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Model {
    

public function regAlimni($data){
    $this->db->insert('alumni',$data);
}
public function updateWork($data,$al_id){
    $this->db->where('al_id',$al_id);
    $this->db->update('alumni',$data);
}
public function updateContact($data,$al_id){
    $this->db->where('al_id',$al_id);
    $this->db->update('alumni',$data);
}
public function getAlumni(){
    $this->db->select('al_id', 'al_fname', 'al_lname', 'al_age', 'al_phone', 'al_work', 'al_email');
    $result = $this->db->get('alumni');
    return $result;
}

}