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
          Edit Data
        </div>
        <div class="card-body">
        <?php foreach($user as $u){ ?>
          <form class="form form-horizontal" action="<?php echo base_url(). 'member1/update'; ?>" method="post">
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">Nama Sekolah</label>
        <div class="col-md-9">
          <input type="hidden" name="id" value="<?php echo $u->id ?>">
          <input type="text" class="form-control" name="nama" value="<?php echo $u->nama ?>" required="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Kepala Sekolah</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="kepsek" required="" value="<?php echo $u->kepsek ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Alamat</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="alamat" required="" value="<?php echo $u->alamat ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Telepon</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="telepon" required="" value="<?php echo $u->telepon ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Website</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="web" required="" value="<?php echo $u->web ?>">
        </div>
      </div>
    </div>
  </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo base_url(); ?>member1/index" class="btn btn-default">Batal</a>
      </div>
    </div>
  </div>
</form>
<?php } ?>
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