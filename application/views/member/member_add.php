<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Membership</h1>
          </div>


            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Member</h4>
                  </div>
                  
                  
                  <?= form_open('member/add_save'); ?>
                    <div class="card-body">
                      <div class="form-group">
                          <label >Nama Member</label>
                          <input type="text" class="form-control" id="nama_member" name="nama_member" required>
                      </div>
                      <div class="form-group">
                          <label >No HP</label>
                          <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                      </div>
                      <div class="form-group">
                          <label >Total Point</label>
                          <input type="number" class="form-control" id="total_point" name="total_point" required>
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
