<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: LB
 * Date: 12/31/2017
 * Time: 12:32 PM
 */


Class MY_Model extends CI_Model
{

    /**
     * @var string Table Name
     */
    public $table = '';

    /**
     * @var string Primary key of table
     */
    public $key = 'id';
    /**
     * @var string
     */
    public $order = '';


    /**
     * Create Insert new row
     * @param $data : data
     * @return bool
     */
    function create($data = array())
    {
        if($this->db->insert($this->table, $data))
        {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * Update: Update row from condition
     *
     * @param $where : condition
     * @param $data : data
     * @return bool
     */
    function update_where($where, $data)
    {
        if ( ! $where)
        {
            return FALSE;
        }

        $this->db->where($where);
        $this->db->update($this->table, $data);

        return TRUE;
    }

    /**
     * Query: execute query
     *
     * @param $sql
     * @return mixed
     */
    function query($sql){
        $rows = $this->db->query($sql);
        return $rows->result;
    }


    /**
     * Get_info : get info by fields from condition where
     * @param array $where
     * @param string $field
     * @return bool
     */
    function get_info($where = array(), $field= '')
    {
        if($field)
        {
            $this->db->select($field);
        }
        $this->db->where($where);
        $query = $this->db->get($this->table);
        if ($query->num_rows())
        {
            return $query->result_array();
        }

        return FALSE;
    }

    /**
     * Check_exits
     *
     * @param array $where
     * @return bool
     */
    function check_exists($where = array())
    {

        //thuc hien cau truy van lay du lieu
        $query = $this->db->get_where($this->table, $where);

        if($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}