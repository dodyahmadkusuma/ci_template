<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Auth_Controller {

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Blog', 'blog');
        $this->load->model('M_login');
        $this->load->helper(array('form', 'url'));
       
    }
    public function index()
    {
         
        $data['user']       = $this->M_login->get();
        $data['data_atl']   = $this->blog->get();
        $content                = $this->blog->get();
        $data['content']        = $content;
        $this->template->dashboard('dashboard' ,$data);
        $this->load->view('dataTable',$data);
    }
    public function Profile()
    {
        $data['user']       = $this->M_login->get();
        $this->template->dashboard('profile' ,$data);
    }
    public function EditProfile()
    {
        $data['user']       = $this->M_login->get();
        $this->template->dashboard('editprofile', $data);
    }
    public function UploadProfile()
    {
                $param = $this->input->post();
                $proses_simpan = $this->blog->editprofile($param);
            
                $config['upload_path']          =   FCPATH . './dashboard/assets/images/avatars/';
                $config['allowed_types']        =   'jpeg|jpg|png';
                $config['overwrite']            =   TRUE;
                $config['file_name']            =   'user.jpg';
                $config['max_size']             =   1000;
                // $config['max_width']            = 215;
                // $config['max_height']           = 215;
                 // $destination =  FCPATH .'./dashboard/dist/img/';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('avatar'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       redirect('admin/editprofile',$error);
                     
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                    
                        redirect('admin/profile',$data);
                }
          
                $this->upload->initialize($config);

    }
    
    public function Post($halaman="")
    {
        $data['user']       = $this->user;
         $limit = 4;
        if ($halaman != '') {
        $offset = $halaman;
        }else{
        $offset = 0;
        }
        $data['data_atl'] = $this->blog->getList($limit, $offset);
        $this->load->library('pagination');

        $config['base_url'] = base_url('admin/viewpost/');
        $config['total_rows'] = $this->blog->totalRows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['num_links'] = 3;
       
        $config['first_link'] = 'First';
       
        $config['last_link'] = 'Last';


        $this->pagination->initialize($config);

        $data['paging'] = $this->pagination->create_links();

        $this->template->dashboard('admin2', $data);
       
    }
    public function viewpost($halaman='')
    {
         $data['user']       = $this->user;
         $limit = 4;
        if ($halaman != '') {
        $offset = $halaman;
        }else{
        $offset = 0;
        }
        $data['data_atl'] = $this->blog->getList($limit, $offset);
        $this->load->library('pagination');

        $config['base_url'] = base_url('admin/viewpost/');
        $config['total_rows'] = $this->blog->totalRows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['num_links'] = 3;
       
        $config['first_link'] = 'First';
       
        $config['last_link'] = 'Last';


        $this->pagination->initialize($config);

        $data['paging'] = $this->pagination->create_links();

        $this->template->dashboard('admin2', $data);
    }
    
     public function editcontent($id)
    {
        $data['user']       = $this->user;
        $content                = $this->blog->detailAtl($id);
        $data['content']        = $content;
        $this->template->dashboard('edit_post', $data);
    }
    public function simpancontent($param)
    {
          
        $param = $this->input->get();
        $proses_simpan = $this->blog->updatecontent($param);
        if ($proses_simpan >= 0) {
            redirect('/admin/post/');
        } else {
            redirect('/admin/editcontent/');
        }
       
    }
    public function detailcontent($id)
    {
        $data['user']       = $this->user;
        $data['data_atl']   = $this->blog->get($id);
        $this->template->dashboard('detail_content', $data);
    }
    public function Tambah()
    {
        $data['user'] = $this->user;
        $this->template->dashboard('form_tambah',$data);
    }
    public function act_tambah()
    {
        $data= $this->blog->plus();
        redirect($_SERVER[HTTP_REFERER]);
    }
    public function delete($id='')
    {
        $data=$this->blog->deletecontent($id);
        redirect('/admin/post/');
    }
}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */