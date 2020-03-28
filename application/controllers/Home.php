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
    
}
