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
		//dang ki
		public function thanhvien($taikhoan = array()){
			if (!empty($taikhoan['tentk'])) {
				$query = $this->db->get_where('taikhoan',array('tentk' => $taikhoan['tentk']));
				if (count($query->result_array())<1) {
					$this->db->insert('taikhoan',$taikhoan);
					return true;
				}
			}
			return false;
		}
		//dang nhap
		public function thanhvien_dangnhap($taikhoan = array()){
			if (!empty($taikhoan['tendn'])) {
				$query = $this->db->get_where('taikhoan',array('tentk' => $taikhoan['tendn'],'matkhau' => $taikhoan['matkhau']));
				if (count($query->result_array())>0) {
						return $query->row_array();
				}
			}
			return null;
		}
		//tin tuc con nghe
		public function home_news()
		{
			$this->db->order_by('id', 'desc');
			$query = $this->db->get('tintuc',4,0);
			return $query->result_array(); 
		}
		//hien 18 san pham moi nhat
		public function home_product()
		{

			$this->db->order_by('id','desc');
			$query = $this->db->get('dienthoai',18,0);
			return $query->result_array();
		}
		//hien thi san pham theo loai
		public function home_getproduct($param)
		{
			$this->db->where('idLoai',$param);
			$this->db->order_by('id','desc');
			$query = $this->db->get('dienthoai');
			return $query->result_array();
		}
		//hien thi tat ca bai viet
		public function news_new()
		{
			$this->db->order_by('id','desc');
			$query = $this->db->get('tintuc');
			return $query->result_array();
		}
		//tin tuc cong nghe khac
		public function details_newca($param)
		{
			$this->db->not_like('id',$param);
			$this->db->order_by('id', 'desc');
			$query = $this->db->get('tintuc',4,0);
			return $query->result_array(); 
		}
		//bai viet ngau nhien		
		public function news_random()
		{
			$this->db->order_by('id','RANDOM');
			$query =$this->db->get('tintuc');
			return $query->result_array();
		}
		//chi tiet bai viet
		public function details_detail($param){
			$this->db->like('id',$param);
			$query = $this->db->get('tintuc');
			return $query->row_array();
		}
		//chi tiet san pham
		public function product_detail($param){
			$this->db->select('*');
			$this->db->from('chitietdienthoai');
			$this->db->join('dienthoai','dienthoai.id = chitietdienthoai.idSP');
			$this->db->like('idSP',$param);
			$query = $this->db->get();
			return $query->row_array();
		}
		//san pham cung loai
		public function product_relate($param,$idsp){
			$this->db->where('idLoai',$param);
			$this->db->not_like('id',$idsp);
			$this->db->order_by('id','RANDOM');
			$query = $this->db->get('dienthoai',4,0);
			return $query->result_array();
		}

		//tim kiem san pham
		public function search_tk($param = array())
		{
			$this->db->like(array('tendienthoai' => $param['keyword']));
			$this->db->or_like(array('gia' => $param['keyword']));
			$query = $this->db->get('dienthoai');
			return $query->result_array();
		}

		//Admin

		//quan ly tai khoan

		public function admin_user($param = false){
			if ($param == false) {
				$query = $this->db->get('taikhoan');
				return $query->result_array();
			}
			$this->db->like('tentk',$param);
			$query = $this->db->get('taikhoan');
			return $query->row_array();
		}

		public function admin_user_update($id,$param = array()){
			$this->db->where('tentk',$id);
			$this->db->update('taikhoan',$param);
		}

		public function admin_user_delete($tentk){
			$this->db->where('tentk',$tentk);
			$this->db->delete('taikhoan');
		}

		//quan ly San pham
		public function admin_product($param = false)
		{
			if ($param == false) {
				$query = $this->db->get('dienthoai');
				return $query->result_array();
			}
			

			$this->db->from('dienthoai');
			$this->db->like('dienthoai.id',$param);
			$this->db->join('chitietdienthoai', 'chitietdienthoai.idSP = dienthoai.id');
			$query = $this->db->get();
			return $query->row_array();
		}

		public function admin_category()
		{
			$query = $this->db->get("loaidienthoai");
			return $query->result_array();
		}

		public function admin_product_delete($param){
			$this->db->where('id',$param);
			$this->db->delete('dienthoai');
		}

		public function admin_product_update($id,$param = array())
		{
			$this->db->where('id',$id);
			$this->db->update('dienthoai',$param);
		}

		public function admin_dtproduct_update($id,$param = array())
		{
			$this->db->where('idSP',$id);
			$this->db->update('chitietdienthoai',$param);
		}

		public function admin_idsp()
		{
			$this->db->order_by('id','DESC');
			$query = $this->db->get('dienthoai',1,0);
			return $query->row_array();
		}

		public function admin_product_insert($values = array())
		{
			if (empty($values['chitiet'])) {
				if (empty($values['dienthoai']['hinh'])) {
					$values['dienthoai']['hinh'] = '';
					$this->db->insert('dienthoai',$values['dienthoai']);
				}
				else
				{
					$this->db->insert('dienthoai',$values['dienthoai']);
				}
			}else{
				$this->db->insert('chitietdienthoai',$values['chitiet']);
			}
		}


		//quan ly tin tuc

		public function  admin_new($param = false)
		{
			if ($param == false) 
			{
				$query = $this->db->get('tintuc');
				return $query->result_array();
			}
			$this->db->like('id',$param);
			$query = $this->db->get('tintuc');
			return $query->row_array();
		}

		public function admin_new_delete($param)
		{
			$this->db->where('id',$param);
			$this->db->delete('tintuc');
		}

		public function admin_new_update($id,$param = array()){
			$this->db->where('id',$id);
			$this->db->update('tintuc',$param);
		}

		public function admin_new_insert($param = array()){
			if (empty($param['hinh'])) {
				$param['hinh'] = '';
				$this->db->insert('tintuc',$param);
			}
			else
			{
				$this->db->insert('tintuc',$param);
			}
			
		}
	}
 ?>