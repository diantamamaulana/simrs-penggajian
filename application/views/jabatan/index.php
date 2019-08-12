<div class="pull-right">
	<a href="<?php echo site_url('jabatan/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Jabatan</th>
		<th>Kd Jbtn</th>
		<th>Nm Jbtn</th>
		<th>Actions</th>
    </tr>
	<?php foreach($jabatan as $j){ ?>
    <tr>
		<td><?php echo $j['id_jabatan']; ?></td>
		<td><?php echo $j['kd_jbtn']; ?></td>
		<td><?php echo $j['nm_jbtn']; ?></td>
		<td>
            <a href="<?php echo site_url('jabatan/edit/'.$j['id_jabatan']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('jabatan/remove/'.$j['id_jabatan']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
