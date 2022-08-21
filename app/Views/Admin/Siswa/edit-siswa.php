<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?= base_url('admin/dashboad-admin');?>"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="<?= base_url('admin/master-siswa');?>">Master Data Siswa</a></li>
			<li class="active">Edit Data Siswa</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Edit Siswa</h3>
					<hr />
					<form action="<?php echo base_url('admin/update-siswa');?>" method="post">
                        <div class="form-group col-md-6">
							<label>NIS Siswa</label>
							<input type="text" class="form-control" name="nis" placeholder="Masukkan NIS Siswa" value="<?php echo $data_siswa['nis_siswa'];?>" readonly="readonly" required="required">
						</div>
						<div style="clear:both;"></div>

						<div class="form-group col-md-6">
							<label>Nama Siswa</label>
							<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Siswa" value="<?php echo $data_siswa['nama_siswa'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Kelas Siswa</label>
							<select class="form-control" name="kelas" required="required">
								<option value="">-- Pilih Kelas --</option>
								<?php
								foreach($data_kelas as $dataKelas){
									if($data_siswa['id_kelas'] == $dataKelas['id_kelas']) {
										$sel="selected";
									}
									else{
										$sel="";
									}
								?>
								<option value="<?= $dataKelas['id_kelas']; ?>" <?= $sel; ?>><?= $dataKelas['nama_kelas']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Jenis Kelamin</label>
							<select class="form-control" name="jk" required="required">
								<option value="">-- Pilih Jenis Kelamin --</option>
								<option value="L"<?php if($data_siswa['jenis_kelamin']=="L"){ echo "selected"; }else echo "";?>>LAKI-LAKI</option>
								<option value="P"<?php if($data_siswa['jenis_kelamin']=="P"){ echo "selected"; }else echo "";?>>PEREMPUAN</option>
							</select>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Alamat Siswa</label>
							<input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" value="<?php echo $data_siswa['alamat_siswa'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Tahun Angkatan</label>
							<input type="text" class="form-control" name="tahun" placeholder="Masukkan Tahun Angkatan" value="<?php echo $data_siswa['tahun_angkatan'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Kontak Siswa</label>
							<input type="text" class="form-control" name="kontak" placeholder="Masukkan Kontak Siswa" value="<?php echo $data_siswa['kontak_siswa'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

						<div class="form-group col-md-6">
							<button type="submit" class="btn btn-primary">Update</button>
							<a href="<?php echo base_url('admin/master-siswa');?>"><button type="button" class="btn btn-danger">Batal</button></a>
						</div>
						<div style="clear:both;"></div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>