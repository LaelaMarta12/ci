<?php
    class Home extends CI_Controller{
        function index(){
            $this->load->view('tools/head');
            $this->load->view('tools/navigasi');
            $this->load->view('tools/header');
            $this->load->view('tools/portopolio');
            $this->load->view('menu');
            $this->load->view('tools/js');
            $this->load->view('tools/footer');
        }
        function profile(){
            $this->load->view('tools/head');
            $this->load->view('tools/navigasi');
            $this->load->view('tools/header');
            //$this->load->view('tools/portopolio');
            $this->load->view('home');
            $this->load->view('tools/js');
            //$this->load->view('tools/footer');
        }
    }
?>