<?php
	
	/**
	 * 
	 */
	class Admin extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Admin/AdminModel', 'am');
		}

		public function index()
		{
			if($this->session->userdata('admin_uname') == '' && $this->session->userdata('admin_pwd') == '')
			{
				$this->load->view('admin/index');	
			}
			else
			{
				return redirect('Admin/dashboard');
			}
		
		}

		public function Login()
		{
			$auname=$this->input->post('username');
	 		$apwd = $this->input->post('password');
	 		$login_res = $this->am->login($auname, $apwd);
	 		if($login_res)
	 		{
	 			$session_data = array('admin_uname' => $auname, 'admin_pwd'=>$apwd);
	 			$this->session->set_userdata($session_data);
	 			return redirect('Admin/dashboard');
	 		}
	 		else
	 		{
	 			$this->session->set_flashdata('errmsg', 'Admin Username and Passwords do not match!');
	 			return redirect('Admin/index');
	 		}
		}

		public function dashboard()
	 	{
	 		if($this->session->userdata('admin_uname') == '' && $this->session->userdata('admin_pwd') == '')
	 		{
	 			return redirect('Admin/index');
	 		}
	 		else
	 		{
	 			$this->load->view('admin/dashboard');
	 		}
	 	}

	 	public function logout()
	 	{
	 		$this->session->unset_userdata('admin_uname');
	 		$this->session->unset_userdata('admin_pwd');

	 		return redirect('Admin/index');
	 	}

	 	public function InsertProductName()
	 	{
	 		if($this->session->userdata('admin_uname') == '' && $this->session->userdata('admin_pwd') == '')
	 		{
	 			return redirect('Admin/index');
	 		}
	 		else
	 		{	
	 			$exists = $this->am->ExistProduct(); 
	 			if(!$exists)
	 			{
	 				$ins_res = $this->am->InsertProductName();
	 				if($ins_res)
	 				{
		 				echo true;
		 			}
	 				else
	 				{
	 					echo false;
	 				}
	 			}
	 			else if($exists)
	 			{
	 				echo "45"; //Code for Product's already existence
	 			}
	 			else
	 			{

	 			}
	 		}
	 	}

	 	public function GetAllItems()
	 	{
	 		if($this->session->userdata('admin_uname') == '' && $this->session->userdata('admin_pwd') == '')
	 		{
	 			return redirect('Admin/index');
	 		}
	 		else
	 		{
	 			$output = '';
	 			$res = $this->am->GetAllItems();
	 			if($res)
	 			{
	 				$output.= '<select name=item_select id=item_select>';
	 				foreach($res as $items)
	 				{
	 					$output .= '<option value='.$items->item_id.'>'.$items->item_name.'</option>';
	 				}
	 				$output.= '</select>';
	 			}
	 			echo $output;
	 		}
	 	}

	 	public function ItemBrandInsert()
	 	{
	 		if($this->session->userdata('admin_uname') == '' && $this->session->userdata('admin_pwd') == '')
	 		{
	 			return redirect('Admin/index');
	 		}
	 		else
	 		{
	 			$exists = $this->am->ItemBrandExist();
	 			if(!$exists)
	 			{
	 				$res = $this->am->ItemBrandInsert();
	 				if($res)
	 				{
	 					echo true;
	 				}
	 				else
	 				{
	 					echo false;
	 				}
	 			}
	 			else if($exists)
	 			{
	 				echo "45";
	 			}
	 			else
	 			{
	 				
	 			}
	 		}
	 	}

	 	public function GetMobileBrand()
	 	{
	 		$output = "<option selected>Select Mobile Brand</option>";
	 		$br_res = $this->am->GetMobileBrand();
	 		if(count($br_res))
	 		{
	 			foreach($br_res as $brand) 
	 			{
	 				$output.= "<option>".$brand->br_name."</option>";
	 			}
	 		}
	 		else
	 		{
	 			echo "Brand not available;";
	 		}
	 		echo $output;
	 	}

	 	public function GetAllSellers()
	 	{
	 		if($this->session->userdata('admin_uname') == '' && $this->session->userdata('admin_pwd') == '')
	 		{
	 			return redirect('Admin/index');
	 		}
	 		else
	 		{
	 			$output = "";
	 			$seller_res = $this->am->GetAllSellers();
	 			$output = count($seller_res);
	 			echo $output;
		 	}
		}

		public function Sellers()
		{
			if($this->session->userdata('admin_uname') == '' && $this->session->userdata('admin_pwd') == '')
	 		{
	 			return redirect('Admin/index');
	 		}
	 		else
	 		{
	 			$seller_data = $this->am->AllSellerData();
	 			$data = array('allseller_data'=>$seller_data);
	 			$this->load->view('admin/sellers',$data);
	 		}
		}

		public function VerifySeller($sid)
		{
			if($this->session->userdata('admin_uname') == '' && $this->session->userdata('admin_pwd') == '')
	 		{
	 			return redirect('Admin/index');
	 		}
	 		else
	 		{

				$verify = $this->am->VerifySeller($sid);
				if($verify)
				{
					$this->session->set_flashdata('msg','Seller Verified Successfully');
					return redirect('Admin/Sellers');
				}
				else
				{
					return redirect('Admin/S ellers');
				}
			}
		}	
	}
?>