<?php
    $servername = "localhost";
    $database = "ujikom_lsp";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "<p class='uk-text-center uk-text-lighter'>Terkoneksi database</p>";
    // echo md5($katasandi_mhs);

    if(isset($_POST['namamhs'])) {
        $namamhs = $_POST['namamhs'];
        $nimmhs = $_POST['nimmhs'];
        $tmplahirmhs = $_POST['tmplahirmhs'];
        $tgllahirmhs = $_POST['tgllahirmhs'];
        $alamatmhs = $_POST['alamatmhs'];
        $jurusanmhs = $_POST['jurusanmhs'];
        $tahunmasukmhs = $_POST['tahunmasukmhs'];
        
        $query1 = "INSERT INTO mahasiswa SET nim='$nimmhs', nama='$namamhs', tmpt_lahir='$tmplahirmhs', tgl_lahir='$tgllahirmhs', alamat='$alamatmhs', jurusan='$jurusanmhs', thn_masuk='$tahunmasukmhs' ";
        mysqli_query($conn, $query1);
    }
?>

<?php
    if(isset($_POST['kode_mk'])) {
        $kode_mk = $_POST['kode_mk'];
        $nama_mk = $_POST['nama_mk'];
        $sks_mk = $_POST['sks_mk'];
        $semester_mk = $_POST['semester_mk'];

        $query2 = "INSERT INTO matakuliah SET kode_mk='$kode_mk', nama_mk='$nama_mk', sks_mk='$sks_mk', semester_mk='$semester_mk' ";
        mysqli_query($conn, $query2);
    }
?>

<?php
    if(isset($_POST['nip_dosen'])) {
        $nip_dosen = $_POST['nip_dosen'];
        $nama_dosen = $_POST['nama_dosen'];
        $no_dosen = $_POST['no_dosen'];
        $alamat_dosen = $_POST['alamat_dosen'];

        $query3 = "INSERT INTO dosen SET nip_dosen='$nip_dosen', nama_dosen='$nama_dosen', no_dosen='$no_dosen', alamat_dosen='$alamat_dosen' ";
        mysqli_query($conn, $query3);
    }
?>