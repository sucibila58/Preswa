<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Master Data User</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="<?= base_url('user/input-user');?>">
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data Baru</button>
                    </a>
                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-sortable="true">No</th>
                            <th data-sortable="true">Nama User</th>
                            <th data-sortable="true">Username User</th>
                            <th data-sortable="true">Akses Level</th>
                            <th data-sortable="true">Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 0;
                        foreach($dataUser as $data){
                        ?>
                        <tr>
                            <td data-sortable="true"><?php echo $no=$no+1;?></td>
                            <td data-sortable="true"><?php echo $data['nama_user'];?></td>
                            <td data-sortable="true"><?php echo $data['username_user'];?></td>
                            <td data-sortable="true"><?php echo $data['akses_level'];?></td>
                            <td data-sortable="true">
                                <a href="<?= base_url('user/edit-user')."/".sha1($data['id_user']);?>">
                                    <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                                </a>

                                <a href="#" onclick="doDelete('<?= sha1($data['id_user']);?>')">
                                    <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</button>
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
            title: "Hapus Data User?",
            text: "Data ini akan terhapus permanen!!",
            icon: "warning",
            buttons: true,
            dangerMode: false,
        })
        .then(ok => {
            if (ok) {
                window.location.href = '<?= base_url() ?>/user/hapus-user/' + idDelete;
            } else {
                $(this).removeAttr('disabled')
            }
        })
    }
</script>