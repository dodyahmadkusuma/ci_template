  <?php 
  $id = @$_POST['id'];
  $tampilPerID = mysql_query("SELECT * FROM content WHERE id = '$id'");
  $data = mysql_fetch_array($tampilPerID);

   ?>
  <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data</h4>
        </div>
        <!-- body modal -->
   <div class="modal-body">
 <table class="table">
            <thead>
            </thead>
            <tbody>
              <tr>
                <td>
                  Judul
                </td>
                <td>
                  :
                </td>
                <td>
                  <input class="form-control" type="text" id="judul_content" value="<?=$data['judul_content']?>">
                </td>
              </tr>
              <td>
                Isi Post
              </td>
              <td>
                :
              </td>
              <td>
                <textarea class="form-control" type="text" id="isi_content" cols="10" rows="10"><?=$data['isi_content']?></textarea>
              </td>
              
                <input class="form-control" type="hidden" id="tgl_content" value="<?=date('y-m-d') ?>">
             
            </tbody>
          </table>
<div class="modal-footer">
        </div>
        <input type="hidden" id="id" value="<?=$data['id'] ?>">
          <button id="simpanedit" type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
