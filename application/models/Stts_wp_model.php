<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Stts_wp_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get stts_wp by id_sttswp
     */
    function get_stts_wp($id_sttswp)
    {
        return $this->db->get_where('stts_wp',array('id_sttswp'=>$id_sttswp))->row_array();
    }
        
    /*
     * Get all stts_wp
     */
    function get_all_stts_wp()
    {
        $this->db->order_by('id_sttswp', 'desc');
        return $this->db->get('stts_wp')->result_array();
    }
        
    /*
     * function to add new stts_wp
     */
    function add_stts_wp($params)
    {
        $this->db->insert('stts_wp',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update stts_wp
     */
    function update_stts_wp($id_sttswp,$params)
    {
        $this->db->where('id_sttswp',$id_sttswp);
        return $this->db->update('stts_wp',$params);
    }
    
    /*
     * function to delete stts_wp
     */
    function delete_stts_wp($id_sttswp)
    {
        return $this->db->delete('stts_wp',array('id_sttswp'=>$id_sttswp));
    }
}