<?php
    include("includes/head.inc");
?>
        <?php
            include("includes/nav.inc");
        ?>
        
            <main>
                <h1>
                    Sign up
                </h1>
                <h4>
                    <b class="required">*</b> means the field must be filled in.
                </h4>
                <br>
                <form action="signup.php" method="post">
                    <table>
                        <tr>
                            <td>
                                Real name: 
                            </td>
                            <td>
                                <input type="text" name="rl_name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email: <b class="required">*</b>
                            </td>
                            <td>
                                <input type="email" name="email" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Username: <b class="required">*</b></td>
                            <td><input type="text" name="username" required></td>
                        </tr>
                        <tr>
                            <td>Password: <b class="required">*</b></td>
                            <td><input type="password" name="password" required></td>
                        </tr>
                        <tr>
                            <td>
                                Confirm password: <b class="required">*</b>
                            </td>
                            <td>
                                <input type="password" name="confirmPassword" required>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <input class="btn btn-secondary" type="submit" value="Sign up">
                </form>
                <?php

                    if (isset($_POST['username'])) {
                        
                            $_rl_name = $_POST['rl_name'];
                            $_email = $_POST['email'];
                            $_username = $_POST['username'];
                            $_password = $_POST['password'];
                            $_confirmPassword = $_POST['confirmPassword'];
    
                            if ($_password != $_confirmPassword) {
                                echo "<p style='color: red;'>Passwords do not match!</p>";
                            }
                            else {
                                echo "<p style='color: lightgreen;'>Success</p>";
                                $_q_add_new_user = "INSERT INTO `users` (`rl_name`, `email`, `username`, `password`) 
                                                    VALUES ('$_rl_name', '$_email', '$_username', '$_confirmPassword')";
                                $_r_add_new_user = mysqli_query($_connection, $_q_add_new_user);
                            }
                        
                    }

                ?>
            </main>



        

        <?php
            include("includes/version.inc");
        ?>
    </body>
</html>