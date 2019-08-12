<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Stts_wp extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Stts_wp_model');
    } 

    /*
     * Listing of stts_wp
     */
    function index()
    {
        $data['stts_wp'] = $this->Stts_wp_model->get_all_stts_wp();
        
        $data['_view'] = 'stts_wp/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new stts_wp
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'stts' => $this->input->post('stts'),
				'ktg' => $this->input->post('ktg'),
            );
            
            $stts_wp_id = $this->Stts_wp_model->add_stts_wp($params);
            redirect('stts_wp/index');
        }
        else
        {            
            $data['_view'] = 'stts_wp/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a stts_wp
     */
    function edit($id_sttswp)
    {   
        // check if the stts_wp exists before trying to edit it
        $data['stts_wp'] = $this->Stts_wp_model->get_stts_wp($id_sttswp);
        
        if(isset($data['stts_wp']['id_sttswp']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'stts' => $this->input->post('stts'),
					'ktg' => $this->input->post('ktg'),
                );

                $this->Stts_wp_model->update_stts_wp($id_sttswp,$params);            
                redirect('stts_wp/index');
            }
            else
            {
                $data['_view'] = 'stts_wp/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The stts_wp you are trying to edit does not exist.');
    } 

    /*
     * Deleting stts_wp
     */
    function remove($id_sttswp)
    {
        $stts_wp = $this->Stts_wp_model->get_stts_wp($id_sttswp);

        // check if the stts_wp exists before trying to delete it
        if(isset($stts_wp['id_sttswp']))
        {
            $this->Stts_wp_model->delete_stts_wp($id_sttswp);
            redirect('stts_wp/index');
        }
        else
            show_error('The stts_wp you are trying to delete does not exist.');
    }
    
}