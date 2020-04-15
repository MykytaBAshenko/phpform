<?php 
session_start();
include "lang/lang.php";
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>
    <?php include  "header.php" ?>

    <form id="signupform" action="signup.php" method="post" enctype="multipart/form-data">
        <label><?php echo $lang["fullnamelabel"]; ?></label>
        <input id="full_name" type="text" name="full_name" placeholder="<?php echo $lang["fullnameplaceholder"]; ?>">
        <label><?php echo $lang["loginlabel"]; ?></label>
        <input id="login" type="text" name="login" placeholder="<?php echo $lang["loginplaceholder"]; ?>" >
        <label><?php echo $lang["phonelabel"]; ?></label>
        <input id="phone" type="tel" name="phone" placeholder="<?php echo $lang["phoneplaceholder"]; ?>">
        <label><?php echo $lang["emaillabel"]; ?></label>
        <input id="email" type="email" name="email" placeholder="<?php echo $lang["emailplaceholder"]; ?>" >
        <label><?php echo $lang["photolabel"]; ?></label>
        <input id="photo" type="file" class="fileinput" name="avatar" >
        <label><?php echo $lang["countrylabel"]; ?></label>
        <input id="country" type="text" name="country" placeholder="<?php echo $lang["countryplaceholder"]; ?>">
        <label><?php echo $lang["passwordlabel"]; ?></label>
        <input id="password1" type="password" name="password" placeholder="<?php echo $lang["passwordplaceholder"]; ?>">
        <label><?php echo $lang["submitpasswordlabel"]; ?></label>
        <input id="password2" type="password" name="password_confirm" placeholder="<?php echo $lang["submitpasswordplaceholder"]; ?>">
        <button type="submit"><?php echo $lang["signup"]; ?></button>
        <p class="vopros"><?php echo $lang["Alreadyhave"]; ?><a href="/index.php"><?php echo $lang["signin"]; ?></a>!</p>
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
    <script src="js/signupscript.js"></script>
</body>
</html>