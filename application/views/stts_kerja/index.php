<div class="pull-right">
	<a href="<?php echo site_url('stts_kerja/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Sttskerja</th>
		<th>Stts</th>
		<th>Ktg</th>
		<th>Indek</th>
		<th>Actions</th>
    </tr>
	<?php foreach($stts_kerja as $s){ ?>
    <tr>
		<td><?php echo $s['id_sttskerja']; ?></td>
		<td><?php echo $s['stts']; ?></td>
		<td><?php echo $s['ktg']; ?></td>
		<td><?php echo $s['indek']; ?></td>
		<td>
            <a href="<?php echo site_url('stts_kerja/edit/'.$s['id_sttskerja']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('stts_kerja/remove/'.$s['id_sttskerja']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
