<?php
session_start();
include "lang/lang.php";
if (!$_SESSION['user']) {
    header('Location: profile.php');
}
?>

<?php include_once 'header.php' ?>


<form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2><?php echo $lang['fullname']?>: <?= $_SESSION['user']['full_name'] ?></h2>
        <h2><?php echo $lang['email']?>: <?= $_SESSION['user']['email'] ?></h2>
        <h2><?php echo $lang['login']?>: <?= $_SESSION['user']['login'] ?></h2>
        <h2><?php echo $lang['country']?>: <?= $_SESSION['user']['country'] ?> </h2>
        <h2><?php echo $lang['phone']?>: <?= $_SESSION['user']['phone'] ?> </h2>
        <a class="infoa" href="logout.php" class="logout"><?php echo $lang['logout']?></a>
        <a class="infoa" href="newinfo.php"><?php echo $lang['changeinfo']?></a>
    </form>

</body>
</html>

