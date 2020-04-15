<?php
    session_start();
    include "lang/lang.php";
    if (!$_SESSION['user']) {
        header('Location: profile.php');
    }
?>
<?php include "header.php" ?>
        <form  action="changeinfo.php" method="post" enctype="multipart/form-data">
            <h2 class="logoform"><?php echo $lang["h2changeinfo"]; ?></h2>
            <label><?php echo $lang["fullnamelabel"]; ?></label>
            <input id="full_name" type="text" name="full_name" placeholder="<?php echo $lang["fullnameplaceholder"]; ?>">
            <label><?php echo $lang["loginlabel"]; ?></label>
            <input id="login" type="text" name="login" placeholder="<?php echo $lang["loginplaceholder"]; ?>" >
            <label><?php echo $lang["phonelabel"]; ?></label>
            <input id="phone" type="tel" name="phone" placeholder="<?php echo $lang["phoneplaceholder"]; ?>"> 
            <label><?php echo $lang['emaillabel']; ?></label>
            <input type="email" name="email" placeholder="<?php echo $lang['emailplaceholder']; ?>" >
            <label><?php echo $lang["photolabel"]; ?></label>
            <input type="file" name="avatar" >
            <input id="country" type="text" name="country" placeholder="<?php echo $lang["countryplaceholder"]; ?>">
            <label><?php echo $lang["passwordlabel"]; ?></label>
            <input id="password" type="password" name="password" placeholder="<?php echo $lang["passwordplaceholder"]; ?>">
            <label><?php echo $lang["submitpasswordlabel"]; ?></label>
            <input id="password_confirm" type="password" name="password_confirm" placeholder="<?php echo $lang["submitpasswordplaceholder"]; ?>">
            <button type="submit"><?php echo $lang["changeinfo"]; ?></button>
            <a class="exit" href="profile.php"><?php echo $lang["backtoprofile"]; ?></a>
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
    </body>
</html>