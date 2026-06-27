<?php

defined('BASEPATH') OR exit('No direct script access allowed');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               

class PageController extends CI_Controller{
    
// public function index()
//     {
//         echo " his is the first program about controller";
//     }

// public function index2()
// {
//     echo " This is my second function";
// }

// public function blog($blog_url = '')

// {
//     echo "$blog_url";
//     $this ->load->view('blogview');
// }

public function demo()

{

$data['title']="Web page using views in codeigniter";
$data['body']="same file but its inside the body";
$this->load->view('demopage',$data );

}

}
