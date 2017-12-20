<?php
$csspath = base_url() . $this->config->item('css');
$jspath = base_url() . $this->config->item('js');
$plugpath = base_url() . $this->config->item('plug');
$libspath = base_url() . $this->config->item('libs');
$distpath = base_url() . $this->config->item('dist');
$bootpath = base_url() . $this->config->item('boot');

$this->db->select('*');
$this->db->from('cp_user');
$this->db->where('user_id',$this->session->userdata('user_id'));

$query = $this->db->get();
$row    = $query->row();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eReport-PSN | MpplProject</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(). 'assets/vendors/bootstrap/dist/css/bootstrap.min.css';?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(). 'assets/vendors/font-awesome/css/font-awesome.min.css';?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(). 'assets/vendors/nprogress/nprogress.css';?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(). 'assets/vendors/iCheck/skins/flat/green.css';?>" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(). 'assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css';?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(). 'assets/vendors/jqvmap/dist/jqvmap.min.css';?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(). 'assets/vendors/bootstrap-daterangepicker/daterangepicker.css';?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(). 'assets/build/css/custom.min.css';?>" rel="stylesheet">
  </head>
        <!-- top navigation -->
        <nav class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="" alt=""><?php echo $this->session->userdata("user_name"); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo site_url('Login/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </nav>
        <!-- /top navigation -->
</html>