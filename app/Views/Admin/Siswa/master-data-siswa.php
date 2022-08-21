<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin/dashboard-admin');?>"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Master Data Siswa</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="<?= base_url('admin/input-siswa');?>">
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data Baru</button>
                    </a>
                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-sortable="true">No</th>
                            <th data-sortable="true">NIS Siswa</th>
                            <th data-sortable="true">Nama Siswa</th>
                            <th data-sortable="true">Kelas Siswa</th>
                            <th data-sortable="true">Jenis Kelamin</th>
                            <th data-sortable="true">Alamat Siswa</th>
                            <th data-sortable="true">Tahun Angkatan</th>
                            <th data-sortable="true">Kontak Siswa</th>
                            <th data-sortable="true">Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 0;
                        foreach($dataSiswa as $data){
                        ?>
                        <tr>
                            <td data-sortable="true"><?php echo $no=$no+1;?></td>
                            <td data-sortable="true"><?php echo $data['nis_siswa'];?></td>
                            <td data-sortable="true"><?php echo $data['nama_siswa'];?></td>
                            <td data-sortable="true"><?php echo $data['nama_kelas'];?></td>
                            <td data-sortable="true"><?php echo $data['jenis_kelamin'];?></td>
                            <td data-sortable="true"><?php echo $data['alamat_siswa'];?></td>
                            <td data-sortable="true"><?php echo $data['tahun_angkatan'];?></td>
                            <td data-sortable="true"><?php echo $data['kontak_siswa'];?></td>
                            <td data-sortable="true">
                                <a href="<?= base_url('admin/edit-siswa')."/".sha1($data['nis_siswa']);?>">
                                    <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></button>
                                </a>

                                <a href="#" onclick="doDelete('<?= sha1($data['nis_siswa']);?>')">
                                    <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                                </a>
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
            title: "Hapus Data Siswa?",
            text: "Data ini akan terhapus permanen!!",
            icon: "warning",
            buttons: true,
            dangerMode: false,
        })
        .then(ok => {
            if (ok) {
                window.location.href = '<?= base_url() ?>/admin/hapus-siswa/' + idDelete;
            } else {
                $(this).removeAttr('disabled')
            }
        })
    }
</script>