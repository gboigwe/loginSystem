<?php
    require "./header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <?php
                    if (isset($_SESSION['userId'])) {
                        echo '<p class="login-status">You are logged in!</p>';
                        exit();
                    }
                    else if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyfields") {
                            echo '<p style="font-size:40px;color:red;">Fil in all fields to Login</p>';
                            exit();
                        }
                        else if ($_GET['error'] == "wrongpassword") {
                            echo '<p style="font-size:40px;color:red;">Wrong Password <br> Please Try Again</p>';
                            exit();
                        }
                        else if ($_GET['error'] == "nouser") {
                            echo '<p style="font-size:40px;color:red;">Wrong Username or Password <br> Please Try Again</p>';
                            exit();
                        }
                    }
                    else {
                        echo '<p class="login-status">You are logged out!</p>';
                        exit();
                    }
                ?>
            </section>
        </div>
    </main>

<?php
    require "./footer.php";
?>