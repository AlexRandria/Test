<?php session_start();
if(isset($_SESSION['email'])){
?>

<html>
<head>
</head>
<body>
    <pre>
        <?php
            print_r($_POST);
        ?>
    </pre>
    <form action="post.php" method="post">
        <input type="text" name="nom" id="">
        <input type="email" name="email" id="email" pattern=".+@globex.com" size="30" required>
        <input type="submit" value="Envoyer">
    </form>

<?php
}
?>
</body>
</html>