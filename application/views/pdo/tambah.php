  <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data</h4>
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
                  <input class="form-control" type="text" id="judul_content" >
                </td>
              </tr>
              <td>
                Isi Post
              </td>
              <td>
                :
              </td>
              <td>
                <input class="form-control" type="text" id="isi_content" >
              </td>
              
                <input class="form-control" type="hidden" id="tgl_content" value="<?=date('y-m-d') ?>">
            </tbody>
          </table>
<div class="modal-footer">
        </div>
   
          <button id="simpantambah" type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
