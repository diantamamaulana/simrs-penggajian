<?php echo form_open('pendidikan/edit/'.$pendidikan['id_pendidikan'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="tingkat" class="col-md-4 control-label">Tingkat</label>
		<div class="col-md-8">
			<input type="text" name="tingkat" value="<?php echo ($this->input->post('tingkat') ? $this->input->post('tingkat') : $pendidikan['tingkat']); ?>" class="form-control" id="tingkat" />
		</div>
	</div>
	<div class="form-group">
		<label for="indek" class="col-md-4 control-label">Indek</label>
		<div class="col-md-8">
			<input type="text" name="indek" value="<?php echo ($this->input->post('indek') ? $this->input->post('indek') : $pendidikan['indek']); ?>" class="form-control" id="indek" />
		</div>
	</div>
	<div class="form-group">
		<label for="gapok1" class="col-md-4 control-label">Gapok1</label>
		<div class="col-md-8">
			<input type="text" name="gapok1" value="<?php echo ($this->input->post('gapok1') ? $this->input->post('gapok1') : $pendidikan['gapok1']); ?>" class="form-control" id="gapok1" />
		</div>
	</div>
	<div class="form-group">
		<label for="kenaikan" class="col-md-4 control-label">Kenaikan</label>
		<div class="col-md-8">
			<input type="text" name="kenaikan" value="<?php echo ($this->input->post('kenaikan') ? $this->input->post('kenaikan') : $pendidikan['kenaikan']); ?>" class="form-control" id="kenaikan" />
		</div>
	</div>
	<div class="form-group">
		<label for="maksimal" class="col-md-4 control-label">Maksimal</label>
		<div class="col-md-8">
			<input type="text" name="maksimal" value="<?php echo ($this->input->post('maksimal') ? $this->input->post('maksimal') : $pendidikan['maksimal']); ?>" class="form-control" id="maksimal" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>