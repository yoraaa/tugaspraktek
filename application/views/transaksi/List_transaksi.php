<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Transaksi</h1>
          </div>


            <div class="row">
              <div class="col-12">
                </div class="card">
                    <?= form_open('transaksi/add_save'); ?>
                        <div class="card-body">
                        <div class="form-group">
                            <label>Nama Barang</label>
                                <select class="form-control" name="nama_barang">
                                    <?php foreach($barang as $l){ ?>
                                    <option value="<?php echo $l->nama_barang; ?>"><?php echo $l->nama_barang; ?>   </option>
                                    <?php } ?>
                                </select> 
                        </div>
                        <div class="form-group">
                            <label >Total Produk</label>
                            <input type="number" class="form-control" id="jumlah_barang" name="	jumlah_barang" required>
                        </div>
                        
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn-btn-primary">Simpan</button>
                        </div>

                    <? form_close(); ?>

                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>List Data Membership</h4>
                  </div>
                  <div class="card-body">
                    <a href="member/add" class="btn btn-primary">Tambah Member</a>
                  </div>
                  
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th>Id Member</th>
                            <th>Nama Member</th>
                            <th>No HP</th>
                            <th>Tanggal Pembuatan</th>
                            <th>Total Point</th>
                            <th>Action</th>                            
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($member as $row): ?>
                              <tr>
                                  <td><?= $row->id_member; ?></td>
                                  <td><?= $row->nama_member; ?></td>
                                  <td><?= $row->no_hp; ?></td>
                                  <td><?= $row->create_at; ?></td>
                                  <td><?= $row->total_point; ?></td>
                                  <td>
                                    <a href="member/edit/<?= $row->id_member?>" class="btn btn-warning">Edit</a>
                                    <a href="member/hapus/<?= $row->id_member?>" class="btn btn-danger">Hapus</a>
                                  </td>
                                  
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
        </section>
      </div>
