<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        
    }

    function index()
    {
        $data['page'] = 'admin';
        $data['title'] = "Dashboard";
        $data['_view'] = 'dashboard';
        $this->renderAdmin($data);
        
    }
    public function renderAdmin($data){
        $this->load->view('layouts/header', $data); 
        $this->load->view('layouts/sidebar' );
        $this->load->view('layouts/maincontent');
        $this->load->view('layouts/footer');
      }
}
