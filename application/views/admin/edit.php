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
          <form class="form form-horizontal" action="<?php echo base_url(). 'admin/update'; ?>" method="post">
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">Nama</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="nama" value="<?php echo $u->nama ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Username</label>
        <div class="col-md-9">
          <input type="hidden" name="id" value="<?php echo $u->id ?>">
          <input type="text" class="form-control" name="username" value="<?php echo $u->username ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Level</label>
        <div class="col-md-4">
          <div class="input-group">
            <select class="select2" name="level">
              <?php
                if ($u->level == "admin"){
                  echo "<option value='admin'>Admin</option>";
                  echo "<option value='member'>Member</option>";
                  echo "<option value='member1'>Member1</option>";
                } elseif($u->level == "member") {
                  echo "<option value='member'>Member</option>";
                  echo "<option value='admin'>Admin</option>";
                  echo "<option value='member1'>Member1</option>";                  
                } else{
                  echo "<option value='member1'>Member1</option>";
                  echo "<option value='admin'>Admin</option>";
                  echo "<option value='member'>Member</option>";                  
                }
              ?>              
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo base_url(); ?>admin/index?mode=data_user" class="btn btn-default">Batal</a>
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
</body>
</html>