<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li class="<?php if($page=="dashboard-user") echo "active"; else echo "";?>"><a href="<?= base_url('user/dashboard-user');?>"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
        <li class="<?php if($page=="master-prestasi" || $page=="edit-prestasi" || $page=="input-prestasi") echo "active"; else echo "";?>"><a href="<?= base_url('user/master-prestasi');?>"><span class="glyphicon glyphicon-briefcase"></span> Data Prestasi</a></li>

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
        <li><a href="<?= base_url('user/logout-sistem');?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
    <div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-user-bootstrap-template/">Medialoot</a></div>
</div><!--/.sidebar-->