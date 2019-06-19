<div class="row">

  <div class="col-md-4 col-md-offset-4">

    <h3 style="text-align:center">DAFTAR PESERTA FIKTACIA 2019</h3>

  </div>
  
</div>

<div class="row">

  <div class="col-md-4">

    <a href="<?php echo site_url('Export/export_excelpeserta');?>" class="btn btn-success">Export Excel</a>
    
  </div>
  <div class="col-md-4">
    <input type="text" id="jenis_acara" class="form-control" placeholder="Jenis Acara" onkeyup="cariAcara()">
  </div>
</div>

<div class="row">
    
    <div class="col-md-12">

      <table id="myTable" class="table table-striped" style="margin:10px">

        <thead>

          <th>#</th>

          <th>PIN</th>

          <th>Nama Lengkap</th>

          <th>Email</th>

          <th>No. HP</th>

          <th>Kategori</th>

          <th>Nim</th>

          <th>Progdi</th>

          <th>Jenis Acara</th>

          <th>Tgl Daftar</th>

          <th style="colspan:2">Status</th>

        </thead>

        <tbody>

        <?php

          $no=1;

          foreach ($peserta as $key){ ?>

            <tr>

              <th><?php echo $no++?></th>

              <td><?php echo $key['pin'] ?></td>

              <td><?php echo $key['name'] ?></td>

              <td><?php echo $key['email'] ?></td>

              <td><?php echo $key['telp'] ?></td>

              <td><?php echo $key['kategori'] ?></td>

              <td><?php echo $key['nim'] ?></td>

              <td><?php echo $key['progdi'] ?></td>

              <td><?php echo $key['jenis_acara']?></td>

              <td><?php echo date('M j, Y h:i a', strtotime($key['created_at']))?></td>

              <td>

              <a href="<?php echo base_url('admin/getLunas/'.$key['pin']);?>" class="btn btn-sm btn-success" >Lunas</a>

              <a href="<?php echo base_url('admin/edit/'.$key['pin']);?>" class="btn btn-sm btn-primary">Edit</a>

              <a href="<?php echo base_url('admin/deletePeserta/'.$key['pin']);?>" class="btn btn-sm btn-danger">Delete</a></td>

            </tr>

         <?php }?>

        </tbody>

      </table>

    </div>

</div>
