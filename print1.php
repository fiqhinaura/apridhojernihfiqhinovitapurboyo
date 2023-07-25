<h1>DATA ALAT MEDIS</h1>
	
	<br/>
	<br/>
	<table class="table table-striped table-sm" border="1">
		<tr>
			<th scope="col">NO</th>
			<th scope="col">Kode Alat</th>
			<th scope="col">Alat Medis</th>
			<th scope="col">Fungsi</th>
			<th scope="col">Stock</th>
			
		</tr>
		<?php 
		include 'koneksi1.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from alatmedis");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kode_alat']; ?></td>
				<td><?php echo $d['nama_alat']; ?></td>
				<td><?php echo $d['fungsialat']; ?></td>
				<td><?php echo $d['stockalat']; ?></td>
				
			</tr>
			<?php 
		}
		?>
	</table>
        <script>
                        window.print()
                    </script>