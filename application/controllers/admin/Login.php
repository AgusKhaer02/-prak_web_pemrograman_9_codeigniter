<?php


	class Login extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$data['title'] = "Login";
			$this->load->view("admin/login", $data);
		}

		public function auth()
		{
			$postInput = $this->input->post();

			// cek apakah isi inputan username dan pass kosong?
			if ($postInput['ip-username'] == "" && $postInput['ip-pass'] == "") {
				// jika kosong, maka munculkan pesan error inputan tidak boleh kosong
				$this->session->set_flashdata("message", "Inputan tidak boleh kosong");
				// kemudian pindah ke halaman login
				redirect(site_url('admin/login'), "refresh");
			}

			// rules
			$this->form_validation->set_rules('ip-username', 'username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('ip-pass', 'password', 'trim|required|xss_clean');
			// disini terdapat callback : callback_check_database()
			// digunakan untuk memanggil function check_database() di bawah

			// jika validasi gagal maka akan langsung dikembalikan ke login
			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata("message", "username / password anda tidak valid");
				redirect(site_url('admin/login'), "refresh");
			}

			$encrypt_pass = md5($postInput['ip-pass']);

			// mengecek kedua dengan acara mengecek database
			$username = $postInput['ip-username'];
			$password = $encrypt_pass;

			$result = $this->Login_model->login($username, $password);


			// jika hasilnya ada maka masukan ke session field nama dan username dengan nama session login 
			if ($result) {
				foreach ($result as $row) {
					$sess_array = [
						"username" => $row->username
					];

					$userdata = [
						"login" => $sess_array,
						"username" => $row->username
					];

					$this->session->set_userdata($userdata);
				}
				redirect(site_url('admin/dashboard'), 'location');
			}

			// pesan ini akan muncul ketika password dan email salah, tidak sesuai dengan data di database
			$this->session->set_flashdata("message", "username / password anda salah");
			redirect(site_url('admin/dashboard'), 'refresh');
		}

		public function logout()
		{
			// menghapus seluruh nilai pada session userdata
			$this->session->sess_destroy();
			// pindah ke halaman login
			redirect(site_url('admin/login'), 'refresh');
		}
	}
	

?>
