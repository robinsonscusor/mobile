<?php 
	/**
	* 
	*/
	class Model_mobi extends CI_Model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		public function thanhvien($taikhoan = array()){
			if (!empty($taikhoan['tentk'])) {
				$query = $this->db->get_where('taikhoan',array('tentk' => $taikhoan['tentk']));
				if (empty($query->result_array())) {
					$this->db->insert('taikhoan',$taikhoan);
					return true;
				}
				return false;
			}
			
		}
	}
 ?>