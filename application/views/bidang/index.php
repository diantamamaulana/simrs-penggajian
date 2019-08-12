<div class="pull-right">
	<a href="<?php echo site_url('bidang/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Bidang</th>
		<th>Nama</th>
		<th>Actions</th>
    </tr>
	<?php foreach($bidang as $b){ ?>
    <tr>
		<td><?php echo $b['id_bidang']; ?></td>
		<td><?php echo $b['nama']; ?></td>
		<td>
            <a href="<?php echo site_url('bidang/edit/'.$b['id_bidang']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('bidang/remove/'.$b['id_bidang']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
