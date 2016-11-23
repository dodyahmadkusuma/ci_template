<div class="main-content">
        <div class="main-content-inner">
          <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
              <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="<?=base_url('admin') ?>">Home</a>
              </li>
              <li class="active">Artikel</li>
            </ul><!-- /.breadcrumb -->

            

          <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
              <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="ace-icon fa fa-cog bigger-130"></i>
              </div>

              <div class="ace-settings-box clearfix" id="ace-settings-box">
                <div class="pull-left width-50">
                  <div class="ace-settings-item">
                    <div class="pull-left">

                      <select id="skin-colorpicker" class="hide">
                        <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                        <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                        <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                        <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                      </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                    <label class="lbl" for="ace-settings-add-container">
                      Inside
                      <b>.container</b>
                    </label>
                  </div>
                </div><!-- /.pull-left -->

                <div class="pull-left width-50">
                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                    <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                    <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                    <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                  </div>
                </div><!-- /.pull-left -->
              </div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->
        


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

    <table class="table"  >
<tr> 
      

        <th>
          Judul Post
        </th>
        <th>
          Tanggal Post
        </th>
        
       
      <?php foreach ($data_atl as $atl) { ?>
        <tr>
          <td>
            <?= $atl->judul_content ?>
          </td>
          <td>
            <?= $atl->tgl_content ?>
          </td>
          
          <td>
           <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?=$atl->id ?>" > Edit </button>
          </td>
          <td>
            <a type="submit" class="btn btn-danger" href="<?= base_url('/admin/delete/').$atl->id ?>">Hapus</a>
          </td>
          <td>
  <!-- Tombol untuk menampilkan modal-->
  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?=$atl->id ?>">View </button>

<!-- Modal Edit -->
  <div id="editModal<?=$atl->id ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <form action="<?=base_url('admin/simpancontent/')?>" method="GET" class="form-group">
          <h4 class="modal-title"> <input class="form-group form-control" type="text" name="judul_content" value="<?= $atl->judul_content ?>"></h4>
        </div>
        <!-- body modal -->
        <i></i><input type="hidden" name="tgl_content" value="<?= date('y/m/d') ?>">
        <div class="modal-body">
          <p><textarea type="text" name="isi_content" class="form-group form-control" ><?= $atl->isi_content ?></textarea></p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <input type="hidden" name="id" value="<?=$atl->id ?>">
          <button type="submit" class="btn btn-info"  id="editcontent">Edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal View -->
  <div id="myModal<?=$atl->id ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?= $atl->judul_content ?></h4>
        </div>
        <!-- body modal -->
        <i>Tangggal Posting : <?= $atl->tgl_content ?></i>
        <div class="modal-body">
          <p><?= $atl->isi_content ?></p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
        </div>
      </div>
    </div>
  </div>
  </td>
        </tr>
        </tr>
    <?php } ?>
    </table>
    <?php echo $paging ?>


      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#TambahModal" > Tambah Artikel </button>

  <!-- Modal Tambah -->
  <div id="TambahModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <form method="POST" action="<?= base_url('admin/act_tambah/')?>">
          <h4 class="modal-title"><input type="text" name="judul_content" placeholder="JUDUL" class="form-group form-control"></h4>
        </div>
        <!-- body modal -->
        <i><input type="hidden" name="tgl_content"></i>
        <div class="modal-body">
          <p><textarea type="text" name="isi_content" placeholder="ISI ARTIKEL" class="form-group form-control"></textarea></p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" id="tambahconten">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
       
             
                <!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->





