<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?= base_url('user/dashboard-user');?>"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="<?= base_url('user/master-prestasi');?>">Master Data Prestasi </a></li>
			<li class="active">Edit Data Prestasi</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Edit Prestasi</h3>
					<hr />
					<form action="<?php echo base_url('user/update-prestasi');?>" enctype="multipart/form-data" method="post">
						<div class="form-group col-md-6">
							<label>Jenis Pretasi</label>
							<select class="form-control" name="jenisp" required="required">
								<option value="">-- Pilih Jenis Prestasi --</option>
								<option value="Akademik"<?php if($data_prestasi['jenis_prestasi']=="Akademik"){ echo "selected"; }else echo "";?>>Akademik</option>
								<option value="Non Akademik"<?php if($data_prestasi['jenis_prestasi']=="Non Akademik"){ echo "selected"; }else echo "";?>>Non-Akademik</option>
							</select>
						</div>
						<div style="clear:both;"></div>

						<div class="form-group col-md-6">
							<label>Tingkat</label>
							<select class="form-control" name="tingkat" required="required">
								<option value="">-- Pilih Tingkat Prestasi --</option>
								<?php
								foreach($data_tingkat as $dataTingkat){
									if($data_prestasi['id_tingkat'] == $dataTingkat['id_tingkat']) {
										$sel="selected";
									}
									else{
										$sel="";
									}
								?>
								<option value="<?= $dataTingkat['id_tingkat']; ?>" <?= $sel; ?>><?= $dataTingkat['nama_tingkat']; ?></option>
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
									if($data_prestasi['id_bidang'] == $dataBidang['id_bidang']) {
										$sel="selected";
									}
									else{
										$sel="";
									}
								?>
								<option value="<?= $dataBidang['id_bidang']; ?>" <?= $sel; ?>><?= $dataBidang['nama_bidang']; ?></option>
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
									if($data_prestasi['id_gelar'] == $dataGelar['id_gelar']) {
										$sel="selected";
									}
									else{
										$sel="";
									}
								?>
								<option value="<?= $dataGelar['id_gelar']; ?>" <?= $sel; ?>><?= $dataGelar['nama_gelar']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Nama Pembina</label>
							<input type="text" class="form-control" name="pembina" placeholder="Kosongkan Bila Tidak Ada" value="<?php echo $data_prestasi['nama_pembina'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Delegasi Ekstrakurrikuler</label>
							<select class="form-control" name="ekskul" required="required">
								<option value="">-- Pilih Delegasi --</option>
								<?php
								foreach($data_ekskul as $dataEkskul){
									if($data_prestasi['id_ekskul'] == $dataEkskul['id_ekskul']) {
										$sel="selected";
									}
									else{
										$sel="";
									}
								?>
								<option value="<?= $dataEkskul['id_ekskul']; ?>" <?= $sel; ?>><?= $dataEkskul['nama_ekskul']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Nama Kegiatan</label>
							<input type="text" class="form-control" name="nama" placeholder="Contoh: Lomba Debat Tahun 2020" value="<?php echo $data_prestasi['nama_kegiatan'];?>" required="required">
						</div>
						<div style="clear:both;"></div>
                        
                        <div class="form-group col-md-6">
							<label>Tempat</label>
							<input type="text" class="form-control" name="tempat" placeholder="Tuliskan Tempat Penyelenggaraan" value="<?php echo $data_prestasi['tempat'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Provinsi</label>
							<select class="form-control" name="provinsi" required="required" id="prov" onChange="opsiKota();">
								<option value="">-- Pilih Provinsi --</option>
								<?php
								foreach($data_provinsi as $dataProvinsi){
									if($data_prestasi['id_provinsi'] == $dataProvinsi['id_provinsi']) {
										$sel="selected";
									}
									else{
										$sel="";
									}
								?>
								<option value="<?= $dataProvinsi['id_provinsi']; ?>" <?= $sel; ?>><?= $dataProvinsi['nama_provinsi']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div style="clear:both;"></div>
                        
                        <div id="selKota">
							<div class="form-group col-md-6">
								<label>Kota</label>
								<select class="form-control" name="kota" id="kota" required="required">
									<option value="">-- Pilih Kota --</option>
									<?php
									foreach($data_kota as $dataKota){
										if($data_prestasi['id_kota'] == $dataKota['id_kota']) {
											$sel="selected";
										}
										else{
											$sel="";
										}
									?>
									<option value="<?= $dataKota['id_kota']; ?>" <?= $sel; ?>><?= $dataKota['nama_kota']; ?></option>
									<?php } ?>
								</select>
							</div>
							<div style="clear:both;"></div>
						</div>

                        <div class="form-group col-md-6">
							<label>Penyelenggara</label>
							<input type="text" class="form-control" name="penyelenggara" placeholder="Tuliskan Penyelenggara Kegiatan" value="<?php echo $data_prestasi['penyelenggara'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Jumlah Sekolah</label>
							<input type="text" class="form-control" name="jml_sklh" placeholder="Masukkan Jumlah Sekolah" value="<?php echo $data_prestasi['jumlah_sekolah'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Jumlah Peserta</label>
							<input type="text" class="form-control" name="jml_peserta" placeholder="Masukkan Jumlah Peserta" value="<?php echo $data_prestasi['jumlah_peserta'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Waktu Pelaksanaan</label>
							<input type="date" class="form-control" name="waktu" placeholder="Masukkan Waktu Pelaksanaan" value="<?php echo $data_prestasi['waktu_pelaksanaan'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Bukti Sertifikat</label>
                            <img src="/Assets/Sertifikat_Prestasi/<?php echo $data_prestasi['bukti_sertif'];?>" width="100%">
							<input type="file" class="form-control" name="bukti_sertif" value="<?php echo $data_prestasi['bukti_sertif'];?>" >
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Bukti Kegiatan</label>
                            <img src="/Assets/Kegiatan_Prestasi/<?php echo $data_prestasi['bukti_kegiatan'];?>" width="100%">
							<input type="file" class="form-control" name="bukti_kegiatan" value="<?php echo $data_prestasi['bukti_kegiatan'];?>" >
						</div>
						<div style="clear:both;"></div>
						
						<div class="form-group col-md-6">
							<button type="submit" class="btn btn-primary">Update</button>
							<a href="<?php echo base_url('user/master-prestasi');?>"><button type="button" class="btn btn-danger">Batal</button></a>
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