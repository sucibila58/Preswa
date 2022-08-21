<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?= base_url('admin/dashboard-admin')?>"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="<?= base_url('admin/master-prestasi')?>">Pelaporan Prestasi</a></li>
			<li class="active">Cetak Laporan</li>
		</ol>
	</div><!--/.row-->

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
			    <h3>Cetak Laporan </h3>
			    <hr />
				<form action="<?php echo base_url('admin/cetak-laporan-prestasi');?>" target="_blank" method="post">
					<!--div class="form-group col-md-6">
						<label>Pilih Kelas</label>
						<select class="select2 form-control" name="kelas" required="required">
							<option value="">--- Kelas ---</option>
							<!--?php
							foreach($dataKelas as $dataKelas){
							?>
							<option value="<!--?= $dataKelas['id_kelas'];?>"><!--?= $dataKelas['nama_kelas'];?></option>
							<!--?php } ?>
						</select>
					</div>
					<div style="clear:both;"></div-->

					<div class="form-group col-md-6">
						<label>Pilih Jenis prestasi</label>
						<select class="select2 form-control" name="jenis_prestasi" required="required">
							<option value="">--- Jenis Prestasi ---</option>
							<?php
							foreach($dataPrestasi as $dataPrestasi){
							?>
							<option value="<?= $dataPrestasi['jenis_prestasi'];?>"><?= $dataPrestasi['jenis_prestasi'];?></option>
							<?php } ?>
						</select>
					</div>
					<div style="clear:both;"></div>

					<div class="form-group col-md-6">
                        <label>Tanggal Awal</label>
                        <input type="date" class="form-control" name="tgl_awal" placeholder="yyyy-mm-dd" value="<?= date('Y-m-d');?>" required="required">
                    </div>
                    <div style="clear:both;"></div>

                    <div class="form-group col-md-6">
                        <label>Tanggal Akhir</label>
                        <input type="date" class="form-control" name="tgl_akhir" placeholder="yyyy-mm-dd" value="<?= date('Y-m-d');?>" required="required">
                    </div>
                    <div style="clear:both;"></div>
                    
                    <div class="form-group col-md-6">
	                    <button type="submit" class="btn btn-primary">Cetak Laporan</button>
						<button type="reset" class="btn btn-danger">Batal</button>
					</div>
					<div style="clear:both;"></div>
				</form>
			</div>
		</div>
	</div>
</div><!--/.row-->

</div>