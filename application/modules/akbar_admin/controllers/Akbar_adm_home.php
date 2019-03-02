<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class akbar_adm_home extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
		$this->load->database('default', TRUE);
	}


	public function index()
	{
		//error_reporting(0);


		$username = $this->session->userdata('username');
		$nama = $this->session->userdata('nama');
		$email = $this->session->userdata('email');

		if(!empty($username)&&!empty($nama)&&!empty($email)){
			$this->load->view('akbar_adm_home');
		}else{			
			$this->load->view('akbar_login');
		}
	}
	public function register()
	{
		//error_reporting(0);

			$this->load->view('akbar_register');
		
	}
	public function do_login()
	{
		//error_reporting(0);

		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$u = addslashes($username);
		$p = md5(addslashes($password));
		$q_cek_login = $this->db_akbar->get_where('user', array('username' => $u, 'password' => $p));
		if(count($q_cek_login->result())>0)
		{
				foreach($q_cek_login->result() as $qck)
				{
					$sess_data['username'] 		= $qck->username;
					$sess_data['nama'] 		= $qck->nama;
					$sess_data['email'] 		= $qck->email;
					$this->session->set_userdata($sess_data);
				}
				header('location:'.base_url().'akbar_adm_home');

		}else{
					$this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah, Silahkan Hubungi Administrator.');
					header('location:'.base_url().'akbar_adm_home');
		}
		
	}

	public function do_register()
	{
		//error_reporting(0);

		$username=$this->input->post('username');
		$email=$this->input->post('email');
		$nama=$this->input->post('nama');
		$password=$this->input->post('password');
		$confirm=$this->input->post('confirm');
		if(strlen($username)>0)
		{
			if(strlen($email)>0)
				{
					if(strlen($nama)>0)
					{
						if(strlen($password)>0)
						{
							if(strlen($confirm)>0)
							{

								if($confirm==$password)
								{
									$dt['username'] = $username;
									$dt['email'] = $email;
									$dt['nama'] = $nama;
									$dt['password'] = md5($password);
									$q= $this->db_akbar->insert("user",$dt);
									if ($q) {
										# code...

										$this->session->set_flashdata('result_register', '<br>Sukses Mendaftar.');
										header('location:'.base_url().'akbar_adm_home/register');
									}else{
										$this->session->set_flashdata('result_register', '<br>Gagal Mendaftar.');
										header('location:'.base_url().'akbar_adm_home/register');

									}
								}else{
									$this->session->set_flashdata('result_register', '<br>Password harus sama dengan Confirm Password.');
									header('location:'.base_url().'akbar_adm_home/register');
								}
				

							}else{
								$this->session->set_flashdata('result_register', '<br>Confirm Password tidak boleh kosong.');
								header('location:'.base_url().'akbar_adm_home/register');
							}
				

						}else{
							$this->session->set_flashdata('result_register', '<br>Password tidak boleh kosong.');
							header('location:'.base_url().'akbar_adm_home/register');
						}
				

					}else{
						$this->session->set_flashdata('result_register', '<br>Nama tidak boleh kosong.');
						header('location:'.base_url().'akbar_adm_home/register');
					}
				

				}else{
					$this->session->set_flashdata('result_register', '<br>Email tidak boleh kosong.');
					header('location:'.base_url().'akbar_adm_home/register');
				}

		}else{
			$this->session->set_flashdata('result_register', '<br>Username tidak boleh kosong.');
			header('location:'.base_url().'akbar_adm_home/register');
		}
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('akbar_adm_home','refresh');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
