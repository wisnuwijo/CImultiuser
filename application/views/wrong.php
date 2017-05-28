<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Schoolah Web Apps</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/css/bootstrap-responsive.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/matrix-login.css'); ?>" />
        <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />

    </head>
    <body>
        <div id="loginbox"> 
        <div class="alert alert-warning">Username/Password salah</div>           
            <form id="loginform" class="form-vertical" action="<?php echo base_url('login/login_process'); ?>" method="post">
            <?php echo $error; ?>
            <div class="control-group normal_text"> <h3><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Logo" /></h3></div>
            <div class="control-group">
                <div class="main_input_box">
                     <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Username" name="username" required="">
                </div>
            </div>
            <div class="control-group">
                <div class="main_input_box">
                     <span class="add-on bg_ly"><i class="icon-lock"></i></span></span><input type="password" placeholder="Password" name="password" required="">
                </div>
            </div>
            <div class="form-action">
                 <span class="pull-right"><input type="submit" class="btn btn-success" value="Login"></span>
            </div>
            </form>
        </div>
        
        <script src="assets/js/jquery.min.js"></script>  
        <script src="assets/js/matrix.login.js"></script> 
    </body>

</html>