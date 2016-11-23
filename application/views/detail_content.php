<div class="content-wrapper">
<style type="text/css">
th
{
  text-align:center;
}
p{
  text-align: justify;
  font-size: larger;
  padding-right: 100px;
}
.btn-default{
  font-size: larger;

}
  </style>
    <table class="table table-primary"  >
<tr> 
      

        <th>
          Judul Post
        </th>
        <th>
          Tanggal Post
        </th>
        <th>
          Isi Post
        </th>
        <th colspan="2">
          Aksi
        </th>
        <tr>
          <td>
            <?= $data_atl->judul_content ?>
          </td>
          <td>
            <?= $data_atl->tgl_content ?>
          </td>
          <td ">
            <?= $data_atl->isi_content ?>
          </td>
          <td>
           <a type="submit" class="btn btn-warning" href="<?=base_url('admin/editcontent/').$data_atl->id ?>" > Edit </a>
          </td>
          <td>
            <a type="submit" class="btn btn-danger" href="<?= base_url('/admin/delete/').$data_atl->id ?>">Hapus</a>
          </td>
        </tr>
        </tr>
    </table>
    <a class="btn btn-default" href="<?= base_url('admin/post/') ?>">Kembali</a>

  </div>