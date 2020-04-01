<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function addform(){
        $this->load->view('user/addform_view');
    }


    public function addsave(){
        echo "addsave";
        $data_insert = array(
            'username' => $this->input->post('username'),
            'password'  => $this->input->post('password'),
            'name'  => $this->input->post('name'),
            'age'   => $this->input->post('age'),
            'birthday' =>$this->input->post('birthday')
        );
        $this->load->model('user_model');

        $this->user_model->add_save($data_insert);

        echo "<br>OK";
        

    }
}
