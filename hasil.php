<?php
    if (isset($_POST['input'])) {
        $nama = $_POST['nama'];
        $nis = $_POST['nomor'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah'];
        $Email = $_POST['Email'];
        $pengajar = $_POST['pengajar'];
        $nilai = $_POST['nilai'];
        echo "nama anda: <b>$nama</b><b>"; 
        echo "nomor nis anda: <b>$nis</b><b>"; 
        echo "alamat anda: <b>$alamat</b><b>"; 
        echo "jenis kelamin anda: <b>$jk</b><b>"; 
        echo "agama anda: <b>$agama</b><b>"; 
        echo "sekolah anda: <b>$sekolah</b><b>"; 
        echo "email anda: <b>$email</b><b>";
        echo "pengajar anda: <b>$pengajar</b><b>";  
        echo "mata pelajaran yang anda sukai:<b>;
            if (isset($_POST['mapel'])) {
                echo "#" . $_POST['mapel'] . "<br>";
        }
         