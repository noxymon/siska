<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: prk
 * Date: 3/21/2018
 * Time: 8:20 PM
 */
class Home extends CI_Controller
{
    public function index()
    {
        $data['nama'] = $this->input->get('nama');
        $this->load->view('home', $data);
    }
}