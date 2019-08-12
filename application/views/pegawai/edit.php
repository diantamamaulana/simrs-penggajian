<?php echo form_open('pegawai/edit/'.$pegawai['id_pegawai'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_jbtn" class="col-md-4 control-label">Jabatan</label>
		<div class="col-md-8">
			<select name="id_jbtn" class="form-control">
				<option value="">select jabatan</option>
				<?php 
				foreach($all_jabatan as $jabatan)
				{
					$selected = ($jabatan['id_jabatan'] == $pegawai['id_jbtn']) ? ' selected="selected"' : "";

					echo '<option value="'.$jabatan['id_jabatan'].'" '.$selected.'>'.$jabatan['kd_jbtn'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_jnj_jabatan" class="col-md-4 control-label">Jnj Jabatan</label>
		<div class="col-md-8">
			<select name="id_jnj_jabatan" class="form-control">
				<option value="">select jnj_jabatan</option>
				<?php 
				foreach($all_jnj_jabatan as $jnj_jabatan)
				{
					$selected = ($jnj_jabatan['id_jenjangjbtn'] == $pegawai['id_jnj_jabatan']) ? ' selected="selected"' : "";

					echo '<option value="'.$jnj_jabatan['id_jenjangjbtn'].'" '.$selected.'>'.$jnj_jabatan['kode'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_departemen" class="col-md-4 control-label">Departeman</label>
		<div class="col-md-8">
			<select name="id_departemen" class="form-control">
				<option value="">select departeman</option>
				<?php 
				foreach($all_departemen as $departeman)
				{
					$selected = ($departeman['id_departemen'] == $pegawai['id_departemen']) ? ' selected="selected"' : "";

					echo '<option value="'.$departeman['id_departemen'].'" '.$selected.'>'.$departeman['dep_id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_bidang" class="col-md-4 control-label">Bidang</label>
		<div class="col-md-8">
			<select name="id_bidang" class="form-control">
				<option value="">select bidang</option>
				<?php 
				foreach($all_bidang as $bidang)
				{
					$selected = ($bidang['id_bidang'] == $pegawai['id_bidang']) ? ' selected="selected"' : "";

					echo '<option value="'.$bidang['id_bidang'].'" '.$selected.'>'.$bidang['nama'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_stts_wp" class="col-md-4 control-label">Id Stts Wp</label>
		<div class="col-md-8">
			<select name="id_stts_wp" class="form-control">
				<option value="">select</option>
				<?php 
				$id_stts_wp_values = array(
				);

				foreach($id_stts_wp_values as $value => $display_text)
				{
					$selected = ($value == $pegawai['id_stts_wp']) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_stts_kerja" class="col-md-4 control-label">Id Stts Kerja</label>
		<div class="col-md-8">
			<select name="id_stts_kerja" class="form-control">
				<option value="">select</option>
				<?php 
				$id_stts_kerja_values = array(
				);

				foreach($id_stts_kerja_values as $value => $display_text)
				{
					$selected = ($value == $pegawai['id_stts_kerja']) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id" class="col-md-4 control-label">ID</label>
		<div class="col-md-8">
			<input type="text" name="id" value="<?php echo ($this->input->post('id') ? $this->input->post('id') : $pegawai['id']); ?>" class="form-control" id="id" />
		</div>
	</div>
	<div class="form-group">
		<label for="nik" class="col-md-4 control-label">Nik</label>
		<div class="col-md-8">
			<input type="text" name="nik" value="<?php echo ($this->input->post('nik') ? $this->input->post('nik') : $pegawai['nik']); ?>" class="form-control" id="nik" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama" class="col-md-4 control-label">Nama</label>
		<div class="col-md-8">
			<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $pegawai['nama']); ?>" class="form-control" id="nama" />
		</div>
	</div>
	<div class="form-group">
		<label for="jk" class="col-md-4 control-label">Jk</label>
		<div class="col-md-8">
			<input type="text" name="jk" value="<?php echo ($this->input->post('jk') ? $this->input->post('jk') : $pegawai['jk']); ?>" class="form-control" id="jk" />
		</div>
	</div>
	<div class="form-group">
		<label for="npwp" class="col-md-4 control-label">Npwp</label>
		<div class="col-md-8">
			<input type="text" name="npwp" value="<?php echo ($this->input->post('npwp') ? $this->input->post('npwp') : $pegawai['npwp']); ?>" class="form-control" id="npwp" />
		</div>
	</div>
	<div class="form-group">
		<label for="pendidikan" class="col-md-4 control-label">Pendidikan</label>
		<div class="col-md-8">
			<input type="text" name="pendidikan" value="<?php echo ($this->input->post('pendidikan') ? $this->input->post('pendidikan') : $pegawai['pendidikan']); ?>" class="form-control" id="pendidikan" />
		</div>
	</div>
	<div class="form-group">
		<label for="gapok" class="col-md-4 control-label">Gapok</label>
		<div class="col-md-8">
			<input type="text" name="gapok" value="<?php echo ($this->input->post('gapok') ? $this->input->post('gapok') : $pegawai['gapok']); ?>" class="form-control" id="gapok" />
		</div>
	</div>
	<div class="form-group">
		<label for="tmp_lahir" class="col-md-4 control-label">Tmp Lahir</label>
		<div class="col-md-8">
			<input type="text" name="tmp_lahir" value="<?php echo ($this->input->post('tmp_lahir') ? $this->input->post('tmp_lahir') : $pegawai['tmp_lahir']); ?>" class="form-control" id="tmp_lahir" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_lahir" class="col-md-4 control-label">Tgl Lahir</label>
		<div class="col-md-8">
			<input type="text" name="tgl_lahir" value="<?php echo ($this->input->post('tgl_lahir') ? $this->input->post('tgl_lahir') : $pegawai['tgl_lahir']); ?>" class="form-control" id="tgl_lahir" />
		</div>
	</div>
	<div class="form-group">
		<label for="alamat" class="col-md-4 control-label">Alamat</label>
		<div class="col-md-8">
			<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $pegawai['alamat']); ?>" class="form-control" id="alamat" />
		</div>
	</div>
	<div class="form-group">
		<label for="kota" class="col-md-4 control-label">Kota</label>
		<div class="col-md-8">
			<input type="text" name="kota" value="<?php echo ($this->input->post('kota') ? $this->input->post('kota') : $pegawai['kota']); ?>" class="form-control" id="kota" />
		</div>
	</div>
	<div class="form-group">
		<label for="mulai_kerja" class="col-md-4 control-label">Mulai Kerja</label>
		<div class="col-md-8">
			<input type="text" name="mulai_kerja" value="<?php echo ($this->input->post('mulai_kerja') ? $this->input->post('mulai_kerja') : $pegawai['mulai_kerja']); ?>" class="form-control" id="mulai_kerja" />
		</div>
	</div>
	<div class="form-group">
		<label for="ms_kerja" class="col-md-4 control-label">Ms Kerja</label>
		<div class="col-md-8">
			<input type="text" name="ms_kerja" value="<?php echo ($this->input->post('ms_kerja') ? $this->input->post('ms_kerja') : $pegawai['ms_kerja']); ?>" class="form-control" id="ms_kerja" />
		</div>
	</div>
	<div class="form-group">
		<label for="indexins" class="col-md-4 control-label">Indexins</label>
		<div class="col-md-8">
			<input type="text" name="indexins" value="<?php echo ($this->input->post('indexins') ? $this->input->post('indexins') : $pegawai['indexins']); ?>" class="form-control" id="indexins" />
		</div>
	</div>
	<div class="form-group">
		<label for="bpd" class="col-md-4 control-label">Bpd</label>
		<div class="col-md-8">
			<input type="text" name="bpd" value="<?php echo ($this->input->post('bpd') ? $this->input->post('bpd') : $pegawai['bpd']); ?>" class="form-control" id="bpd" />
		</div>
	</div>
	<div class="form-group">
		<label for="rekening" class="col-md-4 control-label">Rekening</label>
		<div class="col-md-8">
			<input type="text" name="rekening" value="<?php echo ($this->input->post('rekening') ? $this->input->post('rekening') : $pegawai['rekening']); ?>" class="form-control" id="rekening" />
		</div>
	</div>
	<div class="form-group">
		<label for="stts_aktif" class="col-md-4 control-label">Stts Aktif</label>
		<div class="col-md-8">
			<input type="text" name="stts_aktif" value="<?php echo ($this->input->post('stts_aktif') ? $this->input->post('stts_aktif') : $pegawai['stts_aktif']); ?>" class="form-control" id="stts_aktif" />
		</div>
	</div>
	<div class="form-group">
		<label for="wajibmasuk" class="col-md-4 control-label">Wajibmasuk</label>
		<div class="col-md-8">
			<input type="text" name="wajibmasuk" value="<?php echo ($this->input->post('wajibmasuk') ? $this->input->post('wajibmasuk') : $pegawai['wajibmasuk']); ?>" class="form-control" id="wajibmasuk" />
		</div>
	</div>
	<div class="form-group">
		<label for="pengurang" class="col-md-4 control-label">Pengurang</label>
		<div class="col-md-8">
			<input type="text" name="pengurang" value="<?php echo ($this->input->post('pengurang') ? $this->input->post('pengurang') : $pegawai['pengurang']); ?>" class="form-control" id="pengurang" />
		</div>
	</div>
	<div class="form-group">
		<label for="indek" class="col-md-4 control-label">Indek</label>
		<div class="col-md-8">
			<input type="text" name="indek" value="<?php echo ($this->input->post('indek') ? $this->input->post('indek') : $pegawai['indek']); ?>" class="form-control" id="indek" />
		</div>
	</div>
	<div class="form-group">
		<label for="mulai_kontrak" class="col-md-4 control-label">Mulai Kontrak</label>
		<div class="col-md-8">
			<input type="text" name="mulai_kontrak" value="<?php echo ($this->input->post('mulai_kontrak') ? $this->input->post('mulai_kontrak') : $pegawai['mulai_kontrak']); ?>" class="form-control" id="mulai_kontrak" />
		</div>
	</div>
	<div class="form-group">
		<label for="cuti_diambil" class="col-md-4 control-label">Cuti Diambil</label>
		<div class="col-md-8">
			<input type="text" name="cuti_diambil" value="<?php echo ($this->input->post('cuti_diambil') ? $this->input->post('cuti_diambil') : $pegawai['cuti_diambil']); ?>" class="form-control" id="cuti_diambil" />
		</div>
	</div>
	<div class="form-group">
		<label for="dankes" class="col-md-4 control-label">Dankes</label>
		<div class="col-md-8">
			<input type="text" name="dankes" value="<?php echo ($this->input->post('dankes') ? $this->input->post('dankes') : $pegawai['dankes']); ?>" class="form-control" id="dankes" />
		</div>
	</div>
	<div class="form-group">
		<label for="photo" class="col-md-4 control-label">Photo</label>
		<div class="col-md-8">
			<input type="text" name="photo" value="<?php echo ($this->input->post('photo') ? $this->input->post('photo') : $pegawai['photo']); ?>" class="form-control" id="photo" />
		</div>
	</div>
	<div class="form-group">
		<label for="no_ktp" class="col-md-4 control-label">No Ktp</label>
		<div class="col-md-8">
			<input type="text" name="no_ktp" value="<?php echo ($this->input->post('no_ktp') ? $this->input->post('no_ktp') : $pegawai['no_ktp']); ?>" class="form-control" id="no_ktp" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>