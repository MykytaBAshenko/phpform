<?php 
session_start();
include "lang/lang.php";

?>

    <?php include  "header.php" ?>

    <form id="loginform" action="signin.php" method="post">
        <label><?php echo $lang["loginlabel"] ?></label>
        <input type="text" id="login" name="login" placeholder="<?php echo $lang["loginplaceholder"] ?>">
        <label ><?php echo $lang["passwordlabel"] ?></label>
        <input type="password" id="pass" name="password" placeholder="<?php echo $lang["passwordplaceholder"] ?>">
        <button type="submit"><?php echo $lang["signin"] ?></button>
        <p class="vopros"><?php echo $lang["Don'thave"] ?><a href="/register.php"><?php echo $lang["signup"] ?></a>!</p>
        <?php echo '<p id="errmsg">';
            if ($_SESSION['message']) {
                echo $_SESSION['message'];
            }
            unset($_SESSION['message']);
            echo '</p>';
        ?>
        <?php echo '<p id="successmsg">';
            if ($_SESSION['message_success']) {
                echo $_SESSION['message_success'];
            }
            unset($_SESSION['message_success']);
            echo '</p>';
        ?>
    </form>
    <script>
        var lang = "<?php echo $_SESSION['lang'];?>"
    </script>
    <script src="js/loginscript.js"></script>
</body>
</html>