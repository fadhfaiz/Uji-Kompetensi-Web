<?php 
// session_start();

// if($_SESSION['role'] != 'tu') {
//     header('location:index.php');
// }

require_once('header.php');
require('controller.php'); 
?>

<?php require_once('header.php'); ?>
<?php require_once('controller.php'); ?>
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-right">
        <div class="uk-container">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a class="uk-text-bold uk-text-primary" href="basisdata_tu.php">Lihat
                        Data</a></li>
                <li class="uk-active"><a class="uk-text-bold">Dashboard Tata Usaha</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="uk-container">

    <div class="uk-grid">

        <div class="uk-width-1-3">
            <p class="uk-text-large uk-text-bold uk-text-left uk-margin-medium-top uk-margin-medium-bottom">Data
                Matakuliah</p>
            <form class="uk-form-stacked" method="post">
                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Kode Matakuliah</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="MK01" name="kode_mk"
                            required>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Nama Matakuliah</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="Data Mining"
                            name="nama_mk" required>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Jumlah SKS</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="3" name="sks_mk"
                            required>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Semester</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="6" name="semester_mk"
                            required>
                    </div>
                </div>

                <button class="uk-button uk-button-primary uk-width-1-2 uk-align-right" type="submit">Submit</button>
            </form>
        </div>

        <div class="uk-width-1-3">
            <p class="uk-text-large uk-text-bold uk-text-left uk-margin-medium-top uk-margin-medium-bottom">Data Dosen
                Pengampu</p>
            <form class="uk-form-stacked" method="post">
                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">NIP/NIY</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="34000570xxx" name="nip_dosen" required>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Nama Dosen</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="Taufik Hidayat" name="nama_dosen" required>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Nomor HP</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="+62821000xxx" name="no_dosen" required>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Alamat</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="Jl Kaliurang" name="alamat_dosen" required>
                    </div>
                </div>

                <button class="uk-button uk-button-primary uk-width-1-2 uk-align-right" type="submit">Submit</button>
            </form>
        </div>

        <div class="uk-width-1-3">
            <p class="uk-text-large uk-text-bold uk-text-left uk-margin-medium-top uk-margin-medium-bottom">Data
                Mahasiswa</p>
            <form class="uk-form-stacked" method="post">
                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Nama Mahasiswa</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="Bambang Pamungkas"
                            name="namamhs" required>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">NIM Mahasiswa</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="1600018xxx"
                            name="nimmhs" required>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Tempat Lahir</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="Kabupaten Bantul"
                            name="tmplahirmhs" required>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Tanggal Lahir</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="date" placeholder="31 Agustus"
                            name="tgllahirmhs" required>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Alamat</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="Jl Parangtritis"
                            name="alamatmhs" required>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Jurusan / Program Studi</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="Matematika"
                            name="jurusanmhs" required>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Tahun Masuk</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="2016"
                            name="tahunmasukmhs" required>
                    </div>
                </div>

                <button class="uk-button uk-button-primary uk-width-1-2 uk-align-right" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>