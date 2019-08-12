<?php echo form_open('departeman/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="dep_id" class="col-md-4 control-label">Dep Id</label>
		<div class="col-md-8">
			<input type="text" name="dep_id" value="<?php echo $this->input->post('dep_id'); ?>" class="form-control" id="dep_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama" class="col-md-4 control-label">Nama</label>
		<div class="col-md-8">
			<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>