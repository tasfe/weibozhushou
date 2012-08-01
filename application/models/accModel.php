<?php
class accModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function isAccExist($p_acc)
	{
		$query = $this->db->query("select * from acc where acc = ".$p_acc);
		$arrRow = $query ->row_array();
		if (isset($arrRow['acc']))
		{
			return true;
		}
		return false;	
	}
}