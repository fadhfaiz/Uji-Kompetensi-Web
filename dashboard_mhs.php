<?php 
session_start();

if($_SESSION['role'] != 'mahasiswa') {
    header('location:index.php');
}

require_once('header.php');
require('controller.php'); 
?>
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-right">
        <div class="uk-container">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a class="uk-text-bold">Dashboard Mahasiswa</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="uk-container">
    <p class="uk-text-bold uk-text-large uk-margin-medium-top">Menu Kartu Rencana Studi</p>
</div>

<?php 
    $queryy = mysqli_query($conn, "SELECT * FROM matakuliah");
?>

<div class="uk-container uk-margin-small-top">
    <form action="dashboard_mhs_cek.php">
        <table class="uk-table uk-table-divider uk-table-small">
            <thead class="uk-dark">
                <tr>
                    <th class="uk-text-center">Ambil/Tidak</th>
                    <th class="uk-text-center">Matakuliah</th>
                    <th class="uk-text-center">Kode Matakuliah</th>
                    <th class="uk-text-center">Kelas</th>
                    <th class="uk-text-center">Semester</th>
                </tr>
            </thead>
            <tbody>
            <?php if(mysqli_num_rows($queryy) > 0) { ?>
            <?php foreach($queryy as $q) { ?>
                <tr>
                    <td class="uk-text-center"><label><input class="uk-checkbox" type="checkbox"></label></td>
                    <td><?php echo $q['nama_mk']; ?></td>
                    <td class="uk-text-center"><?php echo $q['kode_mk']; ?></td>
                    <td class="uk-text-center">
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid uk-align-center">
                            <label><input class="uk-radio" type="radio" name="<?php echo $q['nama_mk']; ?>"> A</label>
                            <label><input class="uk-radio" type="radio" name="<?php echo $q['nama_mk']; ?>"> B</label>
                        </div>
                    </td>
                    <td class="uk-text-center"><?php echo $q['semester_mk']; ?></td>
                </tr>
                <?php }?>
            <?php }?>
            </tbody>
        </table>

        <button class="uk-button uk-button-primary uk-align-right">Submit</button>
        <button class="uk-button uk-button-danger uk-align-right">Cek KRS</button>
    </form>
</div>
<?php require_once('footer.php'); ?>