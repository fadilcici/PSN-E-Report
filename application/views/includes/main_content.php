<!-- page content -->
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
    

        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Pemasukan</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Report</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
          
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Pengeluaran</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
           
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Network Activities <small>Graph title sub-title</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div id="chart_plot_01" class="demo-placeholder"></div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Top Campaign Performance</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Facebook Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Twitter Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Conventional Media</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Bill boards</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />



          
        </div>
        <!-- /page content -->
        </body>
