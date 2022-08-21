<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li class="<?php if($page=="dashboard-admin") echo "active"; else echo "";?>"><a href="<?= base_url('admin/dashboard-admin');?>"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
        <?php
        if(session()->get('ses_level')=="1"){
        ?>
        <li class="<?php if($page=="master-admin" || $page=="edit-admin" || $page=="input-admin") echo "active"; else echo "";?>"><a href="<?= base_url('admin/master-admin');?>"><span class="glyphicon glyphicon-user"></span> Master Data Admin</a></li>
        <li class="<?php if($page=="master-siswa" || $page=="edit-siswa" || $page=="input-siswa") echo "active"; else echo "";?>"><a href="<?= base_url('admin/master-siswa');?>"><span class="glyphicon glyphicon-user"></span> Master Data Siswa</a></li>
        <li class="<?php if($page=="master-guru" || $page=="edit-guru" || $page=="input-guru") echo "active"; else echo "";?>"><a href="<?= base_url('admin/master-guru');?>"><span class="glyphicon glyphicon-user"></span> Master Data Guru</a></li>
        <li class="<?php if($page=="master-kelas" || $page=="edit-kelas" || $page=="input-kelas") echo "active"; else echo "";?>"><a href="<?= base_url('admin/master-kelas');?>"><span class="glyphicon glyphicon-briefcase"></span> Master Data Kelas</a></li>
        <li class="<?php if($page=="master-ekskul" || $page=="edit-ekskul" || $page=="input-ekskul") echo "active"; else echo "";?>"><a href="<?= base_url('admin/master-ekskul');?>"><span class="glyphicon glyphicon-flash"></span> Master Data Ekskul</a></li>
        <li class="<?php if($page=="master-prestasi" || $page=="cetak-laporan") echo "active"; else echo "";?>"><a href="<?= base_url('admin/master-prestasi');?>"><span class="glyphicon glyphicon-list-alt"></span> Pelaporan Prestasi</a></li>
        <?php
        }

        if(session()->get('ses_level')=="2"){
        ?>
        <li class="<?php if($page=="master-acc-prestasi" || $page=="detail-acc-prestasi") echo "active"; else echo "";?>"><a href="<?= base_url('admin/master-acc-prestasi');?>"><span class="glyphicon glyphicon-check"></span> Persetujuan Prestasi</a></li>
        <li class="<?php if($page=="master-prestasi" || $page=="cetak-laporan") echo "active"; else echo "";?>"><a href="<?= base_url('admin/master-prestasi');?>"><span class="glyphicon glyphicon-list-alt"></span> Pelaporan Prestasi</a></li>
        <?php
        }

        if(session()->get('ses_level')=="3"){
        ?>
        <li class="<?php if($page=="master-acc-prestasi" || $page=="detail-acc-prestasi") echo "active"; else echo "";?>"><a href="<?= base_url('admin/master-acc-prestasi');?>"><span class="glyphicon glyphicon-check"></span> Persetujuan Prestasi</a></li>
        <?php } ?>
        <!-- <li><a href="charts.html"><span class="glyphicon glyphicon-stats"></span> Charts</a></li>
        <li><a href="tables.html"><span class="glyphicon glyphicon-list-alt"></span> Tables</a></li>
        <li><a href="forms.html"><span class="glyphicon glyphicon-pencil"></span> Forms</a></li>
        <li><a href="panels.html"><span class="glyphicon glyphicon-info-sign"></span> Alerts &amp; Panels</a></li>
        <li class="parent ">
            <a href="#">
                <span class="glyphicon glyphicon-list"></span> Dropdown <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="" href="#">
                        <span class="glyphicon glyphicon-share-alt"></span> Sub Item 1
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <span class="glyphicon glyphicon-share-alt"></span> Sub Item 2
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <span class="glyphicon glyphicon-share-alt"></span> Sub Item 3
                    </a>
                </li>
            </ul>
        </li> -->
        <li role="presentation" class="divider"></li>
        <li><a href="<?= base_url('admin/logout-sistem');?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
</div><!--/.sidebar-->