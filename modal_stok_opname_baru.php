<?php 
include 'sanitasi.php';
include 'db.php';
?>

<div class="table-responsive">



<table id="tabeluser" class="table table-bordered">
        <thead> <!-- untuk memberikan nama pada kolom tabel -->
        
            <th> Kode Barang </th>
            <th> Nama Barang </th>
            <th> Satuan </th>
            <th> Kategori </th>
            <th> Suplier </th>
        </thead> <!-- tag penutup tabel -->
        
        <tbody> <!-- tag pembuka tbody, yang digunakan untuk menampilkan data yang ada di database --> 
<?php


        
        $perintah = $db->query("SELECT * FROM barang WHERE berkaitan_dgn_stok = 'Barang' || berkaitan_dgn_stok = ''");
        
        //menyimpan data sementara yang ada pada $perintah
        while ($data1 = mysqli_fetch_array($perintah))
        {
        
        // menampilkan data
        echo "<tr class='pilih' data-kode='". $data1['kode_barang'] ."' nama-barang='". $data1['nama_barang'] ."'
        satuan='". $data1['satuan'] ."' harga='". $data1['harga_jual'] ."' jumlah-barang='". $data1['stok_barang'] ."'>
        
            <td>". $data1['kode_barang'] ."</td>
            <td>". $data1['nama_barang'] ."</td> 
            <td>". $data1['satuan'] ."</td>
            <td>". $data1['kategori'] ."</td>
            <td>". $data1['suplier'] ."</td>
            </tr>";
      
         }
//Untuk Memutuskan Koneksi Ke Database
mysqli_close($db);   
?>
    
        </tbody> <!--tag penutup tbody-->
        
        </table> <!-- tag penutup table-->

                  </div>
<script type="text/javascript">
  $(function () {
  $("#tabeluser").dataTable();
  });
</script>