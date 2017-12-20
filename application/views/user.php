 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
      
            </div>

            <div class="clearfix"></div>

            <div class="row">  

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manajemen User</h2>
                        <div class="row">
                            <span class="pull-right">
                              <button type="button" id="TambahUser" class="btn btn-primary" data-toggle="modal" data-target="#formTambahUser"> <i class="fa fa-plus"></i>
                              Tambah User
                              </button>
                            </span>
                        </div>
                        <!-- Modal -->
                        <div id="formTambahUser" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">User Baru</h4>
                              </div>
                              <div class="modal-body">
                              <?php echo validation_errors(); ?>

                              <?php echo form_open('user/tambah'); ?>
  
                                <div class="row">
                                <div class="col-md-12">
                                  <form name="simpan_data" action="" method="post">
                                  <div class="row">
                                   
                                    <div class="col-md-4 col-md-offset-1">Login Divisi</div>
                                    <div class="col-md-6"><input id="user_login" type="text" name="user_login" class="input-md  textinput textInput form-control" placeholder="Login Divisi" required="true"></div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Nama Bendahara</div>
                                    <div class="col-md-6"><input id="user_name" type="text" name="user_name" class="form-control" placeholder="Nama Bendahara" required="true">
                                    </div>
                                   
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Email</div>
                                    <div class="col-md-6"><input id="email" type="email" name="user_email" class="input-md  textinput textInput form-control" placeholder="Email" required="true"></div>
                                    
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Password</div>
                                    <div class="col-md-6"><input id="user_pass" type="password" name="user_pass" class="input-md  textinput textInput form-control" placeholder="Password" required="true"></div>

                                  </div>
                                  <br>

                              </div>
                                </div>
                                <div class="modal-footer">
                                  <div class="col-md-12"><span class="pull-right"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary" id="simpan"></span></div>
                                  </div>
                                  <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                                </div>
                                </form>
                                </div>
                          </div>
                        </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
          
                    <div class="table-responsive">
            <table id="data-table" class="table datatable table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>Divisi</th>
                <th>Bendahara</th>
                <th>Email</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $id = $this->session->userdata('user_id');
              $query = $this->db->get('cp_user');
                $pend = $query->result_array();
                 foreach ($pend as $pends): ?>
                <tr>
                  <td align="left" nowrap="nowrap"><?php echo $pends['user_login']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pends['user_name']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pends['user_email']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pends['user_pass']; ?></td>
                </tr>
            <?php endforeach; ?>
                

            </tbody>
          </table>
          </div>
          
          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->