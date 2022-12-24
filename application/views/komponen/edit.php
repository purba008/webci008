<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ddiv, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
    div.container{
        
  background-color: #f2f2f2;
  width: 50%;
    }
</style>
<body>
    <div class="container">
    <div class="alert alert-info" role="alert" >
 <h2  class="text-center"> Edit Data </h2>
</div>

    <form action="<?=site_url('Komponen008/proses_edit')?>"  method="post">

<div class="mb-3">
    <label for="">Merek</label>
    <input type="hidden" value="<?php echo $isi->id_komponen;?>" name="txt_id_komponen">
    <input type="text" name="txt_merek_008" class="form-control" value="<?php echo $isi->merek_008;?>">
</div>

<fieldset class="mb-3">Jenis   
<div class="col-sm-10">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="txt_jenis_008" id="txt_jenis_008" value="HDD" checked>
        <label class="form-check-label" for="txt_jenis_008" <?php echo ($isi->jenis_008 ? 'HDD' : 'selected');?>>HDD</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="txt_jenis_008" id="txt_jenis_008" value="RAM" checked>
        <label class="form-check-label" for="txt_jenis_008" <?php echo ($isi->jenis_008 ? 'RAM' : 'selected');?>>RAM</label>
       </div>
</div>
</fieldset>

<div class="mb-3">
    <label for="">Kapasitas</label>
    <input type="text" name="txt_kapasitas_008" class="form-control" value="<?php echo $isi->kapasitas_008;?>">
</div>

 <div class="mb-3">
    <label for="">Harga</label>
    <input type="text" name="txt_harga_008" class="form-control" value="<?php echo $isi->harga_008;?>">
 </div>

    <input type="submit" name="submit" value="Save" class="btn btn-primary">
    <a href="<?=site_url('Komponen008/index');?>" class=" btn btn-warning">Cancel</a>
    
    </form>
    </div>
</body>
</html>