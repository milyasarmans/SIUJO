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

    <div class="callout">
        <h3><b>Selamat Datang, <?php echo $this->session->userdata('nama');?></b> </h3>        
    </div>

<div class="box box-solid">
    <div style="background: #064E89;" class="box-header with-border">
        <h3  style="color: #ffff;" class="box-title">Petunjuk Penggunaan</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        <dl>

            <dd>
                <ol>
                    <li><b>Kelola Soal Ujian</b></li>
                    di TAB Kelola Soal Ujian, anda dapat melihat daftar soal ujian, dengan memfilter mata pelajaran apa yang ingin ada lihat. dan anda bisa menambah, edit, dan hapus mata pelajaran dan menambah data pelaran sesuai mata pelajaran anda 
                    <li><b>Ganti Password</b></li>
                    di TAB Ganti Password, anda dapat mengganti password sesuai keinginan anda setelah anda mendapatkan password default dari pihak administrator. ketika anda lupa password, anda dapat menghubungi pihak administrator agar mendapatkan password terbaru.
                </ol>
            </dd>
            
        </dl>
    </div><!-- /.box-body -->
</div>



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

