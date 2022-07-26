<?php $user = $this->session->userdata('sias-employee'); ?>
<?php $kuisioner = $this->db->get_where('kuisioner', array('status_kuisioner' => 1))->result(); ?>
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="#" class="brand-logo">
            <img alt="Logo" src="<?php echo base_url(); ?>assets/employee/dist/assets/media/logos/sekolah_utsman.png" />
        </a>
        <!--end::Logo-->
        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </button>
        <!--end::Toolbar-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li class="menu-item menu-item-submenu <?php echo @$nav_dashboard; ?>" aria-haspopup="true">
                    <a href="<?php echo site_url('employee/dashboard'); ?>" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <?php if ($user[0]->level_jabatan == 0 || $user[0]->level_jabatan == 1) { ?>
                    <li class="menu-section">
                        <h4 class="menu-text">Akademik</h4>
                        <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                    </li>  
                    <?php if ($user[0]->id_jabatan != 27) { ?>
                        <li class="menu-item menu-item-submenu <?php echo @$nav_student_aca; ?>" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                            <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-text">Akademik Siswa</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                    <li class="menu-item <?php echo @$sub_nav_student_aca_cla; ?>" aria-haspopup="true">
                                        <a href="<?php echo site_url('employee/student/academic/list_student_academic_class'); ?>" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Daftar Per Kelas</span>
                                        </a>
                                    </li>                    
                                </ul>
                            </div>
                            <div class="menu-submenu" kt-hidden-height="400" style="">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">

                                    <li class="menu-item menu-item-submenu <?php echo @$nav_student_aca_nxt; ?>" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="javascript:;" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Daftar Keseluruhan</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                        <div class="menu-submenu" kt-hidden-height="240" style="">
                                            <i class="menu-arrow"></i>
                                            <ul class="menu-subnav">
                                                <li class="menu-item <?php echo @$sub_nav_student_aca_all; ?>" aria-haspopup="true">
                                                    <a href="<?php echo site_url('employee/student/student/list_student_all'); ?>" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">Siswa</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item <?php echo @$sub_nav_student_aca_rep; ?>" aria-haspopup="true">
                                                    <a href="<?php echo site_url('employee/student/report/list_student_report_all'); ?>" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">Rapor Siswa</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item <?php echo @$sub_nav_student_aca_pre; ?>" aria-haspopup="true">
                                                    <a href="<?php echo site_url('employee/student/presence/list_student_presence_all'); ?>" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">Absensi Siswa</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>                          
                                </ul>
                            </div>
                        </li>
                    <?php } ?>
                    <li class="menu-item menu-item-submenu <?php echo @$nav_employe_aca; ?>" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                        <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                        <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
                                        <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
                                        <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
                                        <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
                                        <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
                                        <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-text">Akademik Pegawai</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item <?php echo @$sub_nav_employe_aca_per; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/employe/academic/list_employe_academic_all'); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Daftar Per Pegawai</span>
                                    </a>
                                </li>                    
                            </ul>
                        </div>
                        <div class="menu-submenu" kt-hidden-height="400" style="">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu <?php echo @$nav_employe_aca_nxt; ?>" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <i class="menu-bullet menu-bullet-line">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Daftar Keseluruhan</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu" kt-hidden-height="240" style="">
                                        <i class="menu-arrow"></i>
                                        <ul class="menu-subnav">
                                            <li class="menu-item <?php echo @$sub_nav_employe_aca_rep; ?>" aria-haspopup="true">
                                                <a href="<?php echo site_url('employee/employe/report/list_employe_report_all'); ?>" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Penilaian Pegawai</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php echo @$sub_nav_employe_aca_pre; ?>" aria-haspopup="true">                                               
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Absensi Pegawai</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item <?php echo @$sub_nav_employe_aca_pre_day; ?>" aria-haspopup="true">
                                                            <a href="<?php echo site_url('employee/employe/presence/list_employe_presence_all_day'); ?>" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Harian</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item <?php echo @$sub_nav_employe_aca_pre_month; ?>" aria-haspopup="true">
                                                            <a href="<?php echo site_url('employee/employe/presence/list_employe_presence_all_month'); ?>" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Bulanan</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>                          
                            </ul>
                        </div>
                    </li>
                <?php } ?>
                <li class="menu-section">
                    <h4 class="menu-text">Pegawai</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>               

                <li class="menu-item menu-item-submenu <?php echo @$nav_employe_pre; ?>" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Absensi Anda</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item <?php echo @$sub_nav_employe_pre ?>" aria-haspopup="true">
                                <a href="<?php echo site_url('employee/employe/presence/list_employe_presence_personal'); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Histori Absensi</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu <?php echo @$nav_employe_rep; ?>" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Penilaian Pegawai</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item  <?php echo @$sub_nav_employe_rep; ?>" aria-haspopup="true">
                                <a href="<?php echo site_url('employee/employe/report/list_employe_report_personal/' . paramEncrypt($user[0]->id_pegawai)); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Isi Penilaian</span>
                                </a>
                            </li>
                            <?php if ($user[0]->level_jabatan != 0) { ?>
                                <li class="menu-item  <?php echo @$sub_nav_employe_res; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/employe/report/detail_result_questionnaire/' . paramEncrypt($user[0]->id_pegawai)); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Hasil Penilaian Anda</span>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if ($user[0]->id_jabatan == 1 || $user[0]->id_jabatan == 6 || $user[0]->id_jabatan == 11 || $user[0]->id_jabatan == 27) { ?>
                                <li class="menu-item  <?php echo @$sub_nav_employe_que; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/employe/report/configure_questionnaire/' . paramEncrypt(@$kuisioner[0]->id_kuisioner)); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Atur Penilaian Pegawai</span>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
                <?php if ($user[0]->status_wali_kelas == 1) { ?>
                    <li class="menu-item menu-item-submenu <?php echo @$nav_employe_hmtea; ?>" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"/>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-text">Wali Kelas</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                <li class="menu-item <?php echo @$sub_nav_employe_hmtea_das; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/employe/homeroomteacher/dashboard_homeroom_teacher/' . paramEncrypt($user[0]->id_kelas)); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Dashboard Wali Kelas</span>
                                    </a>
                                </li>

                                <li class="menu-item <?php echo @$sub_nav_employe_hmtea_rep; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/employe/homeroomteacher/list_student_homeroom_teacher_report/' . paramEncrypt($user[0]->id_kelas)); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Pengisian Rapor</span>
                                    </a>
                                </li>
                                <li class="menu-item <?php echo @$sub_nav_employe_hmtea_gra; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/employe/homeroomteacher/list_student_homeroom_teacher_grade/' . paramEncrypt($user[0]->id_kelas)); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Kenaikan Siswa</span>
                                    </a>
                                </li>
                                <li class="menu-item <?php echo @$sub_nav_employe_hmtea_pre; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/employe/homeroomteacher/list_student_homeroom_teacher_presence/' . paramEncrypt($user[0]->id_kelas)); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Pengisian Absensi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                <?php } ?>
                <?php if ($user[0]->level_jabatan == 0 || $user[0]->level_jabatan == 1) { ?>
                    <li class="menu-section">
                        <h4 class="menu-text">MASTER</h4>
                        <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                    </li>
                    <?php if ($user[0]->id_jabatan != 27) { ?>
                        <li class="menu-item menu-item-submenu <?php echo @$nav_master_stu; ?>" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                            <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                            <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-text">Siswa</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">

                                    <li class="menu-item <?php echo @$sub_nav_master_stu; ?>" aria-haspopup="true">
                                        <a href="<?php echo site_url('employee/master/student/list_student'); ?>" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Daftar Siswa</span>
                                        </a>
                                    </li>
                                    <li class="menu-item <?php echo @$sub_nav_master_stu_add; ?>" aria-haspopup="true">
                                        <a href="<?php echo site_url('employee/master/student/add_student'); ?>" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Tambah Siswa</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php } ?>
                    <li class="menu-item menu-item-submenu <?php echo @$nav_master_emp; ?>" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-text">Pegawai</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item <?php echo @$sub_nav_master_emp; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/master/employe/list_employe'); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Daftar Pegawai</span>
                                    </a>
                                </li>
                                <li class="menu-item <?php echo @$sub_nav_master_emp_add; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/master/employe/add_employe'); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Tambah Pegawai</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <?php if ($user[0]->id_jabatan != 27) { ?>
                        <li class="menu-item menu-item-submenu <?php echo @$nav_master_cla; ?>" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-text">Kelas</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">

                                    <li class="menu-item <?php echo @$sub_nav_master_cla; ?>" aria-haspopup="true">
                                        <a href="<?php echo site_url('employee/master/classes/list_class'); ?>" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Daftar Kelas</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    <?php } ?>
                <?php } ?>
                <?php if ($user[0]->level_jabatan == 0) { ?>
                    <li class="menu-item menu-item-submenu  <?php echo @$nav_master_grad; ?>" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M18.5,6 C19.3284271,6 20,6.67157288 20,7.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 C17.6715729,20 17,19.3284271 17,18.5 L17,7.5 C17,6.67157288 17.6715729,6 18.5,6 Z M12.5,11 C13.3284271,11 14,11.6715729 14,12.5 L14,18.5 C14,19.3284271 13.3284271,20 12.5,20 C11.6715729,20 11,19.3284271 11,18.5 L11,12.5 C11,11.6715729 11.6715729,11 12.5,11 Z M6.5,15 C7.32842712,15 8,15.6715729 8,16.5 L8,18.5 C8,19.3284271 7.32842712,20 6.5,20 C5.67157288,20 5,19.3284271 5,18.5 L5,16.5 C5,15.6715729 5.67157288,15 6.5,15 Z" fill="#000000"/>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-text">Tingkat</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                <li class="menu-item  <?php echo @$sub_nav_master_grad; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/master/grade/list_grade'); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Daftar Tingkatan</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item menu-item-submenu  <?php echo @$nav_master_pos; ?>" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M8,4 L16,4 C17.1045695,4 18,4.8954305 18,6 L18,17.726765 C18,18.2790497 17.5522847,18.726765 17,18.726765 C16.7498083,18.726765 16.5087052,18.6329798 16.3242754,18.4639191 L12.6757246,15.1194142 C12.2934034,14.7689531 11.7065966,14.7689531 11.3242754,15.1194142 L7.67572463,18.4639191 C7.26860564,18.8371115 6.63603827,18.8096086 6.26284586,18.4024896 C6.09378519,18.2180598 6,17.9769566 6,17.726765 L6,6 C6,4.8954305 6.8954305,4 8,4 Z" fill="#000000"/>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-text">Jabatan</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                <li class="menu-item  <?php echo @$sub_nav_master_pos; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/master/position/list_position'); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Daftar Jabatan</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-submenu <?php echo @$nav_master_scyear; ?>" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
                                        <rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-text">Tahun Ajaran</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">                            
                                <li class="menu-item <?php echo @$sub_nav_master_scyear; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/master/schoolyear/list_schoolyear'); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Daftar Tahun Ajaran</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="menu-item menu-item-submenu <?php echo @$nav_master_ansque; ?>" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero"/>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-text">Kuisioner Penilaian</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item <?php echo @$sub_nav_master_ansque; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/master/questionnaire/list_questionnaire'); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Daftar Kuisioner</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                <?php } ?>
                <?php if ($user[0]->level_jabatan == 0 || $user[0]->level_jabatan == 1) { ?>
                    <?php if ($user[0]->id_jabatan != 27) { ?>   
                        <li class="menu-section">
                            <h4 class="menu-text">Kegiatan</h4>
                            <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                        </li>
        <!--                <li class="menu-item menu-item-submenu <?php echo @$nav_activity_agn; ?>" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#000000"/>
                                            <rect fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4" rx="2"/>
                                        </g>
                                    </svg>
                                    end::Svg Icon
                                </span>
                                <span class="menu-text">Agenda/Acara</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">

                                    <li class="menu-item <?php echo @$sub_nav_activity_agn; ?>" aria-haspopup="true">
                                        <a href="<?php echo site_url('employee/activity/agenda/list_agenda'); ?>" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Daftar Acara</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </li>-->

                        <li class="menu-item menu-item-submenu <?php echo @$nav_activity_dsanoun; ?>" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Files/Pictures1.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M16.3155516,16.1481997 C15.9540268,16.3503696 15.4970619,16.2211868 15.294892,15.859662 C15.0927222,15.4981371 15.2219049,15.0411723 15.5834298,14.8390024 C16.6045379,14.2679841 17.25,13.1909329 17.25,12 C17.25,10.8178416 16.614096,9.74756859 15.6048775,9.17309861 C15.2448979,8.96819005 15.1191879,8.51025767 15.3240965,8.15027801 C15.529005,7.79029835 15.9869374,7.66458838 16.3469171,7.86949694 C17.8200934,8.70806221 18.75,10.2731632 18.75,12 C18.75,13.7396897 17.8061594,15.3146305 16.3155516,16.1481997 Z M16.788778,19.8892305 C16.4155074,20.068791 15.9673493,19.9117581 15.7877887,19.5384876 C15.6082282,19.165217 15.7652611,18.7170589 16.1385317,18.5374983 C18.6312327,17.3383928 20.25,14.815239 20.25,12 C20.25,9.21171818 18.6622363,6.70862302 16.2061077,5.49544344 C15.8347279,5.31200421 15.682372,4.86223455 15.8658113,4.49085479 C16.0492505,4.11947504 16.4990201,3.96711914 16.8703999,4.15055837 C19.8335314,5.61416684 21.75,8.63546229 21.75,12 C21.75,15.3971108 19.7961591,18.4425397 16.788778,19.8892305 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                            <path d="M7,16 L3.60776773,15.3215535 C2.67291934,15.1345839 2,14.3137542 2,13.3603922 L2,10.6396078 C2,9.68624577 2.67291934,8.86541613 3.60776773,8.67844645 L7,8 L10.2928932,4.70710678 C10.6834175,4.31658249 11.3165825,4.31658249 11.7071068,4.70710678 C11.8946432,4.89464316 12,5.14899707 12,5.41421356 L12,18.5857864 C12,19.1380712 11.5522847,19.5857864 11,19.5857864 C10.7347835,19.5857864 10.4804296,19.4804296 10.2928932,19.2928932 L7,16 Z" fill="#000000"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-text">Pengumuman</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                    <li class="menu-item <?php echo @$sub_nav_activity_dsanoun; ?>" aria-haspopup="true">
                                        <a href="<?php echo site_url('employee/activity/announcement/list_announcement'); ?>" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Dashboard Pengumuman</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php } ?>
                <?php } ?>
                <?php if ($user[0]->level_jabatan == 0) { ?>
                    <li class="menu-section">
                        <h4 class="menu-text">Pengaturan</h4>
                        <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                    </li>
                    <li class="menu-item menu-item-submenu  <?php echo @$nav_config; ?>" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-text">Pengaturan</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                <li class="menu-item <?php echo @$sub_nav_config_email; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/configuration/settings/email_configuration'); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Mailer</span>
                                    </a>
                                </li>

                                <li class="menu-item <?php echo @$sub_nav_config_contact; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/configuration/settings/contact_configuration'); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Kontak Web</span>
                                    </a>
                                </li>

                                <li class="menu-item <?php echo @$sub_nav_config_general; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/configuration/settings/general_page_configuration'); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Tampilan Web</span>
                                    </a>
                                </li>
                                <li class="menu-item <?php echo @$sub_nav_config_thridparty; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/configuration/settings/thirdparty_configuration'); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Third Party Key</span>
                                    </a>
                                </li>
                                <li class="menu-item <?php echo @$sub_nav_config_present; ?>" aria-haspopup="true">
                                    <a href="<?php echo site_url('employee/configuration/settings/present_configuration'); ?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Absensi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>