<?php $this->load->view('header'); ?>
<body>
  <div class="app app-default">

<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('navbar'); ?>

<!--    CONTENT   -->
<div class="row">
  <div class="col-xs-12">
    <div class="card card-banner card-chart card-green no-br">
      <div class="card-header">
        <div class="card-title">
          <div class="title">Selamat datang di halaman Admin</div>
        </div>
      </div>
      <div class="card-body">
        <div class="ct-chart-sale"></div>
      </div>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-xs-12">
      <div class="card">
        <div class="card-header">
          Data Pengguna 
        </div>
          <?php 
            error_reporting(0);
            $event = $_GET['event'];
            $link = base_url('biodata/index?mode=biodata');
            if ($event == "added") {
              echo "<div class='alert alert-success fade in'>
                    <a href=$link class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    Data Berhasil Ditambahkan
                    </div>";
            } elseif ($event == "edited") {
              echo "<div class='alert alert-success fade in'>
                    <a href=$link class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    Data Berhasil Diubah
                    </div>";
            } elseif ($event == "deleted") {
              echo "<div class='alert alert-success fade in'>
                    <a href=$link class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    Data Dihapus
                    </div>";
            } elseif ($event == null) {

            }
          ?>
        <div class="card-body no-padding">
          <table class="datatable table table-striped primary" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php
          $no = 1;
          foreach($user as $u){ 
        ?>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->username ?></td>
            <td><?php echo $u->level ?></td>
            <td>
                <a href="<?php echo base_url('admin/edit/'.$u->id); ?>" class="fa fa-edit" title="Edit" ></a>
                <a href="<?php echo base_url('admin/hapus/'.$u->id); ?>" class="fa fa-close" onclick="javascript: return confirm('Anda yakin hapus ?')" title="Hapus"></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
      </div>
      <a href="<?php echo base_url(); ?>admin/tambah" class="btn btn-info pull-right " title="Tambah" >Tambah Data</a>
    </div>
    </div>
<!-- MODAL -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Data</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <p>Anda yakin akan menghapus data ini?</p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <a href="<?php echo base_url('#'); ?>" class="btn btn-default" data-dismiss="modal">Batal</a>
          <?php echo anchor('admin/hapus/'.$u->id,'Hapus','class='.'"btn btn-danger btn-md"'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ENDS OF MODAL -->
<!--    ENDS OF CONTENT   -->

<?php $this->load->view('footer'); ?>
</div>

  </div>
  
  <script type="text/javascript" src="./assets/js/vendor.js"></script>
  <script type="text/javascript" src="./assets/js/app.js"></script>

</body>
</html>