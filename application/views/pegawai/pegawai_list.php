<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Kasir</h1>
          </div>


            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>List Data Kasir</h4>
                  </div>
                  <div class="card-body">
                    <a href="pegawai/add" class="btn btn-primary">Tambah Kasir</a>
                  </div>
                  
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th>Id Pegawai</th>
                            <th>Nama Pegawai</th>
                            <th>Username</th>
                            <th>no_hp</th>
                            <th>Action</th>                            
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pegawai as $row): ?>
                              <tr>
                                  <td><?= $row->id_pegawai; ?></td>
                                  <td><?= $row->nama_pegawai; ?></td>
                                  <td><?= $row->username; ?></td>
                                  <td><?= $row->no_hp; ?></td>
                                  <td>
                                  <a href="pegawai/hapus/<?= $row->id_pegawai?>" class="btn btn-danger">Hapus</a>
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
