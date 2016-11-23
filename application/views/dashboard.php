      <div class="main-content">
        <div class="main-content-inner">
          <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
              <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
              </li>
              <li class="active">Dashboard</li>
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

              <div class="col-md-5">
                <canvas id="myChart" width="400" height="400"></canvas>
              </div>
              <div class="col-md-7">
                             <h2>Data Post</h2>
                
              <table id="TableSaya" >
                <thead>
                  <tr>
                    <th>
                      Judul Artikel
                    </th>
                    <th>
                      Tanggal Post
                    </th>
                  </tr>
                  </thead>

              <?php foreach ($data_atl as $key => $value) { ?>
                  <tr>
                    <td>
                      <?= $value->judul_content ?>
                    </td>
                    <td>
                      <?= $value->tgl_content ?>
                    </td>
                  </tr>
              <?php } ?>
              </table>
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
              <script src="<?=base_url('dashboard/assets/')?>js/jquery-3.1.1.min.js"></script>
              <script src="<?=base_url('dashboard/assets/')?>js/jquery.dataTables.min.js"></script>
              <script type="text/javascript">
                
            $(document).ready(function(){
                  $('#TableSaya').DataTable();
                  });
              </script>
                  </div>
                <script>
                

                  var ctx = document.getElementById("myChart");

                  var myChart = new Chart(ctx, {
                      type: 'pie',
                      data: {
                      labels: ["Artikel", "Views"],
                      datasets: [{
                      label: '# of Votes',
                      data: [<?= count($content)?>,<?=date('s') ?>],
                      backgroundColor: [
                      'rgba(255, 99, 132, 0.5)',
                      'rgba(54, 162, 235, 0.5)',
                      'rgba(255, 206, 86, 0.5)',
                      'rgba(75, 192, 192, 0.5)',
                      'rgba(153, 102, 255, 0.5)',
                      'rgba(255, 159, 64, 0.5)'
                      ],
                      
                      borderWidth: 1
                      }]
                      },
                     
                    
                  });



                </script>
                <!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->