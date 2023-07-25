<h1>DATA OBAT</h1>
        
        <br/>
        <br/>
        <table class="table table-striped table-sm">
        <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">Kode</th>
              
                <th scope="col">Nama</th>
                <th scope="col">Jenis</th>
                <th scope="col">Fungsi</th>
                <th scope="col">Stock</th>
               
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from obat");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['kode_obat']; ?></td>
                    <td><?php echo $d['nama_obat']; ?></td>
                    <td><?php echo $d['jenis']; ?></td>
                    <td><?php echo $d['fungsi']; ?></td>
                    <td><?php echo $d['stock']; ?></td>
                    
                </tr>
                <?php
            }
            ?>
            </thead>
        </table>
        <script>
                        window.print()
                    </script>