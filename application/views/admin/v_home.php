<?php 
$this->load->view('admin/head');
?>

<!--tambahkan custom css disini-->

<?php
$this->load->view('admin/topbar');
$this->load->view('admin/sidebar');
?>

<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">

    <div class="callout callout-danger">
        <h4>Selamat Datang, <?php echo $this->session->userdata('nama');?> </h4>
        
    </div>

    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Petunjuk Penggunaan</h3>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div style="text-align: center;">
            <h3>GANTI HALAMAN INI PADA FILE v_home.php, v_home_guru.php, dan v_home_siswa.php</h3>
            </div>
    </div>

    <iframe sandbox="allow-forms allow-scripts allow-pointer-lock allow-same-origin" id="iframe1" src="https://www.mycoding.net/" frameborder="1" width="100%" height="400px;" ></iframe>

</section><!-- /.content -->
  
<?php 
$this->load->view('admin/js');
?>

<!--tambahkan custom js disini-->

<script type="text/javascript">

	$(function(){
		$('#data-tables').dataTable();
	});

	$('.alert-message').alert().delay(3000).slideUp('slow');

</script>


<?php
$this->load->view('admin/foot');
?>

