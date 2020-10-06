<?php

/**
 * 
 */
class Query extends CI_Model
{

	function edit_data($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	function get_data($table)
	{
		return $this->db->get($table);
	}

	function insert_data($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	function update_data($table, $data, $where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function update_data_noOrder($table, $data, $where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
		return true;
	}

	function delete_data($table, $where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
