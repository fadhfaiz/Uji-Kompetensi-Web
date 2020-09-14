<?php

require "controller.php";

function hapus($nim) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = $nim");
    
    return mysqli_affected_rows($conn);
}

$nim = $_GET["nim"];

if(hapus($nim) > 0) {
    echo "
        <scripts>
            alert('Okay data berhasil dihapus!');
            document.location.href = 'basisdata_tu.php';
        </scripts>
    ";
} else {
    echo "
        <scripts>
            alert('Ops data gagal dihapus!');
            document.location.href = 'basisdata_tu.php';
        </scripts>
    ";
}

?>