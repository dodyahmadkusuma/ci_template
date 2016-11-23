<div class="main-container ace-save-state" id="main-container" style="background: #8888;">
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {}
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try {
                ace.settings.loadState('sidebar')
            } catch (e) {}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <a class="btn btn-info" style="width: 175px;" href="<?=base_url('home') ?>">
                    <i class="fa fa-truck"></i> View Website
                </a>
            </div>

        </div>
        <!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="active">
                <a href="<?=base_url('admin/')?>">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="<?= base_url('admin') ?>" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i> <span>
              Artikel</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?=base_url('admin/post')?>">
                            <i class="menu-icon fa fa-caret-right"></i> All Artikel
                            <b class="arrow "></b>
                        </a>

                        <b class="arrow"></b>

                        <li class="">
                            <a href="<?=base_url('admin/tambah')?>">
                                <i class="menu-icon fa fa-caret-right"></i> Add Artikel
                            </a>

                            <b class="arrow"></b>
                        </li>

                </ul>

                </li>

        </ul>
        <!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>
