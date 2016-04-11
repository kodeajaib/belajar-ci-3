
    <div class="container" style="margin-top:60px">

      <!-- Main component for a primary marketing message or call to action -->
     <div class="row">
      
      <div class="panel panel-success">
        <div class="panel-heading">
         <h4>Data Info </h4>
         </div>

        <div class="panel-body"> 
         <?php echo $this->session->flashdata('pesan');?>
         <br/>
         <div class="col-md-6">
           <a class="btn btn-md btn-success" href="<?php echo base_url('crud/tambahdata');?>">Tambah Data</a>
         </div>
    
         <br/>
         <br/>
            <table class="table table-striped table-bordered responsive">
                      <thead>
                        <tr>
                          <th style="background:#5d5a56;color:#fff">No</th>
                          <th style="background:#5d5a56;color:#fff">Id Info</th>
                          <th style="background:#5d5a56;color:#fff">Tanggal Info</th>
                          <th style="background:#5d5a56;color:#fff">Judul Info</th>
                          <th style="background:#5d5a56;color:#fff">Isi Info</th>                                      
                          <th style="background:#5d5a56;color:#fff">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          $no = 1;                        
                          foreach($ambil_info as $row){
                      ?>

                        
                       <tr>
                          <td style="font-size: 12px;"><?php echo $no++; ?></td>
                          <td style="font-size: 12px;width:80px"><?php echo $row->kdinfo; ?></td>
                          <td style="font-size: 12px;"><?php echo $row->tglinfo; ?></td>
                          <td style="font-size: 12px;width:180px"><?php echo $row->judulinfo; ?></td>                         
                          <td style="font-size: 12px;"><?php echo $row->isiinfo; ?></td>
                   
                          <td style="width:120px">
                              <a class="btn btn-info btn-xs" href="<?php echo site_url('crud/editdata/'.$row->kdinfo);?>"><i class="fa fa-pencil"></i> Edit</a>
                              <a class="btn btn-danger btn-xs" href="<?php echo site_url('crud/hapusinfo/'.$row->kdinfo);?>"
                                  onclick="return confirm('Anda yakin akan menghapus data ?')"> <i class="fa fa-trash"></i> Hapus</a>
                          </td>
                      </tr>
                     
                          
                       
                   
                       <?php 
                      }
                      ?>
                    
                      
                     
                
                   
                      </tbody>
                     </table>  

                
             



        </div>
     </div>

    </div> <!-- /container -->