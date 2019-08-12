<?php echo form_open('stts_kerja/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="stts" class="col-md-4 control-label">Stts</label>
		<div class="col-md-8">
			<input type="text" name="stts" value="<?php echo $this->input->post('stts'); ?>" class="form-control" id="stts" />
		</div>
	</div>
	<div class="form-group">
		<label for="ktg" class="col-md-4 control-label">Ktg</label>
		<div class="col-md-8">
			<input type="text" name="ktg" value="<?php echo $this->input->post('ktg'); ?>" class="form-control" id="ktg" />
		</div>
	</div>
	<div class="form-group">
		<label for="indek" class="col-md-4 control-label">Indek</label>
		<div class="col-md-8">
			<input type="text" name="indek" value="<?php echo $this->input->post('indek'); ?>" class="form-control" id="indek" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>