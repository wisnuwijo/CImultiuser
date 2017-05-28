<?php $this->load->view('header'); ?>
<body>
  <div class="app app-default">

<?php $this->load->view('sidebar_m1'); ?>
<?php $this->load->view('navbar_m1'); ?>

<!--    CONTENT   -->
<div class="row">
  <div class="col-xs-12">
    <div class="card card-banner card-chart card-green no-br">
      <div class="card-header">
        <div class="card-title">
          <div class="title">Selamat datang Member</div>
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
          Daftar Siswa
        </div>
          <?php 
            error_reporting(0);
            $event = $_GET['event'];
            $link = base_url('member1/index');
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
            <th>Kepala Sekolah</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Website</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php
          $no = 1;
          foreach($user as $u){ 
        ?>
            <td><pre><?php echo $no++ ?></font></td>
            <td><font size="2pt"><?php echo $u->nama ?></font></td>
            <td><font size="2pt"><?php echo $u->kepsek ?></font></td>
            <td><font size="2pt"><?php echo $u->alamat ?></font></td>
            <td><font size="2pt"><?php echo $u->telepon ?></font></td>
            <td><font size="2pt"><?php echo $u->web ?></font></td>
            <td>
                <a href="<?php echo base_url('member1/edit/'.$u->id.'?mode=biodata'); ?>" class="fa fa-edit" title="Edit" ></a>
                <!--<a href="" class="fa fa-close" title="Hapus">Hapus</a>-->
                <?php 
                	$id = $u->id;
                ?>
                <a href="<?php echo base_url('member1/hapus/'.$id.'?id='.$u->id); ?>" title="Hapus" class="fa fa-close" onclick="javascript: return confirm('Anda yakin hapus ?')"></a>
                <!--<a href="" class="fa fa-close" title="Hapus"></a>-->
                <!--<a href="#" class="fa fa-close" title="Hapus" data-toggle="modal" data-target="#myModal"></a>-->
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
      </div>
      <a href="<?php echo base_url(); ?>member1/tambah" class="btn btn-info pull-right " title="Tambah" >Tambah Data</a>
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
          <p>Anda yakin akan menghapus data ini? <?php echo $u->id; ?></p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <a href="<?php echo base_url('#'); ?>" class="btn btn-default" data-dismiss="modal">Batal</a>
          <?php echo anchor('member/hapus/'.$u->id,'Hapus','class='.'"btn btn-danger btn-md"'); ?>
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