<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?= base_url('admin/dashboard-admin');?>"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="<?= base_url('admin/master-ekskul');?>">Master Data Ekskul</a></li>
			<li class="active">Input Data Ekskul</li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Input Ekskul</h3>
					<hr />
					<form action="<?php echo base_url('admin/simpan-ekskul');?>" method="post">
						<div class="form-group col-md-6">
							<label>Nama Ekskul</label>
							<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Ekskul" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Jumlah Siswa</label>
							<input type="text" class="form-control" name="jumlah" placeholder="Masukkan Jumlah Siswa" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Nama Pembina</label>
							<select class="form-control" name="pembina" required="required">
								<option value="">-- Pilih Pembina --</option>
								<?php
								foreach($data_guru as $dataGuru){
								?>
								<option value="<?= $dataGuru['id_guru']; ?>"><?= $dataGuru['nama_guru']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Nama Pelatih</label>
							<input type="text" class="form-control" name="pelatih" placeholder="Masukkan Nama Pelatih" required="required">
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