<script>var HOST_URL = "<?php echo base_url(); ?>";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = {"breakpoints": {"sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400}, "colors": {"theme": {"base": {"white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32"}, "light": {"white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0"}, "inverse": {"white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff"}}, "gray": {"gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32"}}, "font-family": "Poppins"};</script>
<!--end::Global Config-->
<!--begin::Page Vendors(used by this page)-->
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/js/pages/crud/forms/widgets/select2.js"></script>
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/js/pages/crud/forms/widgets/jquery-mask.js"></script>
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/js/pages/crud/forms/widgets/bootstrap-timepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/js/pages/crud/forms/widgets/bootstrap-maxlength.js"></script>
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/js/pages/crud/file-upload/image-input-emp.js"></script>
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/js/pages/crud/forms/editors/ckeditor-classic.js"></script>
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/js/pages/crud/forms/widgets/bootstrap-switch.js"></script>
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/js/pages/features/miscellaneous/sweetalert2.js"></script>
<script>
    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt_clock').innerHTML = h + ":" + m + ":" + s;
        setTimeout(startTime, 1000);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        };  // add zero in front of numbers < 10
        return i;
    }
</script>
<?php $user = $this->session->userdata('sias-employee'); ?>
<script>
    if (STAT_EMP == 0) {
        Swal.fire({
            title: "Pemberitahuan!",
            text: "Mohon Maaf, Untuk penyesuian data Pegawai sesuai aturan Yayasan, dimohon para Pegawai untuk melakukan UPDATE Biodata & diharapkan untuk MENGGANTI Password demi keamanan. Terima Kasih.",
            icon: "warning",
            buttonsStyling: false,
            allowOutsideClick: false,
            allowEscapeKey: false,
            confirmButtonText: "Update Biodata",
            customClass: {
                confirmButton: "btn button-load font-weight-bold btn-warning"
            }
        }).then((result) => {
            if (result.value) {
                window.location.href = HOST_URL + 'employee/settings/account/edit_profile/<?php echo paramEncrypt($user[0]->id_pegawai); ?>';
            }
        });
    }
</script>


