<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pegawai_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get pegawai by id_pegawai
     */
    function get_pegawai($id_pegawai)
    {
        return $this->db->get_where('pegawai',array('id_pegawai'=>$id_pegawai))->row_array();
    }
        
    /*
     * Get all pegawai
     */
    function get_all_pegawai()
    {
        $this->db->order_by('id_pegawai', 'desc');
        return $this->db->get('pegawai')->result_array();
    }
        
    /*
     * function to add new pegawai
     */
    function add_pegawai($params)
    {
        $this->db->insert('pegawai',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update pegawai
     */
    function update_pegawai($id_pegawai,$params)
    {
        $this->db->where('id_pegawai',$id_pegawai);
        return $this->db->update('pegawai',$params);
    }
    
    /*
     * function to delete pegawai
     */
    function delete_pegawai($id_pegawai)
    {
        return $this->db->delete('pegawai',array('id_pegawai'=>$id_pegawai));
    }
}
