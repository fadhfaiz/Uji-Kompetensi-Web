<?php require_once('header.php'); ?>
<?php require_once('controller.php'); ?>

<div class="uk-container">
<div class="uk-grid uk-margin-xlarge-top">
        <div class="uk-width-1-3"></div>
        <div class="uk-width-1-3">
                <form action="index.php" method="post">
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend">Portal UAD</legend>
                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="NIM / NIY" name="uname" required>
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input" type="password" placeholder="Password" name="password" required>
                        </div>
                    </fieldset>
                    <p class="uk-text-small uk-text-center">*Belum terdaftar? hubungi Tata Usaha UAD</p>
                    <button class="uk-button uk-button-primary uk-align-center uk-width-1-2" type="submit">Login</button>
                </form>
        </div>
        <div class="uk-width-1-3"></div>
    </div>
</div>

<?php
    session_start();
    session_destroy();
    session_start();

    if(isset($_POST['uname'])) {
        $user = $_POST['uname'];
        $pass = $_POST['password'];
        
        $uname = array('mhs', 'tu');
        $password = array('mhs','tu');

        // echo md5($password);

        $index = array_search($user, $uname);
        
        if($index > -1) {
            if($index == 0) {
                if($pass == $password[$index]) {
                    $_SESSION['role'] = 'mahasiswa';
                    header('location:dashboard_mhs.php');
                }
            } else {
                if($pass == $password[$index]) {
                    $_SESSION['role'] = 'tu';
                    header('location:dashboard_tu.php');
                }
            }

        }
    }
?>
<?php require_once('footer.php'); ?>