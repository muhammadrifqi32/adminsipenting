<aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url();?>user" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">Cek Kematangan TBS</span>
                            </a>
                            <ul class="collapse first-level">                               
                                <li class="sidebar-item">
                                    <a href="<?php echo base_url();?>user/testingdk" class="sidebar-link">
                                        <i class="mdi mdi-arrange-bring-forward"></i>
                                        <span class="hide-menu"> Dengan Kotak </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo base_url();?>user/testingtk" class="sidebar-link">
                                        <i class="mdi mdi-arrange-bring-forward"></i>
                                        <span class="hide-menu"> Tanpa Kotak </span>
                                    </a>
                                </li>
                            </ul>
                        </li>                                              
                    </ul>
                </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>