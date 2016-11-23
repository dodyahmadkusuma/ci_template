<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Blog extends CI_Model {

     public function get( $id = null)
    {
        $sql = "select * from content";
        if( $id ) {
            $sql .= " where id = '{$id}'";
        }
        
        $query = $this->db->query($sql);

        if( $id ) {
            return $query->row();
        } else {
            return $query->result();
        }

    }
    public function login()
    {
    	$sql="SELECT * FROM login";
        $query = $this->db->query($sql);
        return $query->result();
    }
 
    public function plus()
    {
        $jdl = $_POST['judul_content'];
        $tgl = date('y/m/d');
        $isi = $_POST['isi_content'];

        $id =md5(date('ymdhms').rand());

        $sql="INSERT INTO content(id,judul_content,tgl_content,isi_content) values('$id','$jdl','$tgl','$isi')";
        $query=$this->db->query($sql);
    }
    public function editprofile($param="")
    {
        $object = [
            'name_user'      => $param['name_user'],
            'alamat'  => $param['alamat'],
            'telepon'  => $param['telepon']
        ];
        $this->db->where('id', $param['id']);
        $this->db->update('login', $object);
        return $this->db->affected_rows();
    }
    public function updatecontent($param='')
    {
        
        $object = [
            'id'      => $param['id'],
            'judul_content'      => $param['judul_content'],
            'isi_content'   => $param['isi_content'],
            'tgl_content'   => $param['tgl_content'],
        ];
        $this->db->where('id', $param['id']);
        $this->db->update('content', $object);
        return $this->db->affected_rows();
    }
    public function getList($limit, $offset)
    {
        $data = $this->db->get('content', $limit, $offset ); 
        
        return $data->result();
    }   
    public function totalRows()
    {
        $data = $this->db->get('content'); 
        
        return $data->num_rows();
    }
    public function detailAtl($id)
    {
        $this->db->where('id', $id);
        $data = $this->db->get('content');
        return $data->row();
    }
    public function deletecontent($id=null)
    {
        $sql = "delete from content where id = '{$id}'";
        $query=$this->db->query($sql);
    }
    

}

/* End of file M_content.php */
/* Location: ./application/models/M_content.php */
