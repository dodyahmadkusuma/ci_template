 <div class="hilang">
    <link rel="stylesheet" href="<?=base_url('dashboard/assets/')?>css/jquery.dataTables.min.css" />
 <h2>Recent Post</h2>
                
              <table id="TableSaya" >
                <thead>
                  <tr>
                    <th>
                      Nama
                    </th>
                    <th>
                      Alamat
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
              <script src="<?=base_url('dashboard/assets/')?>js/jquery-3.1.1.min.js"></script>
              <script src="<?=base_url('dashboard/assets/')?>js/jquery.dataTables.min.js"></script>
              <script type="text/javascript">
                
            $(document).ready(function(){
                  $('#TableSaya').DataTable();
                  });
              </script>
              </div>