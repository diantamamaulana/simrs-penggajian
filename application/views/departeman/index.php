<div class="pull-right">
	<a href="<?php echo site_url('departeman/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Departemen</th>
		<th>Dep Id</th>
		<th>Nama</th>
		<th>Actions</th>
    </tr>
	<?php foreach($departemen as $d){ ?>
    <tr>
		<td><?php echo $d['id_departemen']; ?></td>
		<td><?php echo $d['dep_id']; ?></td>
		<td><?php echo $d['nama']; ?></td>
		<td>
            <a href="<?php echo site_url('departeman/edit/'.$d['id_departemen']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('departeman/remove/'.$d['id_departemen']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
