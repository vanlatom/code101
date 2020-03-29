<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
	{
		echo "home";
    }

    public function get()
	{
        echo "Panya";
        //get post get
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $data['name'] = array ('panya','malinun','tom');
        $data['head']['data'] = "rich";
        $data['head']['name'] = "test";
        $data['footer']['data'] ="poor";
        
        $this->load->view('get_viwe',$data);//p1 file name view ,p2 data array
    }

    public function input()
	{
		echo "input";
    }
    
    public function map()
	{
        echo "map1<br>";
        $this->index();
        echo"<br>map2";
    }

    public function getview()
	{
        
        $this->load->view('home_viwe'); 

        
    }
    
}
