<?php  
class Register extends CI_Controller{
public function index(){
    $this->load->view('login');
}
public function update(){
    extract($_POST);
    $student_id=$stid;
    $data=[
        'student_id'=>$stid,
        'student_name'=>$stname,
        'student_email'=>$stemail,
        'student_mobile'=>$stmobile,
        'student_gender'=>$stgender
    ];
    $this->load->model('Regmodel');
    $result= $this->Regmodel->updateData($student_id,$data);
    if($result){
        $this->fetchdata();
    }else{
        return "error update";
    }
}
public function edit($student_id){
    $this->load->model('Regmodel');
   $result['data']= $this->Regmodel->editData($student_id);
   $this->load->view('display',$result);
}

public function student(){
    $mes['msg']='Your Registation Form';
   $this->load->view('registeration_form',$mes);
}
public function saveData(){
    /*
    $stid=$this->input->post('stid');
    $stname=$this->input->post('stname');
    $stemail=$this->input->post('stemail');
    $stmobile=$this->input->post('stmobile');
    $stgender=$this->input->post('stgender');
    */

    extract($_POST);
    $data=[
        'student_id'=>$stid,
        'student_name'=>$stname,
        'student_email'=>$stemail,
        'student_mobile'=>$stmobile,
        'student_gender'=>$stgender
    ];
    $this->load->model('Regmodel');
    $result=$this->Regmodel->insertData($data);
    if($result){
        $res['status']='successfully inserted';
        $res['test']=200;
       $this->load->view('registeration_form',$res);
       // redirect(base_url('register/student'));
    }else{
        $res['status'] ='Error while inserting data';
        $this->load->view('registeration_form',$res);
    };
}
public function fetchdata(){
    $this->load->model('Regmodel');
    $result['table']=$this->Regmodel->getRecord();
    $this->load->view('display',$result);
}
public function deletedata($student_id){
    $this->load->model('Regmodel');
    $result=$this->Regmodel->deletedata($student_id);
    if ($result){

    }
}

}

?>