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
                    <li><b>Data Guru</b></li>
                    di laman Data Guru, anda dapat melihat daftar guru, menambahkan, edit, dan hapus data guru 
                    <li><b>Data Siswa</b></li>
                    di laman Data Siswa, anda dapat melihat daftar siswa, menambahkan, edit, dan hapus data siswa 
                    <li><b>Kelola Soal Ujian</b></li>
                    di laman  Kelola Soal Ujian, anda dapat melihat daftar soal ujian, dengan memfilter mata pelajaran apa yang ingin ada lihat. dan anda bisa menambah, edit, dan hapus mata pelajaran dan menambah data pelajaran sesuai mata pelajaran anda 
                    <li><b>Kelola Peserta Ujian</b></li>
                    di laman  Kelola Peserta Soal Ujian, anda dapat melihat daftar soal ujian, anda bisa menambah, edit, dan hapus peserta ujian dan menambah data jenis ujian anda 
                    <li><b>Hasil Ujian</b></li>
                    di laman  Hasil Ujian, anda dapat melihat daftar hasil ujian,  dengan memfilter mata pelajaran apa yang ingin ada lihat.
                    <li><b>Ganti Password</b></li>
                    di laman Ganti Password, anda dapat mengganti password sesuai keinginan anda.
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

