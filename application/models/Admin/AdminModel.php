<?php
	/**
	  * 
	  */
	class AdminModel extends CI_Model
	{
	 	
	 	public function __construct()
	 	{
	 		parent::__construct();
	 		
	 	}

	 	public function login($auname, $apwd)
	 	{
	 		$data = array('aname'=> $auname, 'apass'=>$apwd);
	 		$check = $this->db->get_where('admin', $data);
	 		if($check->num_rows()>0)
	 		{
	 			return true;
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function InsertProductName()
	 	{
	 		$data = array('item_name' => $this->input->post('prod_name'));
	 		$res = $this->db->insert('items',$data);
	 		if($res)
	 		{
	 			return true;
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function ExistProduct()
	 	{
			$data = array('item_name' =>$this->input->post('prod_name'));
			$res = $this->db->get_where('items', $data); 
			if($res->num_rows() > 0)
			{
				return true;
			}
		}

		public function GetAllItems()
		{
			$get_items = $this->db->select()->from('items')->get();
			if($get_items->num_rows() > 0)
			{
				return $get_items->result();
			}
			else
			{
				return $get_items->result();
			}
		} 

		public function ItemBrandInsert()
		{
			$data = array('item_id'=>$this->input->post('item_id'), 'br_name'=>$this->input->post('brand_name'));
			$ins_res = $this->db->insert('brands',$data);
			if($ins_res)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function ItemBrandExist()
		{
			$data = array('item_id'=>$this->input->post('item_id'), 'br_name'=>$this->input->post('brand_name'));
			$exist_res = $this->db->get_where('brands', $data);
			if($exist_res->num_rows() > 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function GetMobileBrand()
		{
			$get_item_id = $this->db->get_where('items', ['item_name'=>'Mobiles']);
			if($get_item_id->num_rows()>0)
			{
				$item_id = $get_item_id->row('item_id');
				$br_name = $this->db->get_where('brands', ['item_id'=>$item_id]);
				if($br_name->num_rows() > 0)
				{
					return $br_name->result();
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}

		public function GetAllSellers()
		{
			$get_sellers = $this->db->select()->from('seller')->order_by('sid','desc')->get();
			if($get_sellers->num_rows() > 0)
			{
				return $get_sellers->result();
			}
			else
			{
				return $get_sellers->result();
			}
		}

		public function AllSellerData()
		{
			$get_seller_data = $this->db->select()->from('seller')->order_by('sid','desc')->get();
			if($get_seller_data->num_rows() > 0)
			{
				return $get_seller_data->result();
			}
			else
			{
				return $get_seller_data->result();
			}
		}

		public function VerifySeller($sid)
		{
			$check = $this->db->get_where('seller',['sid'=>$sid,'verified'=>'no']);
			if($check->num_rows() > 0)
			{
				$verify_seller=$this->db->where('sid',$sid)->update('seller',['verified'=>'yes']);
				if($verify_seller)
				{
					$data = array('sl_sid'=>$sid, 'sl_stdate'=>date('Y-m-d'), 'sl_ldate'=>date('Y-m-d',strtotime("+7 days")), 'sl_num'=>'10', 'sl_type'=>'Auction', 'sl_month'=>date('m'), 'sl_year'=>date('Y'));
					$ins_listing = $this->db->insert('seller_listing',$data);
					if($ins_listing)
					{
						$data = array('sl_sid'=>$sid, 'sl_stdate'=>date('Y-m-d'), 'sl_ldate'=>date('Y-m-d',strtotime("+30 days")), 'sl_num'=>'10', 'sl_type'=>'fixed', 'sl_month'=>date('m'), 'sl_year'=>date('Y'));
						$ins_fixlst = $this->db->insert('seller_listing',$data);
						if($ins_fixlst)
						{
							return true;
						}
						else
						{
							return false;
						}
					}
					else
					{
						return false;	
					}
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
	}
?>