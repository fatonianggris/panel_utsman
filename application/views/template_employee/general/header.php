<?php $user = $this->session->userdata('sias-employee'); ?>
<?php $page = $this->db->get_where('general_page', array('id_general_page' => 1))->result(); ?>

<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <ul class="menu-nav">
                    <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-active menu-item-open-dropdown menu-item-hover" data-menu-toggle="click" aria-haspopup="true">
                        <div class="text-dark-75 font-size-h5 font-weight-boldest align-center" id="txt_clock" ></div>           
                    </li>  
                    <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-active menu-item-open-dropdown menu-item-hover" data-menu-toggle="click" aria-haspopup="true">
                        <div class="text-dark-75 font-size-h5 font-weight-boldest align-center" >
                            <?php
                            $mydate = getdate(date("U"));
                            echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
                            ?>
                        </div>
                    </li>  
                </ul>
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::Notifications-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <ul class="menu-nav">
                    <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-active menu-item-open-dropdown menu-item-hover" data-menu-toggle="click" aria-haspopup="true">
                        <div class="text-danger font-size-sm font-weight-bold align-center" >
                            Tekan <b class="font-weight-boldest">CTRL +/-</b> untuk atur tampilan.
                        </div>
                    </li>  
                </ul>
            </div>
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
                                    <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="pulse-ring"></span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                    <form>
                        <!--begin::Header-->
                        <div class="d-flex flex-column pt-10 pb-8 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(<?php echo base_url(); ?>assets/employee/dist/assets/media/misc/bg-1.jpg)">
                            <!--begin::Title-->
                            <h4 class="d-flex flex-center rounded-top">
                                <span class="text-white">User Notifikasi</span>
                                <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">0 Notifikasi</span>
                            </h4>
                            <!--end::Title-->                            
                        </div>
                        <!--end::Header-->
                        <!--begin::Content-->
                        <div class="tab-content">                            
                            <!--begin::Tabpane-->
                            <div class="tab-pane active" id="topbar_notifications_events" role="tabpanel">
                                <!--begin::Nav-->
                                <div class="navi navi-hover scroll my-4" data-scroll="true" data-height="300" data-mobile-height="200">

                                </div>
                                <!--end::Nav-->
                            </div>
                            <!--end::Tabpane-->

                        </div>
                        <!--end::Content-->
                    </form>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Notifications-->

            <!--begin::User-->
            <div class="dropdown ">
                <!--begin::Toggle-->
                <?php
                $words = explode(" ", strip_tags($user[0]->nama_lengkap));
                $limit_word = implode(" ", array_splice($words, 0, 2));
                ?>
                <div class="topbar-item " data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-dropdown btn-outline-success  btn-hover-white d-flex align-items-center btn-lg px-md-2 w-md-auto">
                        <span class="text-muted opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                        <span class="text-dark-75 opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4"><?php echo strtoupper(strtolower($limit_word)); ?></span>
                        <span class="symbol symbol-35">
                            <span class="symbol-label text-success font-size-h5 font-weight-bold bg-success-o-30"><?php echo substr(strtoupper(strtolower($user[0]->nama_lengkap)), 0, 1); ?></span>
                        </span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center p-8 rounded-top">
                        <!--begin::Symbol-->
                        <span class="symbol symbol-50 bg-success">
                            <span class="symbol-label text-white font-size-h1 font-weight-boldest bg-white-o-30"><?php echo substr(strtoupper(strtolower($user[0]->nama_lengkap)), 0, 1); ?></span>
                        </span>
                        <!--end::Symbol-->

                        <!--begin::Text-->
                        <div class="text-dark m-0 flex-grow-1 ml-5 font-weight-bolder font-size-h3"><?php echo strtoupper(strtolower($limit_word)); ?></div>
                        <!--end::Text-->
                    </div>
                    <div class="separator separator-solid"></div>
                    <!--end::Header-->
                    <!--begin::Nav-->
                    <div class="navi navi-spacer-x-0 pt-3">
                        <!--begin::Item-->
                        <a href="<?php echo site_url("employee/settings/account/edit_profile/" . paramEncrypt($user[0]->id_pegawai)); ?>" class="navi-item px-8">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon2-calendar-3 text-success"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">Profil Saya</div>
                                    <div class="text-muted">
                                        <span class="label label-light-danger label-inline font-weight-bold">kilk</span>
                                        untuk melihat dan update profil
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->

                        <!--begin::Footer-->
                        <div class="navi-separator mt-3"></div>
                        <div class="navi-footer px-8 py-5 align-content-end">
                            <a href="<?php echo site_url("employee/auth/logout"); ?>" class="btn btn-light-danger font-weight-bold pull-right"><i class="fa fa-lock"></i>Keluar</a>
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
