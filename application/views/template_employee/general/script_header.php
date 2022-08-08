<head>
	<base href="">
	<meta charset="utf-8" />
	<title>SIAP | Sekolah Utsman</title>
	<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="canonical" href="https://keenthemes.com/metronic" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendors Styles(used by this page)-->
	<link href="<?php echo base_url(); ?>assets/employee/dist/assets/css/pages/wizard/wizard-2.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/employee/dist/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendors Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="<?php echo base_url(); ?>assets/employee/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/employee/dist/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/employee/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/employee/dist/assets/css/pages/fonts/dropify.css" rel="stylesheet" type="text/css" />

	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<link href="<?php echo base_url(); ?>assets/employee/dist/assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/employee/dist/assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/employee/dist/assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/employee/dist/assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/employee/dist/assets/media/logos/favicon.ico" />
	<style>
		.card-body-2 {
			padding: 2rem 0.25rem;
		}

		#map-canvas {
			width: auto;
			height: 500px;
		}

		.label.label-inline.label-jab {
			padding: 1.5rem 0.75rem;
			font-size: 0.9rem;
		}

		.select2-container {
			box-sizing: border-box;
			display: block;
			margin: 0;
			position: relative;
			vertical-align: middle;
		}

		.select2-container--default .select2-selection--single,
		.select2-container--default .select2-selection--multiple {
			display: flex;
			align-items: center;
			justify-content: space-between;
			border: 1px solid #E4E6EF;
			outline: none !important;
			border-radius: 0.42rem;
			height: auto;
			line-height: 0;
			padding: 0.23rem 0.42rem;
			background: #F3F6F9;
		}

		.select2-container--default .select2-selection--multiple .select2-selection__rendered .select2-selection__choice {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			padding: 0.20rem 0.75rem;
			font-size: 1rem;
			margin: 0.1rem 0.4rem 0.1rem 0;
			position: relative;
			float: left
				/*rtl:right*/
			;
			color: #3F4254;
			background: #ffffff;
			border: 0;
			border-radius: 0.42rem;
		}

		.blockquote {
			margin-bottom: 1rem;
			font-size: 1rem;
		}

		.select2-container--default.select2-container--disabled .select2-selection--multiple,
		.select2-container--default.select2-container--disabled .select2-selection--single {
			cursor: not-allowed;
			background-color: #f3f6f9;
			opacity: 1;
		}

		.dropdown-menu>li>a,
		.dropdown-menu>.dropdown-item {
			outline: none !important;
			display: block;
			flex-grow: 1;
		}

		.dataTables_scrollBody::-webkit-scrollbar-track {
			-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
			background-color: #F5F5F5;
			border-radius: 10px;
		}

		.dataTables_scrollBody::-webkit-scrollbar {
			width: 6px;
			background-color: #F5F5F5;
		}

		.dataTables_scrollBody::-webkit-scrollbar-thumb {
			background-color: #777;
			border-radius: 10px;
		}

		.table.table-separate th:last-child,
		.table.table-separate td:last-child {
			padding-right: 5px !important;
		}

		.table.table-separate th:first-child,
		.table.table-separate td:first-child {
			padding-left: 5px !important;
		}

		.dropdown-menu>li>a,
		.dropdown-menu>.dropdown-item {
			outline: none !important;
			display: inline-block;
			flex-grow: 1;
		}

		scroller::-webkit-scrollbar {
			display: none;
		}

		.blink-hard {
			animation: blinker 1s step-end infinite;
		}

		@keyframes blinker {
			50% {
				opacity: 0;
			}
		}
	</style>
</head>
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/plugins/global/plugins.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/js/scripts.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/js/dropify.js"></script>
<script src="<?php echo base_url(); ?>assets/employee/dist/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/js/dataTables.checkboxes.min.js"></script>
<!--end::Global Theme Bundle-->
<?php $user = $this->session->userdata('sias-employee'); ?>
<?php $pegawai = $this->db->get_where('pegawai', array('id_pegawai' => $user[0]->id_pegawai))->result(); ?>
<script>
	var STAT_EMP = <?php echo $pegawai[0]->status_update_biodata; ?>
</script>
