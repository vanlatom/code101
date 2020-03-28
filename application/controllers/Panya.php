<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panya extends CI_Controller {


    function __construct() {
        parent::__construct();
        {
            echo "you";
        }
        
        
    }
    public function index()
	{
		echo "Panya";
    }
    
    function __destruct() {
       
        {
            echo "Malinun";
        }
        
    }

   

}
