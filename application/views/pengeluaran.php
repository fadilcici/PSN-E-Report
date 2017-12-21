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
                    <h2>Laporan Pengeluaran</h2>
                        <div class="row">
                            <span class="pull-right">
                              <button type="button" id="TambahPengeluaran" class="btn btn-primary" data-toggle="modal" data-target="#formTambahPengeluaran"> <i class="fa fa-plus"></i>
                              Tambah Pengeluaran
                              </button>
                            </span>
                        </div>
                            
                          <!-- Modal -->
                          <div id="TombolEdit" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Detail</h4>
                              </div>
                              <div class="modal-body">
                              <?php echo validation_errors(); ?>

                              <?php echo form_open_multipart('pengeluaran/tambah'); ?>
  
                                <div class="row">
                                <div class="col-md-12">
                                  <form name="simpan_data" action="" method="post">
                                  <div class="row">
                                   
                                    <div class="col-md-4 col-md-offset-1">Nama Pengeluaran</div>
                                    <div class="col-md-6"><input id="nama_barang2" type="text" name="nama_peng" class="input-md  textinput textInput form-control" placeholder="Nama Pemasukan" required="true"></div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Tanggal Pengeluaran </div>
                                    <div class="col-md-6"><input id="datepicker2" type="date" name="tgl_peng" class="form-control" placeholder="MM/DD/YYYY" required="true">
                                    </div>
                                   
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Jumlah Pengeluaran</div>
                                    <div class="col-md-6"><input id="harga2" type="text" name="jml_peng" onkeyup="" class="input-md  textinput textInput form-control" placeholder="Jumlah Pemasukan" required="true"></div>
                                    
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Keterangan</div>
                                    <div class="col-md-6"><input id="masa_manfaat2" type="text" name="ket_peng" class="input-md  textinput textInput form-control" placeholder="Keterangan" required="true"></div>

                                  </div>
                                  <br>
                                  <!-- <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Bukti</div>
                                    <div class="col-md-6"><input id="bukti_pend2" type="file" name="bukti_pend" class="" placeholder="Browse" required="true"></div>

                                  </div> -->
                                  <br>
                                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                                   </form>
                              </div>
                                </div>
                                <div class="modal-footer">
                                  <div class="col-md-12"><span class="pull-right"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary" id="simpan"></span></div>
                                  </div>
                                  <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                                </div>
                               
                                </div>
                          </div>
                        </div>
                               <!-- Modal -->
                              <div class="modal fade" id="tombol_hapus" role="dialog">
                              <div class="modal-dialog modal-sm">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Hapus Data</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Apakah anda yakin?</p>
                                </div>
                                <div class="modal-footer">
                                  <a href="<?php echo base_url('Pengeluaran/hapus');?>">
                                  <button type="button" class="btn btn-primary">Ya</button></a>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                </div>
                              </div>
                              
                            </div>
                          </div>

                        <!-- Modal -->
                        <div id="formTambahPengeluaran" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Pengeluaran Baru</h4>
                              </div>
                              <div class="modal-body">
                              <?php echo validation_errors(); ?>

                              <?php echo form_open('pengeluaran/tambah'); ?>
  
                                <div class="row">
                                <div class="col-md-12">
                                  <form name="simpan_data" action="" method="post">
                                  <div class="row">
                                   
                                    <div class="col-md-4 col-md-offset-1">Nama Pengeluaran</div>
                                    <div class="col-md-6"><input id="nama_barang" type="text" name="nama_peng" class="input-md  textinput textInput form-control" placeholder="Nama Pengeluaran" required="true"></div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Tanggal Pengeluaran</div>
                                    <div class="col-md-6"><input id="datepicker" type="date" name="tgl_peng" class="form-control" placeholder="MM/DD/YYYY" required="true">
                                    </div>
                                   
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Jumlah Pengeluaran</div>
                                    <div class="col-md-6"><input id="harga" type="number" min="0" name="jml_peng" onkeyup="" class="input-md  textinput textInput form-control" placeholder="Jumlah Pengeluaran" required="true"></div>
                                    
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Keterangan</div>
                                    <div class="col-md-6"><input id="masa_manfaat" type="text" name="ket_peng" class="input-md  textinput textInput form-control" placeholder="Keterangan" required="true"></div>

                                  </div>
                                  <br>

                              </div>
                                </div>
                                <div class="modal-footer">
                                  <div class="col-md-12"><span class="pull-right"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary" id="simpan"></span></div>
                                  </div>
                                  <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                                </div>
                                  <br>

                              </div>
                                </div>
                                </div>
                                </form>
                                </div>
                          </div>
                        </div>

                    <div class="clearfix"></div>

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
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $id = $this->session->userdata('user_id');
              $query = $this->db->get_where('pengeluaran', array('id_bend' =>  $id));
                $peng = $query->result_array();
                 foreach ($peng as $pengs): ?>
                <tr>
                  <td align="left" nowrap="nowrap"><?php echo $pengs['id_peng']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pengs['nama_peng']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pengs['tgl_peng']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pengs['jml_peng']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pengs['ket_peng']; ?></td>
                  <td ><button id="tomboleditan" class="btn btn-primary" data-toggle="modal" data-target="#TombolEdit" data-id_peng="<?php echo $pengs['id_peng']; ?>"
                  data-nama_peng="<?php echo $pengs['nama_peng']; ?>"
                  data-jml_peng="<?php echo $pengs['jml_peng']; ?>"
                  data-ket_peng="<?php echo $pengs['ket_peng']; ?>"
                  data-tgl_peng="<?php echo $pengs['tgl_peng']; ?>"><i class="fa fa-search"></i></button>
                  <button type="button" class="btn btn-primary" id="tombolhapus" data-toggle="modal" data-target="#tombol_hapus">hapus</button>
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

<script type="text/javascript">
$(document).on( "click", '#tomboleditan',function(e) {
        var id_peng = $(this).data('id_peng');
        var nama_peng = $(this).data('nama_peng');
        var jml_peng = $(this).data('jml_peng');
        var ket_peng = $(this).data('ket_peng');
        var tgl_peng = $(this).data('tgl_peng');
        // var bukti_peng = $(this).data('bukti_pend');
        $("#id_hidden2").val(id_peng);
        $("#nama_barang2").val(nama_peng);
        $("#harga2").val(jml_peng);
        $("#masa_manfaat2").val(ket_peng);
        $("#datepicker2").val(tgl_peng);
        // $("#bukti_pend2").val(bukti_pend);
    });

</script>