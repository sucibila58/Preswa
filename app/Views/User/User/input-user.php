<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
			<li>Master Data User</li>
			<li class="active">Input Data User</li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Input User</h3>
					<hr />
					<form action="<?php echo base_url('user/simpan-user');?>" method="post">
						<div class="form-group col-md-6">
							<label>Nama User</label>
							<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama User" required="required">
						</div>
						<div style="clear:both;"></div>

						<div class="form-group col-md-6">
							<label>Username User</label>
							<input type="text" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyz_ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',this)" name="username" placeholder="Masukkan Username Pengguna" required="required">
						</div>
						<div style="clear:both;"></div>

						<div class="form-group col-md-6">
							<label>Akses Level</label>
							<select class="form-control" name="level" required="required">
								<option value="">-- Pilih Level --</option>
								<option value="2">Siswa</option>
							</select>
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