<?php echo form_open('jnj_jabatan/edit/'.$jnj_jabatan['id_jenjangjbtn'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="kode" class="col-md-4 control-label">Kode</label>
		<div class="col-md-8">
			<input type="text" name="kode" value="<?php echo ($this->input->post('kode') ? $this->input->post('kode') : $jnj_jabatan['kode']); ?>" class="form-control" id="kode" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama" class="col-md-4 control-label">Nama</label>
		<div class="col-md-8">
			<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $jnj_jabatan['nama']); ?>" class="form-control" id="nama" />
		</div>
	</div>
	<div class="form-group">
		<label for="tnj" class="col-md-4 control-label">Tnj</label>
		<div class="col-md-8">
			<input type="text" name="tnj" value="<?php echo ($this->input->post('tnj') ? $this->input->post('tnj') : $jnj_jabatan['tnj']); ?>" class="form-control" id="tnj" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>