<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="#"><span class="highlight">Schoolah</span> Admin</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>  
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li class="active">
        <a href="<?php echo base_url('admin/index?mode=data_user'); ?>">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Data User</div>
        </a>
      </li>
      <li class="dropdown ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-cube" aria-hidden="true"></i>
          </div>
          <div class="title">Biodata</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Biodata</li>
            <li><a href="<?php echo base_url('biodata/index?mode=biodata'); ?>">Daftar Siswa</a></li>
            <li><a href="<?php echo base_url('biodata/tambah?mode=biodata'); ?>">Input Data</a></li>
          </ul>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-file-o" aria-hidden="true"></i>
          </div>
          <div class="title">Sekolah</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Sekolah</li>
            <li><a href="<?php echo base_url('sekolah/index?mode=sekolah'); ?>">Daftar Sekolah</a></li>
            <li><a href="<?php echo base_url('sekolah/tambah?mode=sekolah'); ?>">Input Sekolah</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
  <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
    </ul>
  </div>
</aside>