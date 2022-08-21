<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?= base_url('admin/dashboard');?>"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="<?= base_url('admin/master-kelas');?>">Master Data Kelas</a></li>
			<li class="active">Input Data Kelas</li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Input Kelas</h3>
					<hr />
					<form action="<?php echo base_url('admin/simpan-kelas');?>" method="post">
						<div class="form-group col-md-6">
							<label>Level Kelas</label>
							<select class="form-control" name="levelKelas" required="required">
								<option value="">-- Pilih Level Kelas --</option>
								<option value="X">X</option>
								<option value="XI">XI</option>
								<option value="XII">XII</option>
							</select>
						</div>
						<div style="clear:both;"></div>

						<div class="form-group col-md-6">
							<label>Nama Kelas</label>
							<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Kelas" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Wali Kelas</label>
							<select class="form-control" name="wali" required="required">
								<option value="">-- Pilih Wali Kelas --</option>
								<?php
								foreach($data_guru as $dataGuru){
								?>
								<option value="<?= $dataGuru['id_guru']; ?>"><?= $dataGuru['nama_guru']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Kapasitas</label>
							<input type="text" class="form-control" name="kapasitas" placeholder="Masukkan Kapasitas" required="required">
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