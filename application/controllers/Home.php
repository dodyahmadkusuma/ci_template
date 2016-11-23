<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Blog', 'blog');
        $this->load->model('M_login');

    }

    public function index($halaman="")
    {
         $limit = 4;
        if ($halaman != '') {
        $offset = $halaman;
        }else{
        $offset = 0;
        }
        $data['data_blog'] = $this->blog->getList($limit, $offset);
        $this->load->library('pagination');

        $config['base_url'] = base_url('Home/view/');
        $config['total_rows'] = $this->blog->totalRows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['num_links'] = 3;
       
        $config['first_link'] = 'First';
       
        $config['last_link'] = 'Last';
     

        $this->pagination->initialize($config);

        $data['paging'] = $this->pagination->create_links();

        $this->template->views('home', $data);
        

    }
    public function view($halaman='')
    {
         $limit = 4;
        if ($halaman != '') {
        $offset = $halaman;
        }else{
        $offset = 0;
        }
        $data['data_blog'] = $this->blog->getList($limit, $offset);
        $this->load->library('pagination');

        $config['base_url'] = base_url('Home/view/');
        $config['total_rows'] = $this->blog->totalRows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['num_links'] = 3;
       
        $config['first_link'] = 'First';
       
        $config['last_link'] = 'Last';

        $this->pagination->initialize($config);

        $data['paging'] = $this->pagination->create_links();

        $this->template->views('home', $data);
        
    }
    public function detail( $id = null )
    {
        $data['data_blog'] = $this->blog->get( $id );
        $this->template->views('Artikel', $data);
    }
    // public function auth()
    // {
    //     $user = $_POST['user'];
    //     $pass = $_POST['pass'];

    //     $sql="select login.username,login.password from login where username = '{$user}' and password ='{$pass}'";
    //     $query = $this->db->query($sql);
    //     if ($user=='admin') {
    //     }if ($pass=='admin') {
    //     redirect('admin'); 
    //     }else {
    //     redirect('login');
    //     }
        

    // }

    public function cobaSession()
    {
        $arr = [
            'id' => 1,
            'nama' => 'Thoni',
            'alamat' => 'Jl Suhat',
        ];
        $this->session->set_userdata('userSession', $arr);
        $this->session->set_userdata('nama_session', $arr['nama']);
    }
    public function lihatSession()
    {
        // untuk mengambil semua session
        $sesi = $this->session->all_userdata();
        // untuk mengambil salah satu session yang sudah dibuat
        $nama = $this->session->userdata('nama_session');
        echo "<pre>";
        print_r ($sesi);
        echo "</pre>";
        echo $nama;
    }
    public function hapusSession()
    {
        $this->session->sess_destroy();
    }
    
}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */