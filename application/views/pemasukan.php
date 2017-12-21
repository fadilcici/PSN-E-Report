 <!-- page content -->
        <div class="right_col" role="main">
            <div class="page-title">

            </div>

            <div class="clearfix"></div>

            <div class="row">
  

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Laporan Pemasukan</h2>
                        <div <?php if ($this->session->userdata('group_name') === 'Bendahara Umum' ) {
                          echo "hidden";
                        };?> class="row">
                            <span class="pull-right">
                              <button type="button" id="TambahPemasukan" class="btn btn-primary" data-toggle="modal" data-target="#formTambahPemasukan"> <i class="fa fa-plus"></i>
                              Tambah Pemasukan
                              </button>
                            </span>
                        </div>

                        <!-- Modal -->
                        <div id="detailpend" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                             <?php
                                ;
                                $id2 = $this->input->post('id_pend');;
                                $query2 = $this->db->get_where('pendapatan', array('id_pend' =>  $id2));
                                $pend2 = $query2->result_array();
                                 foreach ($pend2 as $pends2): ?>
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Detail Pemasukan</h4>
                              </div>
                              <div class="modal-body">>
  
                                <div class="row">
                                <div class="col-md-12">
                                  <form name="simpan_data" action="" method="post">
                                  <div class="row">
                                   
                                    <div class="col-md-4 col-md-offset-1">Nama Pemasukan</div>
                                    <div class="col-md-6"></div>
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
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Bukti</div>
                                    <div class="col-md-6"><input id="bukti_pend" type="file" name="bukti_pend" class="" placeholder="Browse" required="true"></div>

                                  </div>
                                  <br>
                                   </form>
                              </div>
                                </div>
                                <div class="modal-footer">
                                  <div class="col-md-12"><span class="pull-right"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary" id="simpan"></span></div>
                                  </div>
                                  <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                                </div>
                               
                                </div>
                                <?php endforeach; ?>
                          </div>
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

                              <?php echo form_open_multipart('pemasukan/tambah'); ?>
  
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
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Bukti</div>
                                    <div class="col-md-6"><input id="bukti_pend" type="file" name="bukti_pend" class="" placeholder="Browse" required="true"></div>

                                  </div>
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
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  
                  <!-- Modal -->
                        <div id="bukti" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Bukti Pemasukan</h4>
                              </div>
                              <div class="modal-body">
                                  <img src="./assets/dist/upload/<?php echo $pends['bukti_pend']; ?>">
                              </div>
                          </div>
                        </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="table-responsive">
            <table id="data-table" title="Laporan Pemasukan" class="table table-striped table-bordered nowrap">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Bukti</th>
                <th>Detail</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($this->session->userdata('group_name') === 'Bendahara Divisi' ){
                $id = $this->session->userdata('user_id');
              $query = $this->db->get_where('pendapatan', array('id_bend' =>  $id));
              }
              else {
                $query = $this->db->get('pendapatan');
              };
              
                $pend = $query->result_array();
                 foreach ($pend as $pends): ?>
                <tr>
                  <td align="left" nowrap="nowrap"><?php echo $pends['id_pend']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pends['nama_pend']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pends['tgl_pend']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pends['jml_pend']; ?></td>
                  <td align="left" nowrap="nowrap"><?php echo $pends['ket_pend']; ?></td>
                  <td align="left" nowrap="nowrap"><img src="./assets/dist/upload/<?php echo $pends['bukti_pend']; ?>"></td>
                  <td ><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailpend(<?php echo $pends['id_pend']; ?>)" ><i class="fa fa-search"></i></button>
                  </td>
                </tr>
            <?php endforeach; ?>
                

            </tbody>
          </table>
          </div>
          
          
                  </div>
                </div>
        <!-- /page content -->
        </div>
      </div>
      </div>
      </div>

<!-- COMPOSE MESSAGE MODAL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" style="width: 40%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><i class="fa fa-bars"></i> Detail Group</h4>
      </div>
      <form action="#" method="post">
        <div class="modal-body">
          
          <div id="contentModal"></div>
          
        </div>
        <div class="modal-footer clearfix">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    $("#data-table").dataTable({
    "title": "Laporan Pemasukan",
    "scrollX": false,
    "dom": 'Bfrtip',
    "bAutoWidth" : false,
    "buttons": [
            'copy',
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
            },
            {
                extend: 'pdf',
                messageBottom: null
            },
            {
                extend: 'print',
                messageTop: function () {
                    printCounter++;
 
                    if ( printCounter === 1 ) {
                        return 'This is the first time you have printed this document.';
                    }
                    else {
                        return 'You have printed this document '+printCounter+' times';
                    }
                },
                messageBottom: null
            }
        ]
    });
    function detailpend(id) {
    $('#myModal').modal('show');  
    $.ajax({
      type:"POST",
      url:"<?php echo base_url() ?>Pemasukan/GET_DETAIL(id)",
      data:{id:id,<?php echo $this->security->get_csrf_token_name(); ?>:'<?php echo $this->security->get_csrf_hash(); ?>'},
      success:function(msg){
        $("contentModal").html(msg);
      }
    })
  };
</script>