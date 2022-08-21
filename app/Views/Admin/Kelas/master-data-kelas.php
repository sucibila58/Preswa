<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin/dashboard-admin');?>"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Master Data Kelas</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="<?= base_url('admin/input-kelas');?>">
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data Baru</button>
                    </a>
                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-sortable="true">No</th>
                            <th data-sortable="true">Level</th>
                            <th data-sortable="true">Nama Kelas</th>
                            <th data-sortable="true">Wali Kelas</th>
                            <th data-sortable="true">Kapasitas</th>
                            <th data-sortable="true">Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 0;
                        foreach($dataKelas as $data){
                        ?>
                        <tr>
                            <td data-sortable="true"><?php echo $no=$no+1;?></td>
                            <td data-sortable="true"><?php echo $data['level_kelas'];?></td>
                            <td data-sortable="true"><?php echo $data['nama_kelas'];?></td>
                            <td data-sortable="true"><?php echo $data['nama_guru'];?></td>
                            <td data-sortable="true"><?php echo $data['kapasitas'];?></td>
                            <td data-sortable="true">
                                <a href="<?= base_url('admin/edit-kelas')."/".sha1($data['id_kelas']);?>">
                                    <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></button>
                                </a>

                                <a href="#" onclick="doDelete('<?= sha1($data['id_kelas']);?>')">
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
            title: "Hapus Data Kelas?",
            text: "Data ini akan terhapus permanen!!",
            icon: "warning",
            buttons: true,
            dangerMode: false,
        })
        .then(ok => {
            if (ok) {
                window.location.href = '<?= base_url() ?>/admin/hapus-kelas/' + idDelete;
            } else {
                $(this).removeAttr('disabled')
            }
        })
    }
</script>