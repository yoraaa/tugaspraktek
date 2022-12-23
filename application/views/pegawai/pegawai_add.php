<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Kasir</h1>
          </div>


            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Kasir</h4>
                  </div>
                  
                  
                  <?= form_open('pegawai/add_save'); ?>
                    <div class="card-body">
                      <div class="form-group">
                          <label >Nama Pegawai</label>
                          <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required>
                      </div>
                      <div class="form-group">
                          <label >Username </label>
                          <input type="text" class="form-control" id="username" name="username" required>
                      </div>
                      <div class="form-group">
                          <label >Email</label>
                          <input type="email" class="form-control" id="email" name="email" required>
                      </div>
                      <div class="form-group">
                          <label >No HP</label>
                          <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                      </div>
                      
                      </div>
                      <div class="card-footer">
                          <button type="submit" class="btn-btn-primary">Simpan</button>
                      </div>

                <? form_close(); ?>
                
                    
                    
                  
                </div>
              </div>
            </div>
            
          </div>
        </section>
      </div>
