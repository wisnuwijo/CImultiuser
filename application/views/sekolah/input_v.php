<?php 
  $this->load->view('header');
  error_reporting(0);
?>
<body>
  <div class="app app-default">

<?php 
  $this->load->view('sidebar'); 
  $this->load->view('navbar'); 
?>

<!--    CONTENT   -->
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Tambah Data
        </div>
        <div class="card-body">
          <form class="form form-horizontal" action="<?php echo base_url(). 'sekolah/tambah_aksi'; ?>" method="post">
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">Nama Sekolah</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="nama" ? required="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Kepala Sekolah</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="kepsek" required="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Alamat</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="alamat" required="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Telepon</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="telepon" required="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Website</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="web" required="">
        </div>
      </div>
    </div>
  </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo base_url(); ?>sekolah/index?mode=sekolah" class="btn btn-default">Batal</a>
      </div>
    </div>
  </div>
</form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ENDS OF MODAL -->
<!--    ENDS OF CONTENT   -->

<script type="text/javascript">
  $("#password").password('toggle');
</script>

</body>
</html>