<?php  
$nama = $_REQUEST['nama'];
if ($nama!='') {
	echo "Data tidak ditemukan";
} else {
		echo '<li><a style="text-decoration: none;color: black;" href="matakuliah.html">ANALISA DAN PERANCANGAN SISTEM</a></li>
			<li><a style="text-decoration: none;color: black;" href="matakuliah.html">PEMROGRAMAN BERBASIS OBJEK I</a></li>
			<li><a style="text-decoration: none;color: black;" href="matakuliah.html">JARINGAN KOMPUTER</a></li>
			<li><a style="text-decoration: none;color: black;" href="matakuliah.html">PENGANTAR KECERDASAN BUATAN</a></li>
			<li><a style="text-decoration: none;color: black;" href="matakuliah.html">PERANCANGAN WEBSITE</a></li>
			<li><a style="text-decoration: none;color: black;" href="matakuliah.html">ETIKA PROFESI</a></li>
			<li><a style="text-decoration: none;color: black;" href="matakuliah.html">ARSITEKTUR KOMPUTER</a></li>
			<li><a style="text-decoration: none;color: black;" href="matakuliah.html">RISET OPERASI</a></li>
			<li><a style="text-decoration: none;color: black;" href="matakuliah.html">TEORI GRAF</a></li>';
}
// echo "data <b>$nama</b> tidak ditemukan";
?>