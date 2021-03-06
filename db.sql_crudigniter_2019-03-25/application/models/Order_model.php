<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Order_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get order by OrderId
     */
    function get_order($OrderId)
    {
        return $this->db->get_where('Orders',array('OrderId'=>$OrderId))->row_array();
    }
        
    /*
     * Get all orders
     */
    function get_all_orders()
    {
        $this->db->order_by('OrderId', 'desc');
        return $this->db->get('Orders')->result_array();
    }
        
    /*
     * function to add new order
     */
    function add_order($params)
    {
        $this->db->insert('Orders',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update order
     */
    function update_order($OrderId,$params)
    {
        $this->db->where('OrderId',$OrderId);
        return $this->db->update('Orders',$params);
    }
    
    /*
     * function to delete order
     */
    function delete_order($OrderId)
    {
        return $this->db->delete('Orders',array('OrderId'=>$OrderId));
    }
}
