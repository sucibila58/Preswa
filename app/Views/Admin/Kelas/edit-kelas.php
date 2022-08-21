<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?= base_url('admin/dashboard-admin');?>"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="<?= base_url('admin/master-kelas');?>">Master Data Kelas</a></li>
			<li class="active">Edit Data Kelas</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Edit Kelas</h3>
					<hr />
					<form action="<?php echo base_url('admin/update-kelas');?>" method="post">
						<div class="form-group col-md-6">
							<label>Level Kelas</label>
							<input type="text" class="form-control" value="<?php echo $data_kelas['level_kelas'];?>" readonly="readonly" name="levelKelas" placeholder="" required="required">
						</div>
						<div style="clear:both;"></div>

						<div class="form-group col-md-6">
							<label>Nama Kelas</label>
							<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Kelas" value="<?php echo $data_kelas['nama_kelas'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

						<div class="form-group col-md-6">
							<label>Wali kelas</label>
							<select class="form-control" name="wali" required="required">
								<option value="">-- Pilih Wali Kelas --</option>
								<?php
								foreach($data_guru as $dataGuru){
									if($data_kelas['id_guru'] == $dataGuru['id_guru']) {
										$sel="selected";
									}
									else{
										$sel="";
									}
								?>
								<option value="<?= $dataGuru['id_guru']; ?>" <?= $sel; ?>><?= $dataGuru['nama_guru']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Kapasitas</label>
							<input type="text" class="form-control" name="kapasitas" placeholder="Masukkan Kapasitas" value="<?php echo $data_kelas['kapasitas'];?>" required="required">
						</div>
						<div style="clear:both;"></div>
						
						<div class="form-group col-md-6">
							<button type="submit" class="btn btn-primary">Update</button>
							<a href="<?php echo base_url('admin/master-kelas');?>"><button type="button" class="btn btn-danger">Batal</button></a>
						</div>
						<div style="clear:both;"></div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>