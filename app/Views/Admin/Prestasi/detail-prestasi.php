<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?= base_url('admin/dashboard-admin');?>"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="<?= base_url('admin/master-acc-prestasi');?>">Master Data Prestasi</a></li>
			<li class="active">Detail Data Prestasi</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Detail Prestasi</h3>
					<hr />
                    <div class="col-lg-6">
						<div class="form-group col-md-12">
							<label>Jenis Prestasi</label><br />
                            <?= $dataPrestasi['jenis_prestasi']; ?>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-12">
							<label>Tingkat</label><br />
                            <?= $dataPrestasi['nama_tingkat']; ?>
						</div>
						<div style="clear:both;"></div>

						<div class="form-group col-md-12">
							<label>Bidang</label><br />
                            <?= $dataPrestasi['nama_bidang']; ?>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-12">
							<label>Gelar</label><br />
                            <?= $dataPrestasi['nama_gelar']; ?>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-12">
							<label>Nama Pembina</label><br />
                            <?= $dataPrestasi['nama_pembina'];?>
                        </div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-12">
							<label>Delegasi Ekstrakurrikuler</label><br />
                            <?= $dataPrestasi['nama_ekskul']; ?>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-12">
							<label>Nama Kegiatan</label><br />
                            <?= $dataPrestasi['nama_kegiatan'];?>
                        </div>
						<div style="clear:both;"></div>
                        
                        <div class="form-group col-md-12">
							<label>Tempat</label><br />
                            <?= $dataPrestasi['tempat'];?>
                        </div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-12">
							<label>Provinsi</label><br />
                            <?= $dataPrestasi['nama_provinsi']; ?>
						</div>
						<div style="clear:both;"></div>
                        
                        <div class="form-group col-md-12">
							<label>Kota</label><br />
                            <?= $dataPrestasi['nama_kota']; ?>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-12">
							<label>Penyelenggara</label><br />
                            <?= $dataPrestasi['penyelenggara'];?>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-12">
							<label>Jumlah Sekolah</label><br />
                            <?= $dataPrestasi['jumlah_sekolah'];?>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-12">
							<label>Jumlah Peserta</label><br />
                            <?= $dataPrestasi['jumlah_peserta'];?>
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-12">
							<label>Waktu Pelaksanaan</label><br />
                            <?= $dataPrestasi['waktu_pelaksanaan'];?>
						</div>
						<div style="clear:both;"></div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group col-md-12">
							<label>Bukti Sertifikat</label>
                            <img src="/Assets/Sertifikat_Prestasi/<?php echo $dataPrestasi['bukti_sertif'];?>" width="100%" height="250px">
						</div>
						<div style="clear:both;"></div>

                        <div class="form-group col-md-12">
							<label>Bukti Kegiatan</label>
                            <img src="/Assets/Kegiatan_Prestasi/<?php echo $dataPrestasi['bukti_kegiatan'];?>" width="100%">
						</div>
						<div style="clear:both;"></div>

                        <?php
                        if(session()->get('ses_level')=="2"){
                            $postAct = "update-prestasi-wakasek";
                        }
                        elseif(session()->get('ses_level')=="3"){
                            $postAct = "update-prestasi-walikelas";
                        }
                        ?>
                        <form action="<?php echo base_url('admin/'.$postAct);?>" method="post">
                            <div class="form-group col-md-12">
                                <select class="form-control" name="validasi" required="required">
                                    <option value="">Pilih Validasi</option>
                                    <option value="1">ACC</option>
                                    <option value="2">Tidak ACC</option>
                                </select>
                            </div>
                            <div style="clear:both;"></div>                            
                            
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"> Simpan </button>
                                <a href="<?php echo base_url('admin/master-acc-prestasi');?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"> Batal </button></a>
                            </div>
                            <div style="clear:both;"></div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>