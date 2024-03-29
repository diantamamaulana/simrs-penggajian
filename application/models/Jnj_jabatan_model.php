<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Jnj_jabatan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get jnj_jabatan by id_jenjangjbtn
     */
    function get_jnj_jabatan($id_jenjangjbtn)
    {
        return $this->db->get_where('jnj_jabatan',array('id_jenjangjbtn'=>$id_jenjangjbtn))->row_array();
    }
        
    /*
     * Get all jnj_jabatan
     */
    function get_all_jnj_jabatan()
    {
        $this->db->order_by('id_jenjangjbtn', 'desc');
        return $this->db->get('jnj_jabatan')->result_array();
    }
        
    /*
     * function to add new jnj_jabatan
     */
    function add_jnj_jabatan($params)
    {
        $this->db->insert('jnj_jabatan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update jnj_jabatan
     */
    function update_jnj_jabatan($id_jenjangjbtn,$params)
    {
        $this->db->where('id_jenjangjbtn',$id_jenjangjbtn);
        return $this->db->update('jnj_jabatan',$params);
    }
    
    /*
     * function to delete jnj_jabatan
     */
    function delete_jnj_jabatan($id_jenjangjbtn)
    {
        return $this->db->delete('jnj_jabatan',array('id_jenjangjbtn'=>$id_jenjangjbtn));
    }
}
