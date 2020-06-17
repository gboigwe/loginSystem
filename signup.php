<?php
    require "./header.php";
?>

    <main>
        <div>
            <section class="section-default">
                <div style="text-align:center;">
                    <form class="form-signup" action="./includes/signup.inc.php" method="post">
                        <h1 style="margin-top: 40px;text-align:center;">Signup</h1>
                        <?php
                            if (isset($_GET['error'])) {
                                if ($_GET['error'] == "emptyfields") {
                                    echo '<p style="color:red;">Fill in all fields!</p>';
                                }
                                else if ($_GET['error'] == "invalidmailuid") {
                                    echo '<p style="color:red;">Invalid username and email!</p>';
                                }
                                else if ($_GET['error'] == "invalidmail") {
                                    echo '<p style="color:red;">Invalid username!</p>';
                                }
                                else if ($_GET['error'] == "invaliduid") {
                                    echo '<p style="color:red;">Invalid e-mail!</p>';
                                }
                                else if ($_GET['error'] == "passwordcheck") {
                                    echo '<p style="color:red;">Your password do not match!</p>';
                                }
                                else if ($_GET['error'] == "usertaken") {
                                    echo '<p style="color:red;">Username is already taken!</p>';
                                }
                            }
                            else if (isset($_GET['signup'])) {
                                if ($_GET['signup'] == "success") {
                                    echo '<p style="color:green;">Signup succesful!</p>';
                                }
                                else {
                                    echo '<p style="color:red;">Try signing up again <br> An error occured</p>';
                                }
                            }
                            else {
                                echo '<p style="color:blue;">Signup To have an account with us</p>';
                            }
                ?>
                        <input type="text" name="uid" placeholder="Username" class="email"> <br>
                        <input type="text" name="mail" placeholder="E-mail" class="email"> <br>
                        <input type="password" name="pwd" placeholder="Password" class="email"> <br>
                        <input type="password" name="pwd-repeat" placeholder="Repeat-Password" class="email"> <br>
                        <button type="submit" name="signup-submit" class="signup-submit">Signup</button>
                    </form>
                </div>
            </section>
        </div>
    </main>

<?php
    require "./footer.php";
?>