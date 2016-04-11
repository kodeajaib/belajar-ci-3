<div class="container" style="margin-top:60px">

  <!-- Main component for a primary marketing message or call to action -->
 <div class="row">
  
  <div class="panel panel-success">
    <div class="panel-heading">
     <h4>Tambah Data Info </h4>
     </div>

    <div class="panel-body"> 

      <form method="post" action="<?php echo site_url('crud/prosestambah')?>" enctype="multipart/form-data">
   
     
        <div class="control-group">
         <label class="control-label">ID Info</label>
          <div class="controls">
            <input class="form-control" type="text" name="kdinfo" value="<?php echo $kdinfo; ?>" readonly="">
          </div>
        </div>
        <br />
        <div class="control-group">
         <label class="control-label">Tgl Info</label>
          <div class="controls">
            <input class="form-control" type="text" name="tglinfo"  value="<?php date_default_timezone_set("Asia/Jakarta"); echo date(" h:i:s d/m/Y ");?>" readonly="">
          </div>
        </div>
        <br />
        <div class="control-group">
          <label class="control-label">Judul Info</label>
          <div class="controls">
             <input class="form-control" type="text" name="judulinfo">
          </div>
        </div>
        <br />
        <div class="control-group">
          <label class="control-label">Isi Info</label>
          <div class="controls">
           <textarea name="isiinfo"></textarea>            
          </div>
        </div>
         <br />
    
       
                 
      

          <a class="btn btn-md btn-danger" href="<?php echo site_url('crud');?>">Kembali</a>
          <button type="submit" class="btn btn-primary">Simpan</button>
       
          </form>
        </div>
  


   </div>

  </div>
</div> <!-- /container -->