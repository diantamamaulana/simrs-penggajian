<?php echo form_open('stts_wp/edit/'.$stts_wp['id_sttswp'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="stts" class="col-md-4 control-label">Stts</label>
		<div class="col-md-8">
			<input type="text" name="stts" value="<?php echo ($this->input->post('stts') ? $this->input->post('stts') : $stts_wp['stts']); ?>" class="form-control" id="stts" />
		</div>
	</div>
	<div class="form-group">
		<label for="ktg" class="col-md-4 control-label">Ktg</label>
		<div class="col-md-8">
			<input type="text" name="ktg" value="<?php echo ($this->input->post('ktg') ? $this->input->post('ktg') : $stts_wp['ktg']); ?>" class="form-control" id="ktg" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>