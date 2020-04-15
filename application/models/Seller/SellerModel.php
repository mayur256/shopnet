<?php
	/**
	  * 
	  */
	 class SellerModel extends CI_Model
	 {
	 	
	 	public function __construct()
	 	{
	 	}

	 	public function createAccount($cname, $email, $paswd, $mob, $pin, $pan, $gst)
	 	{
	 		$data = array('comp_name'=>$cname,
	 						'semail'=>$email,
	 						'spass'=>$paswd,
	 						'smob'=>$mob,
	 						'spcode'=>$pin,
	 						'span'=>$pan,
	 						'sgst'=>$gst,
	 						'screate_date' => date('Y-m-d'),
	 						'smonth' => date('m'), 
	 						'syear' => date('Y'));
	 		$insert = $this->db->insert('seller', $data);
	 		if($insert)
	 		{
	 			return true;
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}
	 	public function login($uname, $pwd)
	 	{
	 		$data = array('semail'=> $uname, 'spass'=>$pwd);
	 		$check = $this->db->get_where('seller', $data);
	 		if($check->num_rows()>0)
	 		{
	 			return true;
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function getSellerId($suname, $spass)
	 	{
	 		$seller_result = $this->db->get_where('seller', ['semail'=>$suname, 'spass'=>$spass]);
	 		if($seller_result->num_rows() > 0)
	 		{
	 			return $seller_result->row('sid');
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function CheckContact()
	 	{
	 			$uname = $this->session->userdata('seller_username');
	 			$pwd = $this->session->userdata('seller_password');
	 			$check = $this->db->get_where('seller', ['semail'=>$uname, 'spass'=>$pwd]);
	 			if($check->num_rows() > 0)
	 			{
	 				$s_id = $check->row('sid');
	 				$check_saddr = $this->db->get_where('seller',['sid'=>$s_id, 'saddr'=>'']);
	 				if($check_saddr->num_rows() > 0)
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

	 			}
	 	}
	 	public function InsertSellerContact($sfname, $slname, $saddr, $scity)
	 	{
	 		$uname = $this->session->userdata('seller_username');
	 		$pwd = $this->session->userdata('seller_password');
	 		$check = $this->db->get_where('seller',['semail'=>$uname, 'spass'=>$pwd]);
	 		if($check->num_rows() > 0)
	 		{
	 			$s_id = $check->row('sid');
	 			//echo $this->db->last_query();
	 			$update_res =$this->db->where('sid',$s_id)->update('seller', ['sfname'=>$sfname, 'slname'=>$slname, 'saddr'=>$saddr, 'scity'=>$scity]);
	 			if($update_res)
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

	 	public function InsertMobGenInfo($mob_title, $mob_brand, $model_no, $mob_name, $color, $simno, $sim_config, $otg, $sellid)
	 	{
	 		$data = array('mob_title'=>$mob_title, 'model_no'=>$model_no, 'mob_name'=>$mob_name, 'mob_color'=>$color, 'sim_num'=>$simno, 'sim_type'=>$sim_config, 'mob_brand'=>$mob_brand, 'otg_sup'=>$otg, 'seller_id'=>$sellid);
	 		$ins_res = $this->db->insert('mobiles', $data);
	 		if($ins_res)
	 		{
	 			return $this->db->insert_id();
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function InsertMobDispInfo($data, $m_id)
	 	{
	 		$update_res = $this->db->where('mob_id',$m_id)->update('mobiles',$data);
	 		if($update_res)
	 		{
	 			return true;
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function InsertMobProcessorInfo($data, $m_id)
	 	{
	 		$update_res = $this->db->where('mob_id',$m_id)->update('mobiles',$data);
	 		if($update_res)
	 		{
	 			return true;
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function InsertMobStorageInfo($data, $m_id)
	 	{
	 		$update_res = $this->db->where('mob_id',$m_id)->update('mobiles',$data);
	 		if($update_res)
	 		{
	 			return true;
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function InsertMobCameraInfo($data, $m_id)
	 	{
	 		$update_res = $this->db->where('mob_id',$m_id)->update('mobiles',$data);
	 		if($update_res)
	 		{
	 			return true;
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function InsertMobConnectivityInfo($data, $m_id)
	 	{
	 		$update_res = $this->db->where('mob_id',$m_id)->update('mobiles',$data);
	 		if($update_res)
	 		{
	 			return true;
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function InsertMobListingInfo($data, $m_id)
	 	{
	 		$update_res = $this->db->where('mob_id',$m_id)->update('mobiles',$data);
	 		if($update_res)
	 		{
	 			return true;
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function MobileImgUpload($mobid)
	 	{
	 		/*echo "Seller Model";
	 		var_dump($mobid);
	 		exit();*/
	 		$config['upload_path'] = "./MobileImages";
	 		$config['allowed_types'] = "jpg|jpeg|gif|png";
	 		$this->load->library('upload',$config);

	 		$name_img1 = $this->upload->do_upload('img_one').$this->upload->data('file_name');
	 		$name_img2 = $this->upload->do_upload('img_two').$this->upload->data('file_name');
	 		$name_img3 = $this->upload->do_upload('img_three').$this->upload->data('file_name');
	 		$name_img4 = $this->upload->do_upload('img_four').$this->upload->data('file_name');

	 		$path_img1 = substr($name_img1, 1);
	 		$path_img2 = substr($name_img2, 1);
	 		$path_img3 = substr($name_img3, 1);
	 		$path_img4 = substr($name_img4, 1);

	 		$data = array('mob_img1'=>$path_img1,
	 					'mob_img2'=>$path_img2,
	 					'mob_img3'=>$path_img3,
	 					'mob_img4'=>$path_img4,);
	 		$update_img = $this->db->where('mob_id',$mobid)->update('mobiles',$data);
	 		if($update_img)
	 		{
	 			return true;
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function GetMobImages($mobid)
	 	{
	 		$get_imgs = $this->db->get_where('mobiles',['mob_id'=>$mobid]);
	 		if($get_imgs->num_rows() > 0)
	 		{
	 			return $get_imgs->row();
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function Get_Auction_Data()
	 	{
	 		$suname = $this->session->userdata('seller_username');
	 		$spass = $this->session->userdata('seller_password');
	 		$get_seller_info = $this->db->get_where('seller',['semail'=>$suname, 'spass'=>$spass]);
	 		if($get_seller_info->num_rows() > 0)
	 		{
	 			$seller_id = $get_seller_info->row('sid');
	 			$auc_data = $this->db->get_where('seller_listing',['sl_sid'=>$seller_id, 'sl_type'=>'auction']);
	 			if($auc_data->num_rows() > 0)
	 			{
	 				return $auc_data->row();
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

	 	public function GetUsedAucList()
	 	{
	 		$suname = $this->session->userdata('seller_username');
	 		$spass = $this->session->userdata('seller_password');
	 		$get_seller_info = $this->db->get_where('seller',['semail'=>$suname, 'spass'=>$spass]);
	 		if($get_seller_info->num_rows() > 0)
	 		{
	 			$seller_id = $get_seller_info->row('sid');
	 			$auc_data = $this->db->get_where('seller_listing',['sl_sid'=>$seller_id, 'sl_type'=>'auction']);
	 			if($auc_data->num_rows() > 0)
	 			{
	 				$start_date = $auc_data->row('sl_stdate');
	 				$last_date = $auc_data->row('sl_ldate');
	 				$sql = "SELECT * FROM mobiles WHERE (upload_date BETWEEN '$start_date' AND '$last_date') AND seller_id = $seller_id AND (duration_format = '7 days' OR duration_format = '10 days')";
	 				/*$used_aulist = $this->db->get_where('mobiles', ['seller_id'=>$seller_id, 'upload_date>='=>$start_date, 'upload_date<='=>$last_date]);*/
	 				$used_aulist = $this->db->query($sql);
	 				if($used_aulist->num_rows() > 0)
	 				{
	 					return $used_aulist->result();
	 				}
	 				else
	 				{
	 					return $used_aulist->result();
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


	 	public function CheckAucFixListFee()
	 	{
	 		$input_dur = $this->input->post('dur_format');
	 		$su = $this->session->userdata('seller_username');
	 		$sp = $this->session->userdata('seller_password');
	 		$chk_sellr = $this->db->get_where('seller',['semail'=>$su, 'spass'=>$sp]);
	 		if($input_dur == '1')
	 		{
	 			$dur = "7 days";
	 		}
	 		else if($input_dur == '2')
	 		{
	 			$dur = "10 days";
	 		}
	 		else
	 		{
	 			$dur = "30 days";
	 		}
	 		if($chk_sellr->num_rows() > 0)
	 		{
	 			$sid = $chk_sellr->row('sid');
	 			if($dur == "7 days" OR $dur == "10 days")
	 			{
	 				$get_auclst = $this->db->get_where('seller_listing', ['sl_sid'=>$sid, 'sl_type'=>'auction']);
	 				if($get_auclst->row('sl_ldate') > date('Y-m-d'))
	 				{	
	 					if($get_auclst->num_rows() > 0)
	 					{
	 						$auclst = $get_auclst->row();
	 						$getmoblst = $this->db->get_where('mobiles',['seller_id'=>$sid, 'upload_date>='=>$auclst->sl_stdate, 'upload_date<='=>$auclst->sl_ldate]); //listing info w.r.t mobiles table
	 						//count no. of listing for mobiles
	 						if($getmoblst->num_rows() > 0)
	 						{
	 							$moblist_count = $getmoblst->num_rows();
	 						}
	 						else
	 						{
	 							$moblist_count = "0";
	 						}

	 						$getpblst = $this->db->get_where('powerbanks',['seller_id'=>$sid, 'upload_date>='=>$auclst->sl_stdate, 'upload_date<='=>$auclst->sl_ldate]); //listing info w.r.t. powerbanks table
	 						//count no. of listing for powerbanks
	 						if($getpblst->num_rows() > 0)
	 						{
	 							$pblist_count = $getpblst->num_rows();
	 						}
	 						else
	 						{
	 							$pblist_count = "0";
	 						}

	 						//count total listinf for auctions
	 						$totlisting_count = $moblist_count + $pblist_count;
	 						if($totlisting_count > $auclst->sl_num)
	 						{
	 							return $listingfee = "50";
	 						}
	 						else
	 						{
	 							return $listingfee = "0";
	 						}
	 					}
	 					else
	 					{
	 						return false;
	 					}
	 				}
	 				else
	 				{
	 					return $listingfee = "50";
	 				}	
	 			}
	 			else
	 			{
	 				$get_fixlst = $this->db->get_where('seller_listing', ['sl_sid'=>$sid, 'sl_type'=>'fixed']);
	 				if($get_fixlst->num_rows() > 0)
	 				{
	 					$get_fix = $this->db->get_where('seller_listing',['sl_sid'=>$sid, 'sl_type'=>'fixed']);
	 					if($get_fix->num_rows() > 0)
	 					{
	 						if($get_fix->row('sl_ldate') > date('Y-m-d'))
	 						{
	 							$fixprice_list = $get_fix->row();
	 							$getfix_moblst = $this->db->get_where('mobiles',['seller_id'=>$sid, 'upload_date>='=>$fixprice_list->sl_stdate, 'upload_date<='=>$fixprice_list->sl_ldate]);//fix listing info w.r.t mobiles table
	 							//count fixlisting for mobile
	 							if($getfix_moblst->num_rows() > 0)
	 							{
	 								$mobfixlist_count = $getfix_moblst->num_rows();
	 							}
	 							else
	 							{
	 								$mobfixlist_count = "0";
	 							}

	 							$getfix_pblst = $this->db->get_where('powerbanks',['seller_id'=>$sid, 'upload_date>='=>$fixprice_list->sl_stdate, 'upload_date<='=>$fixprice_list->sl_ldate]);//fix listing info w.r.t powerbanks table
	 							//count fixlisting for mobile
	 							if($getfix_pblst->num_rows() > 0)
	 							{
	 								$pbfixlist_count = $getfix_pblst->num_rows();
	 							}
	 							else
	 							{
	 								$pbfixlist_count = "0";
	 							}



	 							//total fix listing count
	 							$totfixlisting_count = $mobfixlist_count + $pbfixlist_count;
	 							if($totfixlisting_count > $fixprice_list->sl_num)
	 							{
	 								return $listingfee = "50";
	 							}
	 							else
	 							{
	 								return $listingfee = "0";
	 							}
	 						}
	 						else
	 						{
	 							return $listingfee = "50";
	 						}
	 					}
	 					else 
	 					{
	 						return false;
	 					}

	 				}
	 				else
	 				{
	 					return "error0";
	 				}
	 			}
	 		}
	 	}

	 	public function Get_Fixed_Data()
	 	{
	 		$suname = $this->session->userdata('seller_username');
	 		$spass = $this->session->userdata('seller_password');
	 		$get_seller_info = $this->db->get_where('seller',['semail'=>$suname, 'spass'=>$spass]);
	 		if($get_seller_info->num_rows() > 0)
	 		{
	 			$seller_id = $get_seller_info->row('sid');
	 			$fixlist_data = $this->db->get_where('seller_listing',['sl_sid'=>$seller_id, 'sl_type'=>'fixed']);
	 			if($fixlist_data->num_rows() > 0)
	 			{
	 				return $fixlist_data->row();
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


	 	public function GetUsedFixList()
	 	{
	 		$suname = $this->session->userdata('seller_username');
	 		$spass = $this->session->userdata('seller_password');
	 		$get_seller_info = $this->db->get_where('seller',['semail'=>$suname, 'spass'=>$spass]);
	 		if($get_seller_info->num_rows() > 0)
	 		{
	 			$seller_id = $get_seller_info->row('sid');
	 			$fix_data = $this->db->get_where('seller_listing',['sl_sid'=>$seller_id, 'sl_type'=>'fixed']);
	 			if($fix_data->num_rows() > 0)
	 			{
	 				$start_date = $fix_data->row('sl_stdate');
	 				$last_date = $fix_data->row('sl_ldate');
	 				$used_fixlist = $this->db->get_where('mobiles', ['seller_id'=>$seller_id, 'upload_date>='=>$start_date, 'upload_date<='=>$last_date,'duration_format'=>'30 days']);
	 				if($used_fixlist->num_rows() > 0)
	 				{
	 					return $used_fixlist->result();
	 				}
	 				else
	 				{
	 					return $used_fixlist->result();
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

	 	public function MobilePreview($mid)
	 	{
	 		$res = $this->db->get_where('mobiles',['mob_id'=>$mid]);
	 		if($res->num_rows() > 0)
	 		{
	 			return $res->row();
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function GetSellerInfo()
	 	{
	 		$uname = $this->session->userdata('seller_username');
	 		$pass = $this->session->userdata('seller_password');
	 		$seller_info = $this->db->get_where('seller',['semail'=>$uname, 'spass'=>$pass]);
	 		if($seller_info->num_rows() > 0)
	 		{
	 			return $seller_info->row();
	 		}
	 		else
	 		{
	 			return $seller_info->row();
	 		}
	 	}


	 	public function InsertMobListFee()
	 	{
	 		$fee = $this->input->post('fee');
	 		$mobid = $this->input->post('mobid');

	 		$update_res = $this->db->where('mob_id',$mobid)->update('mobiles',['listing_fee'=>$fee]);
	 		if($update_res)
	 		{
	 			$sql = "INSERT INTO live_mobiles SELECT * FROM mobiles WHERE mob_id = $mobid";
	 			$ins_res = $this->db->query($sql);
	 			if($ins_res)
	 			{
	 				$del_res = $this->db->where('mob_id',$mobid)->delete('mobiles');
	 				if($del_res)
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

	 	public function PowerBankDetailInsert($data)
	 	{
	 		$result = $this->db->insert('powerbanks',$data);
	 		if($result)
	 		{
	 			return $this->db->insert_id();
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}


	 	public function PowerBankImgUpload($pbid)
	 	{
	 		$config['upload_path'] = "./MobAccessoryImages/Power Bank";
	 		$config['allowed_types'] = "jpg|jpeg|gif|png";
	 		$this->load->library('upload', $config);

			$name_img1 = $this->upload->do_upload('img1').$this->upload->data('file_name');
			$name_img2 = $this->upload->do_upload('img2').$this->upload->data('file_name');	
			$name_img3 = $this->upload->do_upload('img3').$this->upload->data('file_name'); 
			$name_img4 = $this->upload->do_upload('img4').$this->upload->data('file_name');	

			$path_img1 = substr($name_img1,1);
			$path_img2 = substr($name_img2,1);	
			$path_img3 = substr($name_img3,1);
			$path_img4 = substr($name_img4,1);
			
			$data = array('pb_img1'=>$path_img1,
						'pb_img2'=>$path_img2,
						'pb_img3'=>$path_img3,
						'pb_img4'=>$path_img4);
			$update_img = $this->db->where('pb_id',$pbid)->update('powerbanks',$data);
			if($update_img)
			{
				return true;
			}
			else
			{
				return false;
			}
	 	}

	 	public function GetPowerBankImages($pbid)
	 	{
	 		$get_imgs = $this->db->get_where('powerbanks',['pb_id'=>$pbid]);
	 		if($get_imgs->num_rows() > 0)
	 		{
	 			return $get_imgs->row();
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function MemoryCardDetailInsert($data)
	 	{
	 		$result = $this->db->insert('memorycard',$data);
	 		if($result)
	 		{
	 			return $this->db->insert_id();
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}


	 	public function MemoryCardImgUpload($mcid)
	 	{
	 		$config['upload_path'] = "./MobAccessoryImages/Memory Card";
	 		$config['allowed_types'] = "jpg|jpeg|gif|png";
	 		$this->load->library('upload', $config);

			$name_img1 = $this->upload->do_upload('mcimg1').$this->upload->data('file_name');
			$name_img2 = $this->upload->do_upload('mcimg2').$this->upload->data('file_name');	
			$name_img3 = $this->upload->do_upload('mcimg3').$this->upload->data('file_name'); 
			$name_img4 = $this->upload->do_upload('mcimg4').$this->upload->data('file_name');	

			$path_img1 = substr($name_img1,1);
			$path_img2 = substr($name_img2,1);	
			$path_img3 = substr($name_img3,1);
			$path_img4 = substr($name_img4,1);
			
			$data = array('mc_img1'=>$path_img1,
						'mc_img2'=>$path_img2,
						'mc_img3'=>$path_img3,
						'mc_img4'=>$path_img4);
			$update_img = $this->db->where('mc_id',$mcid)->update('memorycard',$data);
			if($update_img)
			{
				return true;
			}
			else
			{
				return false;
			}
	 	}

	 	public function GetMemoryCardImages($mcid)
	 	{
	 		$get_imgs = $this->db->get_where('memorycard',['mc_id'=>$mcid]);
	 		if($get_imgs->num_rows() > 0)
	 		{
	 			return $get_imgs->row();
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function ScreenGuardDetailInsert($data)
	 	{
	 		$result = $this->db->insert('screenguards',$data);
	 		if($result)
	 		{
	 			return $this->db->insert_id();
	 		}
	 		else
	 		{
	 			return false;
	 		}	
	 	}


	 	public function ScreenGuardImgUpload($sgid)
	 	{
	 		$config['upload_path'] = "./MobAccessoryImages/Screen Guard";
	 		$config['allowed_types'] = "jpg|jpeg|gif|png";
	 		$this->load->library('upload', $config);

			$name_img1 = $this->upload->do_upload('sgimg1').$this->upload->data('file_name');
			$name_img2 = $this->upload->do_upload('sgimg2').$this->upload->data('file_name');	
			$name_img3 = $this->upload->do_upload('sgimg3').$this->upload->data('file_name'); 
			$name_img4 = $this->upload->do_upload('sgimg4').$this->upload->data('file_name');	

			$path_img1 = substr($name_img1,1);
			$path_img2 = substr($name_img2,1);	
			$path_img3 = substr($name_img3,1);
			$path_img4 = substr($name_img4,1);
			
			$data = array('sg_img1'=>$path_img1,
						'sg_img2'=>$path_img2,
						'sg_img3'=>$path_img3,
						'sg_img4'=>$path_img4);
			$update_img = $this->db->where('sg_id',$sgid)->update('screenguards',$data);
			if($update_img)
			{
				return true;
			}
			else
			{
				return false;
			}
	 	}

	 	public function GetScreenGuardImages($sgid)
	 	{
	 		$get_imgs = $this->db->get_where('screenguards',['sg_id'=>$sgid]);
	 		if($get_imgs->num_rows() > 0)
	 		{
	 			return $get_imgs->row();
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function HeadphonesDetailInsert($data)
	 	{
	 		$result = $this->db->insert('headphones',$data);
	 		if($result)
	 		{
	 			return $this->db->insert_id();
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function HeadphonesImgUpload($hpid)
	 	{
	 		$config['upload_path'] = "./MobAccessoryImages/Headphones";
	 		$config['allowed_types'] = "jpg|jpeg|gif|png";
	 		$this->load->library('upload', $config);

			$name_img1 = $this->upload->do_upload('hpimg1').$this->upload->data('file_name');
			$name_img2 = $this->upload->do_upload('hpimg2').$this->upload->data('file_name');	
			$name_img3 = $this->upload->do_upload('hpimg3').$this->upload->data('file_name'); 
			$name_img4 = $this->upload->do_upload('hpimg4').$this->upload->data('file_name');	

			$path_img1 = substr($name_img1,1);
			$path_img2 = substr($name_img2,1);	
			$path_img3 = substr($name_img3,1);
			$path_img4 = substr($name_img4,1);
			
			$data = array('hp_img1'=>$path_img1,
						'hp_img2'=>$path_img2,
						'hp_img3'=>$path_img3,
						'hp_img4'=>$path_img4);
			$update_img = $this->db->where('hp_id',$hpid)->update('headphones',$data);
			if($update_img)
			{
				return true;
			}
			else
			{
				return false;
			}
	 	}

	 	public function GetHeadphonesImages($hpid)
	 	{
	 		$get_imgs = $this->db->get_where('headphones',['hp_id'=>$hpid]);
	 		if($get_imgs->num_rows() > 0)
	 		{
	 			return $get_imgs->row();
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function MobChargerDetailInsert($data)
	 	{
	 		$result = $this->db->insert('mobilecharger',$data);
	 		if($result)
	 		{
	 			return $this->db->insert_id();
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function MobChargerImgUpload($mobchid)
	 	{
	 		$config['upload_path'] = "./MobAccessoryImages/Mob Charger";
	 		$config['allowed_types'] = "jpg|jpeg|gif|png";
	 		$this->load->library('upload', $config);

			$name_img1 = $this->upload->do_upload('mobchimg1').$this->upload->data('file_name');
			$name_img2 = $this->upload->do_upload('mobchimg2').$this->upload->data('file_name');	
			$name_img3 = $this->upload->do_upload('mobchimg3').$this->upload->data('file_name'); 
			$name_img4 = $this->upload->do_upload('mobchimg4').$this->upload->data('file_name');	

			$path_img1 = substr($name_img1,1);
			$path_img2 = substr($name_img2,1);	
			$path_img3 = substr($name_img3,1);
			$path_img4 = substr($name_img4,1);
			
			$data = array('mch_img1'=>$path_img1,
						'mch_img2'=>$path_img2,
						'mch_img3'=>$path_img3,
						'mch_img4'=>$path_img4);
			$update_img = $this->db->where('mch_id',$mobchid)->update('mobilecharger',$data);
			if($update_img)
			{
				return true;
			}
			else
			{
				return false;
			}
	 	}

	 	public function GetMobChargerImages($mobchid)
	 	{
	 		$get_imgs = $this->db->get_where('mobilecharger',['mch_id'=>$mobchid]);
	 		if($get_imgs->num_rows() > 0)
	 		{
	 			return $get_imgs->row();
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}

	 	public function CheckIsVerifiedSeller($sname,$spass)
	 	{
	 		$verified_res = $this->db->get_where('seller',['semail'=>$sname, 'spass'=>$spass, 'verified'=>'yes']);
	 		if($verified_res->num_rows()>0)
	 		{
	 			return true;
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}
	} 
?>