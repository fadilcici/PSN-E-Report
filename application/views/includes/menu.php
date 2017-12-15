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

    <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>e-Report PSN</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata("group_name"); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Dashboard <span class=""></span></a>
                   
                  </li>
                  <li><a><i class="fa fa-edit"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('pemasukan');?>">Laporan Pemasukan</a></li>
                      <li><a href="<?php echo base_url('pengeluaran');?>">Laporan Pengeluaran</a></li>
                    </ul>
                  </li>
                 
                  <li><a href="<?php echo base_url('user');?>"><i class="fa fa-clone"></i>User <span class=""></span></a>
                   
                  </li>
                </ul>
              </div>
             

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('Welcome/login');?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <body>
          <!-- jQuery -->
    <script src="<?php echo base_url(). 'assets/vendors/jquery/dist/jquery.min.js';?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(). 'assets/vendors/bootstrap/dist/js/bootstrap.min.js';?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(). 'assets/vendors/fastclick/lib/fastclick.js';?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(). 'assets/vendors/nprogress/nprogress.js';?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(). 'assets/vendors/iCheck/icheck.min.js';?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url(). 'assets/vendors/datatables.net/js/jquery.dataTables.min.js';?>"></script>
    <script src="<?php echo base_url(). 'assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js';?>"></script>
    <script src="<?php echo base_url(). 'assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js';?>"></script>
    <script src="<?php echo base_url(). 'assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js';?>"></script>
    <script src="<?php echo base_url(). 'assets/vendors/datatables.net-buttons/js/buttons.flash.min.js';?>"></script>
    <script src="<?php echo base_url(). 'assets/vendors/datatables.net-buttons/js/buttons.html5.min.js';?>"></script>
    <script src="<?php echo base_url(). 'assets/vendors/datatables.net-buttons/js/buttons.print.min.js';?>"></script>
    <script src="<?php echo base_url(). 'assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js';?>"></script>
    <script src="<?php echo base_url(). 'assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js';?>"></script>
    <script src="<?php echo base_url(). 'assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js';?>"></script>
    <script src="<?php echo base_url(). 'assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js';?>"></script>
    <script src="<?php echo base_url(). 'assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js';?>"></script>
    <script src="<?php echo base_url(). 'assets/vendors/jszip/dist/jszip.min.js';?>"></script>
    <script src="<?php echo base_url(). 'assets/vendors/pdfmake/build/pdfmake.min.js';?>"></script>
    <script src="<?php echo base_url(). 'assets/vendors/pdfmake/build/vfs_fonts.js';?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(). 'assets/build/js/custom.min.js';?>"></script>
    
        </body>
