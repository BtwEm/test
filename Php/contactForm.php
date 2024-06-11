<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question us!</title>
    <link rel="stylesheet" href="../Styles/contactFormStyle.css">
</head>
<body>
    <?php
        require_once("header.php")
    ?>
    <div class="formContainer footer-contact">
        <h2>Kontakta oss</h2> 
        <form action="">
            <label for="">Namn</label>
            <input type="text">
            <label for="">E-post</label>
            <input type="email">
            <label for="">Ämne</label>
            <input type="text">
            <label for="">Meddelande</label>
            <textarea name="" id="" cols="15" rows="5"></textarea>
            <input type="submit">
        </form>
    </div>

    <?php 
      require_once("footer.php")
    ?>
</body>
</html>