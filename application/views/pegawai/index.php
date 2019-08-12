<div class="pull-right">
	<a href="<?php echo site_url('pegawai/add'); ?>" class="btn btn-success">Add</a> 
</div>

<div class="table-responsive">
<table class="table table-striped table-bordered">
    <tr>
		<th>Id Pegawai</th>
		<th>Id Jbtn</th>
		<th>Id Jnj Jabatan</th>
		<th>Id Departemen</th>
		<th>Id Bidang</th>
		<th>Id Stts Wp</th>
		<th>Id Stts Kerja</th>
		<th>ID</th>
		<th>Nik</th>
		<th>Nama</th>
		<th>Jk</th>
		<th>Npwp</th>
		<th>Pendidikan</th>
		<th>Gapok</th>
		<th>Tmp Lahir</th>
		<th>Tgl Lahir</th>
		<th>Alamat</th>
		<th>Kota</th>
		<th>Mulai Kerja</th>
		<th>Ms Kerja</th>
		<th>Indexins</th>
		<th>Bpd</th>
		<th>Rekening</th>
		<th>Stts Aktif</th>
		<th>Wajibmasuk</th>
		<th>Pengurang</th>
		<th>Indek</th>
		<th>Mulai Kontrak</th>
		<th>Cuti Diambil</th>
		<th>Dankes</th>
		<th>Photo</th>
		<th>No Ktp</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pegawai as $p){ ?>
    <tr>
		<td><?php echo $p['id_pegawai']; ?></td>
		<td><?php echo $p['id_jbtn']; ?></td>
		<td><?php echo $p['id_jnj_jabatan']; ?></td>
		<td><?php echo $p['id_departemen']; ?></td>
		<td><?php echo $p['id_bidang']; ?></td>
		<td><?php echo $p['id_stts_wp']; ?></td>
		<td><?php echo $p['id_stts_kerja']; ?></td>
		<td><?php echo $p['id']; ?></td>
		<td><?php echo $p['nik']; ?></td>
		<td><?php echo $p['nama']; ?></td>
		<td><?php echo $p['jk']; ?></td>
		<td><?php echo $p['npwp']; ?></td>
		<td><?php echo $p['pendidikan']; ?></td>
		<td><?php echo $p['gapok']; ?></td>
		<td><?php echo $p['tmp_lahir']; ?></td>
		<td><?php echo $p['tgl_lahir']; ?></td>
		<td><?php echo $p['alamat']; ?></td>
		<td><?php echo $p['kota']; ?></td>
		<td><?php echo $p['mulai_kerja']; ?></td>
		<td><?php echo $p['ms_kerja']; ?></td>
		<td><?php echo $p['indexins']; ?></td>
		<td><?php echo $p['bpd']; ?></td>
		<td><?php echo $p['rekening']; ?></td>
		<td><?php echo $p['stts_aktif']; ?></td>
		<td><?php echo $p['wajibmasuk']; ?></td>
		<td><?php echo $p['pengurang']; ?></td>
		<td><?php echo $p['indek']; ?></td>
		<td><?php echo $p['mulai_kontrak']; ?></td>
		<td><?php echo $p['cuti_diambil']; ?></td>
		<td><?php echo $p['dankes']; ?></td>
		<td><?php echo $p['photo']; ?></td>
		<td><?php echo $p['no_ktp']; ?></td>
		<td>
            <a href="<?php echo site_url('pegawai/edit/'.$p['id_pegawai']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pegawai/remove/'.$p['id_pegawai']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
</div>