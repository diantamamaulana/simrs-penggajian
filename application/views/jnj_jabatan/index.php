<div class="pull-right">
	<a href="<?php echo site_url('jnj_jabatan/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Jenjangjbtn</th>
		<th>Kode</th>
		<th>Nama</th>
		<th>Tnj</th>
		<th>Actions</th>
    </tr>
	<?php foreach($jnj_jabatan as $j){ ?>
    <tr>
		<td><?php echo $j['id_jenjangjbtn']; ?></td>
		<td><?php echo $j['kode']; ?></td>
		<td><?php echo $j['nama']; ?></td>
		<td><?php echo $j['tnj']; ?></td>
		<td>
            <a href="<?php echo site_url('jnj_jabatan/edit/'.$j['id_jenjangjbtn']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('jnj_jabatan/remove/'.$j['id_jenjangjbtn']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
