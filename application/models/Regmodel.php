<?php
class Regmodel extends CI_Model{
    public function updateData($student_id,$data){
      $this->load->database();
      $this->db->where('student_id',$student_id);
     return $this->db->update('studentpas',$data);
    }
    public function editData($student_id){
        $this->load->database();
        $this->db->where('student_id',$student_id);
        return $this->db->get('studentpas')->result();
    }
    public function insertData($data){
    $this->load->database();
    //insert into studentreg(student_id,student_name,student_email,student_mobile,student_gender);
     return $this->db->insert('studentpas',$data);
    
    } 
    
    public function getRecord(){
        $this->load->database();
        return $this->db->get('studentpas')->result();
        
    }
    public function deletedata($student_id){
        $this->load->database();
        $this->db->where('student_id',$student_id);
        return $this->db->delete('studentpas');
    }
}
?>