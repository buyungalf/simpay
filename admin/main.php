<?php
include "../lib/config.php";
session_start();
if(empty($_SESSION['username']) && empty($_SESSION['passuser'])){
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else {
    include "template/header.php";
    include "template/sidebar.php";
    
    if ($_GET['pages'] == 'home') {
        include "pages/home/home.php";
    } elseif ($_GET['pages'] == 'anak_asuh') {
        include "pages/anak_asuh/anak_asuh.php";
    } elseif ($_GET['pages'] == 'form_anak_asuh') {
        include "pages/anak_asuh/form_tambah.php";
    } elseif ($_GET['pages'] == 'form_edit_anak_asuh') {
    	include "pages/anak_asuh/form_edit.php";
    } elseif ($_GET['pages'] == 'laporan_anak_asuh') {
        include "pages/anak_asuh/laporan.php";

    } elseif ($_GET['pages'] == 'orangtua') {
    	include "pages/orangtua/orangtua.php";
    } elseif ($_GET['pages'] == 'form_orangtua') {
    	include "pages/orangtua/form_tambah.php";
    } elseif ($_GET['pages'] == 'form_edit_orangtua') {
    	include "pages/orangtua/form_edit.php";
    } elseif ($_GET['pages'] == 'laporan_orangtua') {
        include "pages/orangtua/laporan.php";

    } elseif ($_GET['pages'] == 'kegiatan') {
        include "pages/kegiatan/kegiatan.php";
    } elseif ($_GET['pages'] == 'form_kegiatan') {
        include "pages/kegiatan/form_tambah.php";
    } elseif ($_GET['pages'] == 'form_edit_kegiatan') {
        include "pages/kegiatan/form_edit.php";
    } elseif ($_GET['pages'] == 'laporan_kegiatan') {
        include "pages/kegiatan/laporan.php";

    } elseif ($_GET['pages'] == 'donatur') {
        include "pages/donatur/donatur.php";
    } elseif ($_GET['pages'] == 'form_donatur') {
        include "pages/donatur/form_tambah.php";
    } elseif ($_GET['pages'] == 'form_edit_donatur') {
        include "pages/donatur/form_edit.php";
    } elseif ($_GET['pages'] == 'laporan_donatur') {
        include "pages/donatur/laporan.php";

    } elseif ($_GET['pages'] == 'donasi') {
        include "pages/donasi/donasi.php";
    } elseif ($_GET['pages'] == 'form_donasi') {
        include "pages/donasi/form_tambah.php";
    } elseif ($_GET['pages'] == 'form_edit_donasi') {
        include "pages/donasi/form_edit.php";
    } elseif ($_GET['pages'] == 'laporan_donasi') {
        include "pages/donasi/laporan.php";

    } elseif ($_GET['pages'] == 'galeri') {
        include "pages/galeri/galeri.php";
    } elseif ($_GET['pages'] == 'form_galeri') {
        include "pages/galeri/form_tambah.php";
    } elseif ($_GET['pages'] == 'form_edit_galeri') {
        include "pages/galeri/form_edit.php";

    } elseif ($_GET['pages'] == 'keuangan') {
        include "pages/keuangan/keuangan.php";
    } elseif ($_GET['pages'] == 'form_keuangan') {
        include "pages/keuangan/form_tambah.php";
    } elseif ($_GET['pages'] == 'form_edit_keuangan') {
        include "pages/keuangan/form_edit.php";  
    } elseif ($_GET['pages'] == 'laporan_keuangan') {
        include "pages/keuangan/laporan.php";

    } else {
        include "pages/home/home.php";
    }
    //include "pages/home.php";
    include "template/footer.php";
}

?>           
