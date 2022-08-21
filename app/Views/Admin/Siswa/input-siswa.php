<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?= base_url('admin/dashboard-admin');?>"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="<?= base_url('admin/master-siswa');?>">Master Data Siswa</a></li>
			<li class="active">Input Data Siswa</li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Input Siswa</h3>
					<hr />
					<form action="<?php echo base_url('admin/simpan-siswa');?>" method="post">
						<div class="form-group col-md-6">
							<label>NIS Siswa</label>
							<input type="text" class="form-control" name="nis" placeholder="Masukkan NIS Siswa" onKeyPress="return goodchars(event,'1234567890',this)" maxlength="9" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Nama Siswa</label>
							<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Siswa" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Kelas Siswa</label>
							<select class="form-control" name="kelas" required="required">
								<option value="">-- Pilih Kelas --</option>
								<?php
								foreach($data_kelas as $dataKelas){
								?>
								<option value="<?= $dataKelas['id_kelas']; ?>"><?= $dataKelas['nama_kelas']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Jenis Kelamin</label>
							<select class="form-control" name="jk" required="required">
								<option value="">-- Pilih Jenis Kelamin --</option>
								<option value="L">LAKI-LAKI</option>
								<option value="P">PEREMPUAN</option>
							</select>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Alamat Siswa</label>
							<input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Tahun Angkatan</label>
							<input type="text" class="form-control" name="tahun" placeholder="Masukkan Tahun Angkatan" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Kontak Siswa</label>
							<input type="text" class="form-control" name="kontak" onKeyPress="return goodchars(event,'1234567890',this)" maxlength="13" placeholder="Masukkan Kontak Siswa" required="required">
						</div>
						<div style="clear:both;"></div>
						
						<div class="form-group col-md-6">
							<button type="submit" class="btn btn-primary">Simpan</button>
							<button type="reset" class="btn btn-danger">Batal</button>
						</div>
						<div style="clear:both;"></div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.row-->

</div>