<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Barang</h1>
          </div>


            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>List Daftar Barang</h4>
                  </div>
                  <div class="card-body">
                    <a href="barang/add" class="btn btn-primary">Tambah Barang</a>
                  </div>
                  
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Action</th>                            
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($barang as $row): ?>
                              <tr>
                                  <td><?= $row->kode_barang; ?></td>
                                  <td><?= $row->nama_barang; ?></td>
                                  <td><?= $row->harga_beli; ?></td>
                                  <td><?= $row->harga_jual; ?></td>
                                  <td><?= $row->stok; ?></td>
                                  <td>
                                    <a href="barang/edit/<?= $row->kode_barang?>" class="btn btn-warning">Edit</a>
                                    <a href="barang/hapus/<?= $row->kode_barang?>" class="btn btn-danger">Hapus</a>
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
