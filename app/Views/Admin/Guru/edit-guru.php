<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?= base_url('admin/dashboard-admin');?>"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="<?= base_url('admin/master-guru');?>">Master Data Guru</a></li>
			<li class="active">Edit Data Guru</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Edit Guru</h3>
					<hr />
					<form action="<?php echo base_url('admin/update-guru');?>" method="post">
                        <div class="form-group col-md-6">
							<label>NIP Guru</label>
							<input type="text" class="form-control" name="nip" placeholder="Masukkan NIP Guru" value="<?php echo $data_guru['nip_guru'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

						<div class="form-group col-md-6">
							<label>Nama Guru</label>
							<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Guru" value="<?php echo $data_guru['nama_guru'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Kontak Guru</label>
							<input type="text" class="form-control" name="kontak" placeholder="Masukkan Kontak Guru" value="<?php echo $data_guru['kontak_guru'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-6">
							<label>Status Jabatan</label>
							<input type="text" class="form-control" name="status" placeholder="Masukkan Status Jabatan" value="<?php echo $data_guru['status_jabatan'];?>" required="required">
						</div>
						<div style="clear:both;"></div>
						
						<div class="form-group col-md-6">
							<button type="submit" class="btn btn-primary">Update</button>
							<a href="<?php echo base_url('admin/master-guru');?>"><button type="button" class="btn btn-danger">Batal</button></a>
						</div>
						<div style="clear:both;"></div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>