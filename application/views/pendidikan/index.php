<div class="pull-right">
	<a href="<?php echo site_url('pendidikan/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Pendidikan</th>
		<th>Tingkat</th>
		<th>Indek</th>
		<th>Gapok1</th>
		<th>Kenaikan</th>
		<th>Maksimal</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pendidikan as $p){ ?>
    <tr>
		<td><?php echo $p['id_pendidikan']; ?></td>
		<td><?php echo $p['tingkat']; ?></td>
		<td><?php echo $p['indek']; ?></td>
		<td><?php echo $p['gapok1']; ?></td>
		<td><?php echo $p['kenaikan']; ?></td>
		<td><?php echo $p['maksimal']; ?></td>
		<td>
            <a href="<?php echo site_url('pendidikan/edit/'.$p['id_pendidikan']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pendidikan/remove/'.$p['id_pendidikan']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
