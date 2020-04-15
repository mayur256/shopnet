<?php
	/**
	 * 
	 */
	class Seller extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Seller/SellerModel', 'sm');
		}
		public function index()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				$this->load->view('seller/index');
			}
			else
			{
				return redirect('Seller/dashboard');
			}
		}
		public function CreateAccount()
		{

			$cname = $this->input->post('comp_name');
			$email = $this->input->post('email');
			$paswd = $this->input->post('password');
			$mob = $this->input->post('mob_no');
			$pin = $this->input->post('pincode');
			$pan = $this->input->post('panno');
			$gst = $this->input->post('gstno');
			$result = $this->sm->createAccount($cname, $email, $paswd, $mob, $pin, $pan, $gst);
			if(!$result)
			{
				return redirect('Seller/index');
			}
			else
			{
				$session_data = [
					'seller_username' => $email,
					'seller_password' => $paswd];
				$this->session->set_userdata($session_data);
				$this->load->view('Seller/dashboard');
				
			}
		}

		public function CheckIsVerifiedSeller()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$sname = $this->session->userdata('seller_username');
				$spass = $this->session->userdata('seller_password');
				$res = $this->sm->CheckIsVerifiedSeller($sname,$spass);
				if($res)
				{
					echo "true";	
				}
				else
				{
					echo "false";
				}
			}

		}

		public function Dashboard()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$seller_data = $this->sm->GetSellerInfo();
				$auction_data = $this->sm->Get_Auction_Data();
				$fixlst_data = $this->sm->Get_Fixed_Data();
				$used_auclist = $this->sm->GetUsedAucList();
				$used_fixlist = $this->sm->GetUsedFixList();
				$data['auc_data'] = $auction_data;
				$data['fixlst_data'] = $fixlst_data;
				$data['used_auclst'] = $used_auclist;
				$data['used_fixlist'] = $used_fixlist;
				$data['seller_info'] = $seller_data;
				$this->load->view('Seller/dashboard',$data);
			}
		}

		public function Login()
		{
			$uname = $this->input->post('seller_username');
			$pwd = $this->input->post('seller_password');
			$result = $this->sm->login($uname, $pwd);
			if($result)
			{
				$session_data = array('seller_username'=>$uname, 'seller_password'=>$pwd);
				$this->session->set_userdata($session_data);
				return redirect('Seller/dashboard');

			}
			else
			{
				return redirect('Seller/index');
			}
		}
		public function CreateListing()
		{
			if($this->session->userdata('seller_username')=='' && $this->session->userdata('seller_password')=='')
			{
				return redirect('Seller/index');
			}
			else
			{
				$result = $this->sm->CheckContact();
				if($result)
				{
					$this->load->view('Seller/contactinfo');
				}
				else
				{
					$this->load->view('Seller/createlisting');
				}
			}	
		}

		public function Logout()
		{
			$this->session->unset_userdata('seller_username');
			$this->session->unset_userdata('seller_password');

			return redirect('Seller/index');
		}

		public function InsertSellerContact()
		{
			if($this->session->userdata('seller_username') == '' && $this->session->userdata('seller_password') == '')
			{
				return redirect('Seller/index');
			}
			else
			{
				$sfname = $this->input->post('s_fname');
				$slname = $this->input->post('s_lname');
				$saddr = $this->input->post('s_addr');
				$scity = $this->input->post('city');
				$result = $this->sm->InsertSellerContact($sfname, $slname, $saddr, $scity);
				if($result)
				{
					return redirect('Seller/dashboard');
				}
				else
				{
					$this->load->view('Seller/contactinfo');
				}
			}
		}

		public function MobileUpload()
		{
			if($this->session->userdata('seller_username') == '' && $this->session->userdata('seller_password') == '')
			{
				return redirect('Seller/index');
			}
			else
			{
				$data['seller_id'] = $this->sm->getSellerId($this->session->userdata('seller_username'), $this->session->userdata('seller_password'));
				$auction_data = $this->sm->Get_Auction_Data();
				$fixedlist_data = $this->sm->Get_Fixed_Data();
				$used_auclist = $this->sm->GetUsedAucList();	
				$data['auc_data'] = $auction_data;
				$data['fixlst_data'] = $fixedlist_data;
				$data['used_auclst'] = $used_auclist;
				if($auction_data->sl_ldate >= date('Y-m-d'))
				{
					$this->load->view('seller/listing/mobile',$data);
				}
				elseif($fixedlist_data->sl_ldate >= date('Y-m-d')) 
				{
					$this->load->view('seller/listing/mobile',$data);
				}
				else
				{
					$this->session->set_flashdata('msg','Your Auction and Fixed listing has expired!');
					return redirect('Seller/Dashboard');
				}
			}
		}

		public function InsertMobGenInfo()
		{
			if($this->session->userdata('seller_username') == '' && $this->session->userdata('seller_password') == '')
			{
				return redirect('Seller/index');
			}
			else
			{
				$output = "";
				$mobile_title = $this->input->post('mobile_title');
				$mob_brand = $this->input->post('mob_brand');
				$model_no = $this->input->post('model_no');
				$mob_name = $this->input->post('mob_name');
				$color = $this->input->post('color');
				$simno = $this->input->post('simno');
				$sim_config = $this->input->post('sim_config');
				$otg = $this->input->post('otg');
				$sellid = $this->input->post('sellerid');


				$res = $this->sm->InsertMobGenInfo($mobile_title, $mob_brand, $model_no, $mob_name, $color, $simno, $sim_config, $otg, $sellid);
				if($res)
				{
					$output.=$res;
				}
				else
				{
					echo false;
				}
				echo $output;
			}
		}

		public function InsertMobDispInfo()
		{
			if($this->session->userdata('seller_username') == '' && $this->session->userdata('seller_password') == '')
			{
				return redirect('Seller/index');
			}
			else
			{
				$m_id = $this->input->post('insertid');
				$data = array('disp_size'=>$this->input->post('disp_size'),
								'disp_reso'=>$this->input->post('disp_resolution'),
								'reso_type'=>$this->input->post('reso_type'),
								'disp_type'=>$this->input->post('disp_type'));

				$res = $this->sm->InsertMobDispInfo($data,$m_id);
				if($res)
				{
					echo true;
				}
				else
				{
					echo false;
				}
			}
		}

		public function InsertMobProcessorInfo()
		{
			if($this->session->userdata('seller_username') == '' && $this->session->userdata('seller_password') == '')
			{
				return redirect('Seller/index');
			}
			else
			{
				$m_id = $this->input->post('insertid');
				$data = array('mob_os'=>$this->input->post('os'),
								'os_ver'=>$this->input->post('os_ver'),
								'processor_type'=>$this->input->post('processor_type')
							);

				$res = $this->sm->InsertMobProcessorInfo($data,$m_id);
				if($res)
				{
					echo true;
				}
				else
				{
					echo false;
				}
			}
		}

		public function InsertMobStorageInfo()
		{
			if($this->session->userdata('seller_username') == '' && $this->session->userdata('seller_password') == '')
			{
				return redirect('Seller/index');
			}
			else
			{
				$m_id = $this->input->post('insertid');
				$data = array('mob_romsize'=>$this->input->post('rom_size'),
								'mob_ramsize'=>$this->input->post('ram_size'),
								'mob_isexpandable'=>$this->input->post('expandable'),
								'mob_memoryslot'=>$this->input->post('memory_card'),
								'mob_memorytype'=>$this->input->post('card_type'));

				$res = $this->sm->InsertMobStorageInfo($data,$m_id);
				if($res)
				{
					echo true;
				}
				else
				{
					echo false;
				}
			}
		}

		public function InsertMobCameraInfo()
		{
			if($this->session->userdata('seller_username') == '' && $this->session->userdata('seller_password') == '')
			{
				return redirect('Seller/index');
			}
			else
			{
				$m_id = $this->input->post('insertid');
				$data = array('primary_cam'=>$this->input->post('primary_cam'),
							'secondary_cam'=>$this->input->post('secondary_cam'),
							'primary_camsize'=>$this->input->post('prim_size'),
							'secondary_camsize'=>$this->input->post('sec_size'),
							'flash'=>$this->input->post('flash'));

				$res = $this->sm->InsertMobCameraInfo($data,$m_id);
				if($res)
				{
					echo true;
				}
				else
				{
					echo false;
				}
			}
		}

		public function InsertMobConnectivityInfo()
		{
			if($this->session->userdata('seller_username') == '' && $this->session->userdata('seller_password') == '')
			{
				return redirect('Seller/index');
			}
			else
			{
				$m_id = $this->input->post('insertid');
				$data = array('network_type'=>$this->input->post('net_type'),
								'mob_usbslot'=>$this->input->post('usbslot'),
								'mob_bluetooth'=>$this->input->post('bluetooth'),
								'mob_wifi'=>$this->input->post('wifi'),
								'battery_capacity'=>$this->input->post('battery'));

				$res = $this->sm->InsertMobCameraInfo($data,$m_id);
				if($res)
				{
					echo true;
				}
				else
				{
					echo false;
				}
			}
		}

		public function InsertMobListingInfo()
		{
			if($this->session->userdata('seller_username') == '' && $this->session->userdata('seller_password') == '')
			{
				return redirect('Seller/index');
			}
			else
			{
				$m_id = $this->input->post('insertid');
				$data = array('duration_format'=>$this->input->post('duration'),
								'discount_offer'=>$this->input->post('offers'),
								'return_policy'=>$this->input->post('ret_policy'),
								'upload_date'=>date('Y-m-d'),
								'upload_month'=>date('m'),
								'upload_year'=>date('Y'),
								'mob_status'=>'Active',
								'ship_charge'=>$this->input->post('ship_charge'),
								'mob_price'=>$this->input->post('price'));

				$res = $this->sm->InsertMobListingInfo($data,$m_id);
				if($res)
				{
					echo true;
				}
				else
				{
					echo false;
				}
			}
		}

		public function MobileImgUpload()
		{
			if($this->session->userdata('seller_username') == '' && $this->session->userdata('seller_password') == '')
			{
				return redirect('Seller/index');
			}
			else
			{
				$mid = $this->input->post('mob_id');

				$res = $this->sm->MobileImgUpload($mid);
				if($res)
				{
					$imgs = $this->sm->GetMobImages($mid);
					$output = "<div class=\"col l3 m3 s12\">
									<div id=\"show-img\">
										<img src=\"".base_url()."MobileImages/".$imgs->mob_img1."\" class=\"responsive-img\" style=\"object-fit:contain;max-width:100%;height:100%;margin:auto;display:block;\"/>
									</div>
								</div>
								<div class=\"col l3 m3 s12\">
									<div id=\"show-img\">
										<img src=\"".base_url()."MobileImages/".$imgs->mob_img2."\" class=\"responsive-img\" style=\"object-fit:contain;max-width:100%;height:100%;margin:auto;display:block;\"/>
									</div>
								</div>
								<div class=\"col l3 m3 s12\">
									<div id=\"show-img\">
										<img src=\"".base_url()."MobileImages/".$imgs->mob_img3."\" class=\"responsive-img\" style=\"object-fit:contain;max-width:100%;height:100%;margin:auto;display:block;\"/>
									</div>
								</div>
								<div class=\"col l3 m3 s12\">
									<div id=\"show-img\">
										<img src=\"".base_url()."MobileImages/".$imgs->mob_img4."\" class=\"responsive-img\" style=\"object-fit:contain;max-width:100%;height:100%;margin:auto;display:block;\"/>
									</div>
								</div>";
					echo $output;
				}
				else
				{
					echo false;
				}
				
			}
		}


		public function CheckAucFixListFee() //for checking whether to load auction or fixed price listing fee
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$result = $this->sm->CheckAucFixListFee();				
				echo $result;
			}	
		}

		public function MobilePreview($mid)
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$preview_res = $this->sm->MobilePreview($mid);
				$sellerinfo = $this->sm->GetSellerInfo();
				if($preview_res && $sellerinfo)
				{
					$this->load->view('seller/listing/mobile_preview',['mob_preview_data'=>$preview_res,'sellerinfo'=>$sellerinfo]);
				}
				else
				{
					return redirect('Seller/Dashboard');
				}
			}
		}


		public function InsertMobListFee()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$result = $this->sm->InsertMobListFee();
				if($result)
				{
					echo "true";
				}
				else
				{
					echo "false";
				}
			}
		}


		public function MobAccessoriesUpload()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$this->load->view('seller/listing/mobaccessories');
			}
		}

		public function PowerBankDetailInsert()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				//get seller id
				$sid = $this->sm->GetSellerInfo();
				$input_brand_name = $this->input->post('brand_nm');
				$pb_brand_name = '';
				if($input_brand_name == '1')
				{
					$pb_brand_name = 'MI';
				}
				else if($input_brand_name == '2')
				{
					$pb_brand_name = 'Philips';
				}
				else if($input_brand_name == '3')
				{
					$pb_brand_name = 'Syska';
				}
				else if($input_brand_name == '4')
				{
					$pb_brand_name = 'Sony';
				}
				else
				{
					$pb_brand_name = null;
				}

				$input_prod_color = $this->input->post('prod_color');
				$prod_color = '';
				if($input_prod_color == '1')
				{
					$prod_color = 'White';
				}
				else if($input_prod_color == '2' )
				{
					$prod_color = 'Black';
				}
				else if($input_prod_color == '3' )
				{
					$prod_color = 'Blue';
				}
				else
				{
					$prod_color = null;
				}

				$input_battcap = $this->input->post('battery_capacity');
				$pb_battcap = '';
				if($input_battcap == '1')
				{
					$pb_battcap = '0 - 4999 mAh';
				}
				else if($input_battcap == '2')
				{
					$pb_battcap = '5000 - 9999 mAh';
				}
				else if($input_battcap == '3')
				{
					$pb_battcap = '10000 - 12999 mAh';
				}
				else
				{
					$pb_battcap = null;
				}

				$input_battery_type = $this->input->post('battery_type');
				$pb_battype = '';
				if($input_battery_type == '1')
				{
					$pb_battype = 'Lithium Polymer';
				}
				else if($input_battery_type == '2')
				{
					$pb_battype = 'Alkaline';
				}
				else if($input_battery_type == '3')
				{
					$pb_battype = 'Lithium-ion';
				}
				else
				{
					$pb_battype = null;
				}

				$input_pb_warranty = $this->input->post('pb_warnty');
				$pb_warranty = '';
				if($input_pb_warranty == '1')
				{
					$pb_warranty = '6 Months';
				}
				else if($input_pb_warranty == '2')
				{
					$pb_warranty = '1 Year';
				}
				else
				{
					$pb_warranty = null;
				}

				$input_cable = $this->input->post('cable');
				$pb_cable = '';
				if($input_cable == '1')
				{
					$pb_cable = 'Yes';
				}
				else if($input_cable == '2')
				{
					$pb_cable = 'No';
				}
				else
				{
					$pb_cable = null;
				}

				//listing options
				$input_dur_format = $this->input->post('listing_dur');
				$pb_dur_format = '';
				if($input_dur_format == '1')
				{
					$pb_dur_format = '7 Days';
				}
				else if($input_dur_format == '2')
				{
					$pb_dur_format = '10 Days';
				} 
				else if($input_dur_format == '3')
				{
					$pb_dur_format = '30 Days';
				}
				else
				{
					$pb_dur_format = null;
				}

				$input_ret_policy = $this->input->post('ret_policy');
				$pb_ret_policy = '';
				if($input_ret_policy == '1')
				{
					$pb_ret_policy = '10 Days';
				}
				else if($input_ret_policy == '2')
				{
					$pb_ret_policy = '15 Days';
				}
				else if($input_ret_policy == '1')
				{
					$pb_ret_policy = '30 Days';
				}
				else
				{
					$pb_ret_policy = null;
				}
				$data = array('pb_title'=>$this->input->post('prod_title'),
								'pb_modelname'=>$this->input->post('model_name'),
								'pb_color'=>$prod_color,
								'pb_brname'=>$pb_brand_name,
								'pb_battcap'=>$pb_battcap,
								'pb_battype'=>$pb_battype,
								'pb_warranty'=>$pb_warranty,
								'pb_output_port'=>$this->input->post('output_port'),
								'pb_cable'=>$pb_cable,
								'pb_duration_format'=>$pb_dur_format,
								'pb_discount_offer'=>$this->input->post('discount'),
								'pb_ret_policy'=>$pb_ret_policy,
								'pb_ship_charge'=>$this->input->post('ship_charge'),
								'pb_price'=>$this->input->post('prod_price'),
								'seller_id'=>$sid->sid,
								'prod_status'=>'active',
								'upload_date'=>date('Y-m-d'),
								'upload_month'=>date('m'),
								'upload_year'=>date('Y'),
								'listing_fee'=>$this->input->post('listingfee'));
				$ins_res = $this->sm->PowerBankDetailInsert($data);
				if($ins_res)
				{
					echo $ins_res;
				}
				else
				{
					echo "false";
				}
			}	
		}


		public function PowerBankImgUpload()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$pbid = $this->input->post('pb_id');
				$res = $this->sm->PowerBankImgUpload($pbid);
				if($res)
				{ 
					$imgs = $this->sm->GetPowerBankImages($pbid);
					$output = "
								<div id=\"divimg1\">
								<img src=\"".base_url()."MobAccessoryImages/Power Bank/".$imgs->pb_img1." \"/>
								</div>
								<div id=\"divimg2\">
								<img src=\"".base_url()."MobAccessoryImages/Power Bank/".$imgs->pb_img2." \"/>
								</div>
								<div id=\"divimg3\">
								<img src=\"".base_url()."MobAccessoryImages/Power Bank/".$imgs->pb_img3."\"/>
								</div>
								<div id=\"divimg4\">
								<img src=\"".base_url()."MobAccessoryImages/Power Bank/".$imgs->pb_img4."\"/>
								</div>
								";
					echo $output;
				}
				else
				{
					echo "false";
				}
			}
		}

		public function MemoryCardDetailInsert()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				//get seller id
				$sid = $this->sm->GetSellerInfo();
				$input_prod_color = $this->input->post('prod_color');
				$prod_color = '';
				if($input_prod_color == '1')
				{
					$prod_color = 'White';
				}
				else if($input_prod_color == '2' )
				{
					$prod_color = 'Black';
				}
				else if($input_prod_color == '3' )
				{
					$prod_color = 'Blue';
				}
				else
				{
					$prod_color = null;
				}

				$input_mc_brand = $this->input->post('mc_brand');
				$mc_brand = "";
				if($input_mc_brand == '1')
				{
					$mc_brand = "SanDisk";
				}
				else if($input_mc_brand == '2')
				{
					$mc_brand = "Samsung";
				}
				else if($input_mc_brand == '3')
				{
					$mc_brand = "Sony";
				}
				else if($input_mc_brand == '4')
				{
					$mc_brand = "HP";
				}
				else 
				{
					$mc_brand = null;
				}
				$input_mc_type = $this->input->post('mc_type');
				$mc_type = "";
				if($input_mc_type == '1')
				{
					$mc_type = "Micro SD";
				}
				else if($input_mc_type == '2')
				{
					$mc_type = "SDHC";
				}
				else if($input_mc_type == '3')
				{
					$mc_type = "SDXC";
				}
				else if($input_mc_type == '4')
				{
					$mc_type = "Compact Flash";
				}
				else
				{
					$mc_type = null;
				}

				$input_mc_capacity = $this->input->post('mc_capacity');
				$mc_capacity = "";
				if($input_mc_capacity == '1')
				{
					$mc_capacity = "8 GB";
				}
				else if($input_mc_capacity == '2')
				{
					$mc_capacity = "16 GB";
				}
				else if($input_mc_capacity == '3')
				{
					$mc_capacity = "32 GB";
				}
				else if($input_mc_capacity == '4')
				{
					$mc_capacity = "64 GB";
				}
				else
				{
					$mc_capacity = null;
				}

				$input_mc_warranty = $this->input->post('mc_warranty');
				$mc_warranty = "";
				if($input_mc_warranty == '1')
				{
					$mc_warranty = "6 Months";
				}
				else if($input_mc_warranty == '2')
				{
					$mc_warranty = "1 Year";
				}
				else
				{
					$mc_warranty = null;
				}

				$input_mc_duration_format = $this->input->post('listing_dur');
				$mc_duration_format = "";
				if($input_mc_duration_format == "1")
				{
					$mc_duration_format = "7 Days";
				}
				else if($input_mc_duration_format == "2")
				{
					$mc_duration_format = "10 Days";
				}
				else if($input_mc_duration_format == "3")
				{
					$mc_duration_format = "30 Days";
				}
				else
				{
					$mc_duration_format = null;
				}


				$input_ret_policy = $this->input->post('ret_policy');
				$mc_ret_policy = '';
				if($input_ret_policy == '1')
				{
					$mc_ret_policy = '10 Days';
				}
				else if($input_ret_policy == '2')
				{
					$mc_ret_policy = '15 Days';
				}
				else if($input_ret_policy == '1')
				{
					$mc_ret_policy = '30 Days';
				}
				else
				{
					$mc_ret_policy = null;
				}
				$data = array('mc_title'=>$this->input->post('prod_title'),
								'mc_modelname'=>$this->input->post('model_name'),
								'mc_color'=>$prod_color,
								'mc_brname'=>$mc_brand,
								'mc_type'=>$mc_type,
								'mc_capacity'=>$mc_capacity,
								'mc_warranty'=>$mc_warranty,
								'mc_duration_format'=>$mc_duration_format,
								'mc_discount_offer'=>$this->input->post('discount'),
								'mc_ret_policy'=>$mc_ret_policy,
								'mc_ship_charge'=>$this->input->post('ship_charge'),
								'mc_price'=>$this->input->post('prod_price'),
								'mc_status'=>'active',
								'upload_date'=>date('Y-m-d'),
								'upload_month'=>date('m'),
								'upload_year'=>date('Y'),
								'listing_fee'=>$this->input->post('listingfee'),
								'seller_id'=>$sid->sid);
				$res = $this->sm->MemoryCardDetailInsert($data);
				echo $res;				
			}
		}

		public function MemoryCardImgUpload()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$mcid = $this->input->post('mc_id');
				$res = $this->sm->MemoryCardImgUpload($mcid);
				if($res)
				{ 
					$imgs = $this->sm->GetMemoryCardImages($mcid);
					$output = "
								<div id=\"mcdivimg1\">
								<img src=\"".base_url()."MobAccessoryImages/Memory Card/".$imgs->mc_img1." \"/>
								</div>
								<div id=\"mcdivimg2\">
								<img src=\"".base_url()."MobAccessoryImages/Memory Card/".$imgs->mc_img2." \"/>
								</div>
								<div id=\"mcdivimg3\">
								<img src=\"".base_url()."MobAccessoryImages/Memory Card/".$imgs->mc_img3."\"/>
								</div>
								<div id=\"mcdivimg4\">
								<img src=\"".base_url()."MobAccessoryImages/Memory Card/".$imgs->mc_img4."\"/>
								</div>
								";
					echo $output;
				}
				else
				{
					echo "false";
				}
			}
		}

		public function ScreenGuardDetailInsert()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				//get seller id
				$sid = $this->sm->GetSellerInfo();

				$input_prod_color = $this->input->post('prod_color');
				$prod_color = "";
				if($input_prod_color == '1')
				{
					$prod_color = "White";
				}
				else if($input_prod_color == '2')
				{
					$prod_color = "Black";
				}
				else if($input_prod_color == '3')
				{
					$prod_color = "Blue";
				}
				else
				{
					$prod_color = null;
				}

				$input_sg_feature = $this->input->post('sg_feature');
				$sg_feature = "";
				if($input_sg_feature == '1')
				{
					$sg_feature = "Scratch Resistant";
				}
				else if($input_sg_feature == '2')
				{
					$sg_feature = "Anti Glare";
				}
				else if($input_sg_feature == '3')
				{
					$sg_feature = "Anti Fingerprint";
				}
				else
				{
					$sg_feature = null;
				}

				$input_sg_duration_format = $this->input->post('listing_dur');
				$sg_duration_format = "";
				if($input_sg_duration_format == '1')
				{
					$sg_duration_format = "7 Days";
				}
				else if($input_sg_duration_format == '2')
				{
					$sg_duration_format = "10 Days";
				}
				else if($input_sg_duration_format == '3')
				{
					$sg_duration_format = "30 Days";
				}
				else
				{
					$sg_duration_format = null;
				}

				$input_sg_ret_policy = $this->input->post('ret_policy');
				$sg_ret_policy = "";
				if($input_sg_ret_policy == '1')
				{
					$sg_ret_policy = "10 Days";
				}
				else if($input_sg_ret_policy == '2')
				{
					$sg_ret_policy = "15 Days";
				}
				else if($input_sg_ret_policy == '1')
				{
					$sg_ret_policy = "30 Days";
				}
				else
				{
					$sg_ret_policy = null;
				}
				$data = array('sg_title'=>$this->input->post('prod_title'),
							'sg_modelname'=>$this->input->post('model_name'),
							'sg_color'=>$prod_color,
							'sg_compatible_mob'=>$this->input->post('compatible_mob'),
							'sg_feature'=>$sg_feature,
							'sg_duration_format'=>$sg_duration_format,
							'sg_discount_offer'=>$this->input->post('discount'),
							'sg_ret_policy'=>$sg_ret_policy,
							'sg_ship_charge'=>$this->input->post('ship_charge'),
							'sg_price'=>$this->input->post('prod_price'),
							'sg_status'=>'active',
							'upload_date'=>date('Y-m-d'),
							'upload_month'=>date('m'),
							'upload_year'=>date('Y'),
							'listing_fee'=>$this->input->post('listingfee'),
							'seller_id'=>$sid->sid);

				$res = $this->sm->ScreenGuardDetailInsert($data);
				echo $res;
			}						
		}


		public function ScreenGuardImgUpload()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$sgid = $this->input->post('sg_id');
				$res = $this->sm->ScreenGuardImgUpload($sgid);
				if($res)
				{ 
					$imgs = $this->sm->GetScreenGuardImages($sgid);
					$output = "
								<div id=\"sgdivimg1\">
								<img src=\"".base_url()."MobAccessoryImages/Screen Guard/".$imgs->sg_img1." \"/>
								</div>
								<div id=\"sgdivimg2\">
								<img src=\"".base_url()."MobAccessoryImages/Screen Guard/".$imgs->sg_img2." \"/>
								</div>
								<div id=\"sgdivimg3\">
								<img src=\"".base_url()."MobAccessoryImages/Screen Guard/".$imgs->sg_img3."\"/>
								</div>
								<div id=\"sgdivimg4\">
								<img src=\"".base_url()."MobAccessoryImages/Screen Guard/".$imgs->sg_img4."\"/>
								</div>
								";
					echo $output;
				}
				else
				{
					echo "false";
				}
			}
		}


		public function HeadphonesDetailInsert()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				//get seller id
				$sid = $this->sm->GetSellerInfo();

				$input_prod_color = $this->input->post('prod_color');
				$prod_color = "";
				if($input_prod_color == '1')
				{
					$prod_color = "White";
				}
				else if($input_prod_color == '2')
				{
					$prod_color = "Black";
				}
				else if($input_prod_color == '3')
				{
					$prod_color = "Blue";
				}
				else
				{
					$prod_color = null;
				}

				$input_headphone_type = $this->input->post('headphone_type');
				$hp_type = "";
				if($input_headphone_type == '1')
				{
					$hp_type = "Over-the-Ear";
				}
				else if($input_headphone_type == '2')
				{
					$hp_type = "In-the-Ear";
				}
				else
				{
					$hp_type = null;
				}

				$input_hp_connection_type = $this->input->post('connection_type');
				$hp_connection_type = "";
				if($input_hp_connection_type == "1")
				{
					$hp_connection_type = "Wired";
				}
				else if($input_hp_connection_type == "2")
				{
					$hp_connection_type = "Wireless";
				}
				else
				{
					$hp_connection_type = null;
				}

				$input_hp_microphone = $this->input->post('microphone');
				$hp_microphone = "";
				if($input_hp_microphone == '1')
				{
					$hp_microphone = "Yes";
				}
				else if($input_hp_microphone == '2')
				{
					$hp_microphone = "No";
				}
				else
				{
					$hp_microphone = null;
				}

				$input_hp_warranty = $this->input->post('hp_warranty');
				$hp_warranty = "";
				if($input_hp_warranty == "1")
				{
					$hp_warranty = "6 Months";
				}
				else if($input_hp_warranty == "2")
				{
					$hp_warranty = "1 Year";
				}
				else
				{
					$hp_warranty = null;
				}

				$input_hp_duration_format = $this->input->post('listing_dur');
				$hp_duration_format = "";
				if($input_hp_duration_format == '1')
				{
					$hp_duration_format = "7 Days";
				}
				else if($input_hp_duration_format == '2')
				{
					$hp_duration_format = "10 Days";
				}
				else if($input_hp_duration_format == '3')
				{
					$hp_duration_format = "30 Days";
				}
				else
				{
					$hp_duration_format = null;
				}

				$input_hp_ret_policy = $this->input->post('ret_policy');
				$hp_ret_policy = "";
				if($input_hp_ret_policy == '1')
				{
					$hp_ret_policy = "10 Days";
				}
				else if($input_hp_ret_policy == '2')
				{
					$hp_ret_policy = "15 Days";
				}
				else if($input_hp_ret_policy == '1')
				{
					$hp_ret_policy = "30 Days";
				}
				else
				{
					$hp_ret_policy = null;
				}

				$data = array('hp_title'=>$this->input->post('prod_title'),
								'hp_modelname'=>$this->input->post('model_name'),
								'hp_color'=>$prod_color,
								'hp_type'=>$hp_type,
								'hp_connection_type'=>$hp_connection_type,
								'hp_microphone'=>$hp_microphone,
								'hp_warranty'=>$hp_warranty,
								'hp_duration_format'=>$hp_duration_format,
								'hp_discount_offer'=>$this->input->post('discount'),
								'hp_ret_policy'=>$hp_ret_policy,
								'hp_ship_charge'=>$this->input->post('ship_charge'),
								'hp_price'=>$this->input->post('prod_price'),
								'hp_status'=>'active',
								'upload_date'=>date('Y-m-d'),
								'upload_month'=>date('m'),
								'upload_year'=>date('Y'),
								'listing_fee'=>$this->input->post('listingfee'),
								'seller_id'=>$sid->sid);

				$res = $this->sm->HeadphonesDetailInsert($data);
				echo $res;
			}
		}

		public function HeadphonesImgUpload()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$hpid = $this->input->post('hp_id');
				$res = $this->sm->HeadphonesImgUpload($hpid);
				if($res)
				{ 
					$imgs = $this->sm->GetHeadphonesImages($hpid);
					$output = "
								<div id=\"hpdivimg1\">
								<img src=\"".base_url()."MobAccessoryImages/Headphones/".$imgs->hp_img1." \"/>
								</div>
								<div id=\"hpdivimg2\">
								<img src=\"".base_url()."MobAccessoryImages/Headphones/".$imgs->hp_img2." \"/>
								</div>
								<div id=\"hpdivimg3\">
								<img src=\"".base_url()."MobAccessoryImages/Headphones/".$imgs->hp_img3."\"/>
								</div>
								<div id=\"hpdivimg4\">
								<img src=\"".base_url()."MobAccessoryImages/Headphones/".$imgs->hp_img4."\"/>
								</div>
								";
					echo $output;
				}
				else
				{
					echo "false";
				}
			}
		}

		public function MobChargerDetailInsert()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				//get seller id
				$sid = $this->sm->GetSellerInfo();

				$input_prod_color = $this->input->post('prod_color');
				$prod_color = "";
				if($input_prod_color == '1')
				{
					$prod_color = "White";
				}
				else if($input_prod_color == '2')
				{
					$prod_color = "Black";
				}
				else if($input_prod_color == '3')
				{
					$prod_color = "Blue";
				}
				else
				{
					$prod_color = null;
				}
				$input_mch_brand_name = $this->input->post('ch_brand');
				$mch_brand = "";
				if($input_mch_brand_name == '1')
				{
					$mch_brand = "Apple";
				}
				else if($input_mch_brand_name == '2')
				{
					$mch_brand = "Asus";
				}
				else if($input_mch_brand_name == '3')
				{
					$mch_brand = "MI";
				}
				else if($input_mch_brand_name == '4')
				{
					$mch_brand = "Sony";
				}
				else if($input_mch_brand_name == '5')
				{
					$mch_brand = "Samsung";
				}
				else if($input_mch_brand_name == '6')
				{
					$mch_brand = "Oppo";
				}
				else if($input_mch_brand_name == '7')
				{
					$mch_brand = "Vivo";
				}
				else
				{
					$mch_brand = null;
				}

				$input_mch_warranty = $this->input->post('mobch_warranty');
				$mch_warranty = "";
				if($input_mch_warranty == '1')
				{
					$mch_warranty = "6 Months";
				}
				else if($input_mch_warranty == '2')
				{
					$mch_warranty = "1 Year";
				}
				else
				{
					$mch_warranty = null;
				}

				$input_mch_duration_format = $this->input->post('listing_dur');
				$mch_duration_format = "";
				if($input_mch_duration_format == '1')
				{
					$mch_duration_format = "7 Days";
				}
				else if($input_mch_duration_format == '2')
				{
					$mch_duration_format = "10 Days";
				}
				else if($input_mch_duration_format == '3')
				{
					$mch_duration_format = "30 Days";
				}
				else
				{
					$mch_duration_format = null;
				}

				$input_mch_ret_policy = $this->input->post('ret_policy');
				$mch_ret_policy = "";
				if($input_mch_ret_policy == '1')
				{
					$mch_ret_policy = "10 Days";
				}
				else if($input_mch_ret_policy == '2')
				{
					$mch_ret_policy = "15 Days";
				}
				else if($input_mch_ret_policy == '1')
				{
					$mch_ret_policy = "30 Days";
				}
				else
				{
					$mch_ret_policy = null;
				}

				$data = array('mch_title'=>$this->input->post('prod_title'),
							'mch_modelname'=>$this->input->post('model_name'),
							'mch_color'=>$prod_color,
							'mch_brname'=>$mch_brand,
							'mch_usb_num'=>$this->input->post('usb_port'),
							'mch_compt_mob'=>$this->input->post('mch_comptmob'),
							'mch_warranty'=>$mch_warranty,
							'mch_duration_format'=>$mch_duration_format,
							'mch_discount'=>$this->input->post('discount'),
							'mch_ret_policy'=>$mch_ret_policy,
							'mch_ship_charge'=>$this->input->post('ship_charge'),
							'mch_price'=>$this->input->post('prod_price'),
							'mch_status'=>'active',
							'upload_date'=>date('Y-m-d'),
							'upload_month'=>date('m'),
							'upload_year'=>date('Y'),
							'listing_fee'=>$this->input->post('listingfee'),
							'seller_id'=>$sid->sid);
				$res = $this->sm->MobChargerDetailInsert($data);
				echo $res;
			}
		}


		public function MobChargerImgUpload()
		{
			if($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$mobchid = $this->input->post('mobch_id');
				$res = $this->sm->MobChargerImgUpload($mobchid);
				if($res)
				{ 
					$imgs = $this->sm->GetMobChargerImages($mobchid);
					$output = "
								<div id=\"mobchdivimg1\">
								<img src=\"".base_url()."MobAccessoryImages/Mob Charger/".$imgs->mch_img1." \"/>
								</div>
								<div id=\"mobchdivimg2\">
								<img src=\"".base_url()."MobAccessoryImages/Mob Charger/".$imgs->mch_img2." \"/>
								</div>
								<div id=\"mobchdivimg3\">
								<img src=\"".base_url()."MobAccessoryImages/Mob Charger/".$imgs->mch_img3."\"/>
								</div>
								<div id=\"mobchdivimg4\">
								<img src=\"".base_url()."MobAccessoryImages/Mob Charger/".$imgs->mch_img4."\"/>
								</div>
								";
					echo $output;
				}
				else
				{
					echo "false";
				}
			}
		}
	}
?>