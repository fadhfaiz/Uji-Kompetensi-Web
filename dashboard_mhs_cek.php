<?php 


require_once('header.php');
require('controller.php'); 
?>

<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-right">
        <div class="uk-container">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a class="uk-text-bold uk-text-left uk-text-danger" href="dashboard_mhs.php">Back</a></li>
                <li class="uk-active"><a class="uk-text-bold">Dashboard Mahasiswa</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="uk-container">
    <p class="uk-text-bold uk-text-large uk-margin-medium-top">Hasil KRS</p>
</div>
<div class="uk-container uk-margin-small-top">
    <form>
        <table class="uk-table uk-table-divider uk-table-small">
            <thead>
                <tr>
                    <th class="uk-text-center">Kode Kuliah</th>
                    <th class="uk-text-center">Matakuliah</th>
                    <th class="uk-text-center">Kelas</th>
                    <th class="uk-text-center">Dosen Pengampu</th>
                    <th class="uk-text-center">Semester</th>
                    <th class="uk-text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="uk-text-center">MK02</td>
                    <td class="uk-text-center">Logika Informatika</td>
                    <td class="uk-text-center">A</td>
                    <td class="uk-text-left">Muhammad Azis</td>
                    <td class="uk-text-center">1</td>
                    <td class="uk-text-center">
                    <a href="#" uk-icon="folder" class=""></a>
                    <a href="#" uk-icon="trash" class="uk-margin-small-left"></a>
                    </td>
                </tr>
                <tr>
                    <td class="uk-text-center">MK03</td>
                    <td class="uk-text-center">Pemrograman Web</td>
                    <td class="uk-text-center">B</td>
                    <td class="uk-text-left">Fiftin Noviyanto</td>
                    <td class="uk-text-center">2</td>
                    <td class="uk-text-center">
                    <a href="#" uk-icon="folder" class=""></a>
                    <a href="#" uk-icon="trash" class="uk-margin-small-left"></a>
                    </td>
                </tr>
            </tbody>
        </table>

        <button class="uk-button uk-button-link uk-align-center uk-margin-medium-top uk-text-bold"
            onclick="window.print()">Cetak Hasil KRS</button>
    </form>
</div>

<?php require_once('footer.php'); ?>