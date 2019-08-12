<div class="pull-right">
	<a href="<?php echo site_url('stts_wp/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Sttswp</th>
		<th>Stts</th>
		<th>Ktg</th>
		<th>Actions</th>
    </tr>
	<?php foreach($stts_wp as $s){ ?>
    <tr>
		<td><?php echo $s['id_sttswp']; ?></td>
		<td><?php echo $s['stts']; ?></td>
		<td><?php echo $s['ktg']; ?></td>
		<td>
            <a href="<?php echo site_url('stts_wp/edit/'.$s['id_sttswp']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('stts_wp/remove/'.$s['id_sttswp']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
