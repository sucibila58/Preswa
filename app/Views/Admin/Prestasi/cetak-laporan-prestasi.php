<?php
if(session()->get('ses_id')=="" or session()->get('ses_level')=="" or session()->get('ses_namauser')==""){
	session()->setFlashdata('error','Session Habis, Silakan Login!!')
	?>
	<script>
		document.location = "<?= base_url('admin/login');?>";
	</script>
	<?php
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $web_title;?></title>

<link href="/Assets/Backend/css/bootstrap.min.css" rel="stylesheet">
<link href="/Assets/Backend/css/datepicker3.css" rel="stylesheet">
<link href="/Assets/Backend/css/styles.css" rel="stylesheet">
<link href="/Assets/Backend/css/bootstrap-table.css" rel="stylesheet">
<link href="/Assets/Backend/css/sweetalert2.min.css" rel="stylesheet">

<script type="text/javascript">
function getkey(e)
{
if (window.event)
return window.event.keyCode;
else if (e)
return e.which;
else
return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;

keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();

// check goodkeys
if (goods.indexOf(keychar) != -1)
return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
return true;

if (key == 13) {
var i;
for (i = 0; i < field.form.elements.length; i++)
if (field == field.form.elements[i])
break;
i = (i + 1) % field.form.elements.length;
field.form.elements[i].focus();
return false;
};
// else return false
return false;
}
</script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body style="margin:0; padding:0;">
    <script>
        window.print();
    </script>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                <h3 align="center">Laporan Data Prestasi</h3>
                <h4 align="center">SMAN 4 CIBINONG</h4>
                <table border="1" style="border-collapse:collapse 1px;" width="100%">
                        <thead>
                        <tr>
                            <th data-sortable="true">No</th>
                            <th data-sortable="true">Nama Siswa</th>
                            <th data-sortable="true">Kelas</th>
                            <th data-sortable="true">Jenis Prestasi</th>
                            <th data-sortable="true">Ekstrakurrikuler</th>
                            <th data-sortable="true">Nama Kegiatan</th>
                            <th data-sortable="true">Tingkat</th>
                            <th data-sortable="true">Gelar</th>
                            <th data-sortable="true">Waktu Pelaksanaan</th>
                            <th data-sortable="true">Persetujuan</th>
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
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->	

    <script src="/Assets/Backend/js/jquery-1.11.1.min.js"></script>
	<script src="/Assets/Backend/js/bootstrap.min.js"></script>
	<script src="/Assets/Backend/js/chart.min.js"></script>
	<script src="/Assets/Backend/js/chart-data.js"></script>
	<script src="/Assets/Backend/js/easypiechart.js"></script>
	<script src="/Assets/Backend/js/easypiechart-data.js"></script>
	<script src="/Assets/Backend/js/bootstrap-datepicker.js"></script>
    <script src="/Assets/Backend/js/bootstrap-table.js"></script>
    <script src="/Assets/Backend/js/sweetalert2.min.js"></script>
</body>
</html>