<?php 
  $this->load->view('header');
  //error_reporting(0);
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
          <form class="form form-horizontal" action="<?php echo base_url(). 'biodata/tambah_aksi'; ?>" method="post">
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">Nama Siswa</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="nama" ? required="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Tempat, Tanggal Lahir</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="ttl" required="">
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
        <label class="col-md-3 control-label">Sekolah</label>
        <div class="col-md-4">
          <div class="input-group">
            <select class="select2" name="sekolah">
            <?php
              $no = 1;
              foreach ($user as $u) {
            ?>
              <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
            <?php } ?>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Hobi</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="hobi" required="">
        </div>
      </div>
    </div>
  </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo base_url(); ?>biodata/index?mode=biodata" class="btn btn-default">Batal</a>
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