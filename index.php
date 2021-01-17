<!DOCTYPE html>
<html>
<head>
    <title>CAPEN</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link  href="css/admin.css" rel="stylesheet" type="text/css" />
    <link  href="css/form.css" rel="stylesheet" type="text/css" />
    <link  href="css/surat.css" rel="stylesheet" type="text/css" media="screen"/>
    <link  href="css/surat_cetak.css" rel="stylesheet" type="text/css" media="print"/>
    <link  href="css/jquery-ui-1.8.19.custom.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.19.custom.min.js"></script>
    <script type="text/javascript" src="js/buatan_sendiri.js"></script>
</head>
<script type="text/javascript">
$(function(){
	$("ul.nav:not(:first)").fadeOut();
	$("#left-column h3").click(function(){
		$(".nav").fadeOut("slow");
		$(this).next().fadeIn("slow");
		})
	$("#left-column h3").css({"margin-top":"5px","cursor":"pointer"});	
	$("#left-column ul.nav li, #top-navigation li").click(function(){
		var url = $(this).find("a").attr("href");
		// load div center-column dengan url dari anchor tsb
		$("#center-column").html("<div class='loading'>Mohon ditunggu ...</div>")
		.load(url);
		$("li").removeClass("li_terpilih");
		$(this).addClass("li_terpilih");
	//	$(this).css({"background":"#FFFFFF"});
		return false;
		})
})
</script>
<body>
    <div id="main">
        <div id="header">
            <div style="border-bottom:2px solid #FF7600;font-size:3em;font-weight:bolder;color:#FF7600;padding-left:10px;">
				CAPEN
				<span style="font-size:45%;font-style:italic">Catatan Kependudukan</span>
				</div>
		<div id="top-navigation">
			<li><a href="tambah_surat_link.php">Buat Surat</a></li>
            <li><a href="mutasi_masuk.php">Lahir / Masuk</a></li>
            <li><a href="mutasi_keluar.php">Wafat / Keluar</a></li>
            <li><a href="tambah_penduduk.php">Tambah Penduduk</a></li>
            <li><a href="tambah_keluarga.php">Tambah Keluarga</a></li>
            <li><a href="daftar_surat.php">Daftar Surat</a></li>
			<li><a href="daftar_penduduk2.php">Daftar Penduduk</a></li>
            <li><a href="daftar_keluarga.php">Daftar Keluarga</a></li>
            <li><a href="lap_penduduk.php">Laporan</a></li>
            <li><a href="#">Keluar</a></li>
         </div>
       </div>  
       <div id="middle">
            <div id="left-column">
                <h3>Surat</h3>
                <ul class="nav">
                    <li><a href="daftar_surat.php">Daftar Surat</a></li>
                    <li><a href="tambah_surat_link.php">Buat Surat</a></li>
                </ul>
                <h3>Perubahan penduduk</h3>
                <ul class="nav">
                    <li><a href="mutasi_masuk.php">Lahir / Pindah Masuk</a></li>
                    <li><a href="mutasi_keluar.php">Wafat / Pindah Keluar</a></li>
                </ul>
                <h3>Laporan</h3>
                <ul class="nav">
                    <li><a href="lap_penduduk.php">Penduduk</a></li>
                </ul>
                <h3>Data Master</h3>
                <ul class="nav">
                    <li><a href="daftar_penduduk2.php">Daftar Penduduk</a></li>
                    <li><a href="tambah_penduduk.php">Tambah Penduduk</a></li>
                    <li><a href="daftar_keluarga.php">Daftar Keluarga</a></li>
                    <li><a href="tambah_keluarga.php">Tambah Keluarga</a></li>
					<li><a href="">Daftar Petugas</a></li>
					<li><a href="">Tambah Petugas</a></li>
                </ul>
              </div>
            <div id="center-column">   
            </div> 
        </div>
</body>
</html>
<style>
#top-navigation li.li_terpilih,.li_terpilih  {
	background:#FFFFFF;
	font-weight:bold;
	color:#FF8000;
	}	
</style>
