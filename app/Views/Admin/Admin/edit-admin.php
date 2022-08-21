<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?= base_url('admin/dashboard-admin');?>"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href ="<?= base_url('admin/master-admin');?>">Master Data Admin</a></li>
			<li class="active">Edit Data Admin</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Edit Admin</h3>
					<hr />
					<form action="<?php echo base_url('admin/update-admin');?>" method="post">
						<div class="form-group col-md-6">
							<label>Nama Admin</label>
							<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Admin" value="<?php echo $data_admin['nama_admin'];?>" required="required">
						</div>
						<div style="clear:both;"></div>

						<div class="form-group col-md-6">
							<label>Username Admin</label>
							<input type="text" class="form-control" value="<?php echo $data_admin['username_admin'];?>" readonly="readonly" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyz-_ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',this)" name="username" placeholder="Masukkan Username Pengguna" required="required">
						</div>
						<div style="clear:both;"></div>
						
						<div class="form-group col-md-6">
							<label>Akses Level</label>
							<select class="form-control" name="level" required="required">
								<option value="">-- Pilih Level --</option>
								<option value="2" <?php if($data_admin['akses_level']=="2"){ echo "selected"; }else echo "";?>>Wakasek</option>
								<option value="3" <?php if($data_admin['akses_level']=="3"){ echo "selected"; }else echo "";?>>Wali Kelas</option>
							</select>
						</div>
						<div style="clear:both;"></div>
						
						<div class="form-group col-md-6">
							<button type="submit" class="btn btn-primary">Update</button>
							<a href="<?php echo base_url('admin/master-admin');?>"><button type="button" class="btn btn-danger">Batal</button></a>
						</div>
						<div style="clear:both;"></div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>