<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin/dashboard-admin');?>"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Persetujuan Prestasi</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-sortable="true">No</th>
                            <th data-sortable="true">Nama Siswa</th>
                            <th data-sortable="true">Kelas Siswa</th>
                            <th data-sortable="true">Jenis Prestasi</th>
                            <th data-sortable="true">Ekstrakurrikuler</th>
                            <th data-sortable="true">Nama Kegiatan</th>
                            <th data-sortable="true">Tingkat</th>
                            <th data-sortable="true">Gelar</th>
                            <th data-sortable="true">Waktu Pelaksanaan</th>
                            <th data-sortable="true">Persetujuan</th>
                            <th data-sortable="true">Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 0;
                        foreach($dataPrestasi as $data){
                        ?>
                        <tr>
                            <td data-sortable="true"><?php echo $no=$no+1;?></td>
                            <td data-sortable="true"><?php echo $data['nama_siswa'];?></td>
                            <td data-sortable="true"><?php echo $data['nama_kelas'];?></td>
                            <td data-sortable="true"><?php echo $data['jenis_prestasi'];?></td>
                            <td data-sortable="true"><?php echo $data['nama_ekskul'];?></td>
                            <td data-sortable="true"><?php echo $data['nama_kegiatan'];?></td>
                            <td data-sortable="true"><?php echo $data['nama_tingkat'];?></td>
                            <td data-sortable="true"><?php echo $data['nama_gelar'];?></td>
                            <td data-sortable="true"><?php echo $data['waktu_pelaksanaan'];?></td>
                            <td data-sortable="true">
                                <?php
                                if($data['persetujuan_wakasek']=="0"){
                                ?>
                                <span style="padding-left:10px; padding-right:10px; background-color:#ffa800; color:#ffffff; border-radius:20px;"><em><b>Menunggu</b></em></span>
                                <?php
                                }
                                elseif($data['persetujuan_wakasek']=="1"){
                                ?>
                                <span style="padding-left:10px; padding-right:10px; background-color:#00ff00; color:#ffffff; border-radius:20px;"><em><b>Diterima</b></em></span>
                                <?php
                                }
                                elseif($data['persetujuan_wakasek']=="2"){
                                ?>
                                <span style="padding-left:10px; padding-right:10px; background-color:#ff0012; color:#ffffff; border-radius:20px;"><em><b>Ditolak</b></em></span>
                                <?php
                                }
                                ?>
                            </td>
                            <td data-sortable="true">
                                <?php
                                if($data['persetujuan_wakasek']=="0" or $data['persetujuan_walikelas']=="0"){
                                ?>
                                <a href="<?= base_url('admin/detail-prestasi')."/".sha1($data['id_prestasi']);?>">
                                    <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-zoom-in"></span></button>
                                </a>
                                <?php }?>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->	
</div>	<!--/.main-->

<script type="text/javascript">
    function doDelete(idDelete) {
        swal({
            title: "Hapus Data Prestasi?",
            text: "Data ini akan terhapus permanen!!",
            icon: "warning",
            buttons: true,
            dangerMode: false,
        })
        .then(ok => {
            if (ok) {
                window.location.href = '<?= base_url() ?>/admin/hapus-prestasi/' + idDelete;
            } else {
                $(this).removeAttr('disabled')
            }
        })
    }
</script>