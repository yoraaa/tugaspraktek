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
                    <h4>Edit Data Barang</h4>
                  </div>
                  
                  <?= form_open('barang/edit_save'); ?>
                
                  <div class="card-body">
                    <div class="form-group">
                        <label >Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?= $barang->kode_barang ?>">
                    </div>
                    <div class="form-group">
                        <label >Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang->nama_barang ?>">
                    </div>
                    <div class="form-group">
                        <label >Harga Beli</label>
                        <input type="number" class="form-control" id="harga_beli" name="harga_beli" value="<?= $barang->harga_beli ?>">
                    </div>
                    <div class="form-group">
                        <label >Harga Jual</label>
                        <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="<?= $barang->harga_jual ?>">
                    </div>
                    <div class="form-group">
                        <label >Stok</label>
                        <input type="text" class="form-control" id="stok" name="stok" value="<?= $barang->stok ?>">
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
            
          </div>
        </section>
      </div>
