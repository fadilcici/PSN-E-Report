<?php
  'id'=>$id;
   $query = $this->db->get_where('pendapatan', array('id_pend' =>  $id));
                $pend = $query->result_array();
                 foreach ($pend as $pends): ?>
                                <div class="row">
                                <div class="col-md-12">
                                  <form name="simpan_data" action="" method="post">
                                  <div class="row">
                                   
                                    <div class="col-md-4 col-md-offset-1">Nama Pemasukan</div>
                                    <div class="col-md-6"><?php echo $pends['nama_pend']; ?></div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Tanggal Pemasukan </div>
                                    <div class="col-md-6"><?php echo $pends['tgl_pend']; ?></div>
                                   
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Jumlah Pemasukan</div>
                                    <div class="col-md-6"><?php echo $pends['jml_pend']; ?></div>
                                    
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Keterangan</div>
                                    <div class="col-md-6"><?php echo $pends['ket_pend']; ?></td></div>

                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">Bukti</div>
                                    <div class="col-md-6"><img src="./assets/dist/upload/<?php echo $pends['bukti_pend']; ?>"></div>

                                  </div>
                                  <br>
                                   </form>
                              </div>
                                </div>
 <?php endforeach; ?>