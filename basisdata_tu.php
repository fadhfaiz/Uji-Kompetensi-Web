<?php 


require_once('header.php');
require('controller.php'); 
?>

<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-right">
        <div class="uk-container">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a class="uk-text-bold uk-text-danger" href="dashboard_tu.php">Back</a></li>
                <li class="uk-active"><a class="uk-text-bold">Dashboard Tata Usaha</a></li>
            </ul>
        </div>
    </div>
</nav>



<div class="uk-container uk-margin-medium-top">
    <table class="uk-table uk-table-hover uk-table-divider uk-table-small">
        <thead>
            <tr>
                <th class="uk-text-center">NIM</th>
                <th class="uk-text-center">Nama</th>
                <th class="uk-text-center">Tempat Lahir</th>
                <th class="uk-text-center">Tanggal Lahir</th>
                <th class="uk-text-center">Alamat</th>
                <th class="uk-text-center">Program Studi</th>
                <th class="uk-text-center">Tahun Masuk</th>
                <th class="uk-text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query_xd = mysqli_query($conn, "SELECT * FROM mahasiswa");
            ?>
            <?php if(mysqli_num_rows($query_xd) > 0) { ?>
            <?php foreach($query_xd as $xd) { ?>
            <tr>
                <td class="uk-text-center"><?php echo $xd["nim"];?></td>
                <td><?php echo $xd["nama"];?></td>
                <td><?php echo $xd["tmpt_lahir"];?></td>
                <td class="uk-text-center"><?php echo $xd["tgl_lahir"];?></td>
                <td><?php echo $xd["alamat"];?></td>
                <td class="uk-text-center"><?php echo $xd["jurusan"];?></td>
                <td class="uk-text-center"><?php echo $xd["thn_masuk"];?></td>
                <td class="uk-text-center">
                    <a href="#modal-update" uk-icon="comments" class="" uk-toggle></a>
                    <a href="delete_data.php?nim=<?php echo $xd["nim"]?>" uk-icon="trash" class="uk-margin-small-left"></a>
                </td>
            </tr>

            <!-- This is the modal -->
            <div id="modal-update" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    <h2 class="uk-modal-title">Update Mahasiswa</h2>
                    <div class="">
                        <form class="uk-form-stacked" method="post">
                            <div class="uk-margin">
                                <label class="uk-form-label uk-text-bold" for="form-stacked-text">Nama Mahasiswa</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="text" name="namamhs" required>
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label uk-text-bold" for="form-stacked-text">NIM Mahasiswa</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="text" name="nimmhs" required>
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label uk-text-bold" for="form-stacked-text">Tempat Lahir</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="text" name="tmplahirmhs" required>
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label uk-text-bold" for="form-stacked-text">Tanggal Lahir</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="date" name="tgllahirmhs" required>
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label uk-text-bold" for="form-stacked-text">Alamat</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="text" name="alamatmhs" required>
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label uk-text-bold" for="form-stacked-text">Jurusan / Program
                                    Studi</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="text" name="jurusanmhs" required>
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label uk-text-bold" for="form-stacked-text">Tahun Masuk</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="text" name="tahunmasukmhs" required>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="uk-text-right">
                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                        <button class="uk-button uk-button-primary" type="button">Save</button>
                    </p>
                </div>
            </div>
            <?php }?>
            <?php }?>
        </tbody>
    </table>
</div>

<?php require_once('footer.php'); ?>