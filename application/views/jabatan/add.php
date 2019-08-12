<?php echo form_open('jabatan/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="kd_jbtn" class="col-md-4 control-label">Kd Jbtn</label>
		<div class="col-md-8">
			<input type="text" name="kd_jbtn" value="<?php echo $this->input->post('kd_jbtn'); ?>" class="form-control" id="kd_jbtn" />
		</div>
	</div>
	<div class="form-group">
		<label for="nm_jbtn" class="col-md-4 control-label">Nm Jbtn</label>
		<div class="col-md-8">
			<input type="text" name="nm_jbtn" value="<?php echo $this->input->post('nm_jbtn'); ?>" class="form-control" id="nm_jbtn" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>