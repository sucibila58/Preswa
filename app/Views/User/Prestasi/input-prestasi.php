<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?= base_url('user/dashboard-user');?>"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="<?= base_url('user/master-prestasi');?>">Master Data Prestasi</a></li>
			<li class="active">Input Data Prestasi</li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Input Prestasi</h3>
					<hr />
					<form action="<?php echo base_url('user/simpan-prestasi');?>" method="post" enctype="multipart/form-data">
						<div class="form-group col-md-6">
							<label>Jenis Prestasi</label>
							<select class="form-control" name="jenisp" required="required">
								<option value="">-- Pilih Jenis Prestasi --</option>
								<option value="Akademik">Akademik</option>
								<option value="Non Akademik">Non-Akademik</option>
							</select>
						</div>
						<div style="clear:both;"></div>

						<div class="form-group col-md-6">
							<label>Tingkat</label>
							<select class="form-control" name="tingkat" required="required">
								<option value="">-- Pilih Tingkat Prestasi --</option>
								<?php
								foreach($data_tingkat as $dataTingkat){
								?>
								<option value="<?= $dataTingkat['id_tingkat']; ?>"><?= $dataTingkat['nama_tingkat']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Bidang</label>
							<select class="form-control" name="bidang" required="required">
								<option value="">-- Pilih Bidang Prestasi --</option>
								<?php
								foreach($data_bidang as $dataBidang){
								?>
								<option value="<?= $dataBidang['id_bidang']; ?>"><?= $dataBidang['nama_bidang']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Gelar</label>
							<select class="form-control" name="gelar" required="required">
								<option value="">-- Pilih Gelar --</option>
								<?php
								foreach($data_gelar as $dataGelar){
								?>
								<option value="<?= $dataGelar['id_gelar']; ?>"><?= $dataGelar['nama_gelar']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Nama Pembina</label>
							<input type="text" class="form-control" name="pembina" placeholder="Masukkan Nama Pembina "required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Ekstrakurrikuler</label>
							<select class="form-control" name="ekskul" required="required">
								<option value="">-- Pilih Ekskul --</option>
								<?php
								foreach($data_ekskul as $dataEkskul){
								?>
								<option value="<?= $dataEkskul['id_ekskul']; ?>"><?= $dataEkskul['nama_ekskul']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Nama Kegiatan</label>
							<input type="text" class="form-control" name="nama" placeholder="Contoh: Lomba Debat Tahun 2020" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Tempat</label>
							<input type="text" class="form-control" name="tempat"placeholder="Masukkan Tempat Penyelenggaraan" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Provinsi</label>
							<select class="form-control" name="provinsi" required="required" id="prov" onChange="opsiKota();">
								<option value="">-- Pilih Provinsi --</option>
								<?php
								foreach($data_provinsi as $dataProvinsi){
								?>
								<option value="<?= $dataProvinsi['id_provinsi']; ?>"><?= $dataProvinsi['nama_provinsi']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div style="clear:both;"></div>

                        <div id="selKota">
							<div class="form-group col-md-6">
								<label>Kota</label>
								<select class="form-control" name="kota" id="kota" required="required">
									<option value="">-- Pilih Kota --</option>
								</select>
							</div>
							<div style="clear:both;"></div>
						</div>

                        <div class="form-group col-md-6">
							<label>Penyelenggara</label>
							<input type="text" class="form-control" name="penyelenggara" placeholder="Masukkan Nama Penyelenggara" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Jumlah Sekolah</label>
							<input type="text" class="form-control" name="jml_sklh" placeholder="Masukkan Jumlah Sekolah" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Jumlah Peserta</label>
							<input type="text" class="form-control" name="jml_peserta" placeholder="Masukkan Jumlah Peserta" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Waktu Pelaksanaan</label>
							<input type="date" class="form-control" name="waktu" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Bukti Sertifikat</label>
							<input type="file" class="form-control" name="bukti_sertif" required="required">
                            <em> format file yang diizinkan : jpg,png,jpeg</em>
                            <em> maksimal ukuran 1 MB</em>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Bukti Kegiatan</label>
							<input type="file" class="form-control" name="bukti_kegiatan" required="required">
                            <em> format file yang diizinkan : jpg,png,jpeg</em>
                            <em> maksimal ukuran 1 MB</em>
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

<script type="text/javascript">
function opsiKota() {
    var idProv = $('#prov').val();
    $('#selKota').load("<?php echo base_url('user/opsi_kota')."/";?>"+idProv);
}
</script>