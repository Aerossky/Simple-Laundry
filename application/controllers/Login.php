    <?php

    class Login extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model("Login_model");
        }
        function login()
        {
            $username = $this->input->post('username');
            $password = MD5($this->input->post('password'));

            $cekuserdaftar = $this->Login_model->cekuserdaftar($username);

            if ($cekuserdaftar) {

                $ceklogin = $this->Login_model->ceklogin($username, $password);

                if ($ceklogin) {
                    foreach ($ceklogin as $row)
                        if ($row->status == "Aktif") {
                            $this->session->set_userdata('id', $row->id);
                            $this->session->set_userdata('id_o', $row->id_o);
                            $this->session->set_userdata('username', $row->username);
                            $this->session->set_userdata('nama', $row->nama_user);
                            $this->session->set_userdata('role', $row->role);
                            if (($this->session->userdata("role") == "admin") || ($this->session->userdata("role") == "kasir") || ($this->session->userdata("role") == "pemilik")) {
                                redirect('hadmin/utama', 'refresh');
                            } else {
                                echo "<script>alert('Maaf akun anda belum memiliki hak akses')</script>";
                                redirect('', 'refresh');
                            }
                        } else {
                            echo "<script>alert('Maaf akun anda belum tidak aktif mohon hubungi admin!')</script>";
                            redirect('', 'refresh');
                        }
                } else {
                    echo "<script>alert('Maaf username atau password anda salah')</script>";
                    redirect('', 'refresh');
                }
            } else {
                echo "<script>alert('Maaf akun anda tidak terdaftar')</script>";
                redirect('', 'refresh');
            }
        }

        function logout()
        {
            $this->session->sess_destroy();
            redirect('welcome', 'refresh');
        }
    }
