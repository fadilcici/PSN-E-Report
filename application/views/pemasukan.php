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
                    <h2>Laporan Pemasukan</h2>
                        <div class="row">
                            <span class="pull-right">
                              <button type="button" id="TambahPemasukan" class="btn btn-primary" data-toggle="modal" data-target="#formTambahPemasukan"> <i class="fa fa-plus"></i>
                              Tambah Pemasukan
                              </button>
                            </span>
                        </div>
                        <!-- Modal -->
                        <div id="formTambahPemasukan" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Pemasukan Baru</h4>
                              </div>
                              <div class="modal-body">
                              <?php echo validation_errors(); ?>

                              <?php echo form_open('pemasukan/tambah'); ?>
  
                                <div class="row">
                                <div class="col-md-12">
                                  <form name="simpan_data" action="" method="post">
                                  <div class="row">
                                   
                                    <div class="col-md-4 col-md-offset-1">Nama Pemasukan</div>
                                    <div class="col-md-6"><input id="nama_barang" type="text" name="nama_pend" class="input-md  textinput textInput form-control" placeholder="Nama Pemasukan" required="true"></div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Tanggal Pemasukan </div>
                                    <div class="col-md-6"><input id="datepicker" type="date" name="tgl_pend" class="form-control" placeholder="MM/DD/YYYY" required="true">
                                    </div>
                                   
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Jumlah Pemasukan</div>
                                    <div class="col-md-6"><input id="harga" type="text" name="jml_pend" onkeyup="" class="input-md  textinput textInput form-control" placeholder="Jumlah Pemasukan" required="true"></div>
                                    
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Keterangan</div>
                                    <div class="col-md-6"><input id="masa_manfaat" type="text" name="ket_pend" class="input-md  textinput textInput form-control" placeholder="Keterangan" required="true"></div>

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
                <th>Id</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $id = $this->session->userdata('user_id');
              $query = $this->db->get_where('pendapatan', array('id_bend' =>  $id));
                $pend = $query->result_array();
                 foreach ($pend as $pends): ?>
                <tr>
                  <td align="left" nowrap="nowrap"><?php echo $pends['id_pend']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pends['nama_pend']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pends['tgl_pend']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pends['jml_pend']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pends['ket_pend']; ?></td>
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