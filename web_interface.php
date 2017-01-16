<html>
<head>
    <title>Roman Numeral Generator</title>
</head>
<body>


<form action="" method="post">
    <div style="padding-bottom: 30px">
        <label for="numeric">Numeric</label><br>
        <input type="text" name="numeric" id="numeric" value="" placeholder="Enter a Numeric number (e.g. 328)" style="width: 250px">
    </div>
    <div style="padding-bottom: 30px">
        <label for="roman">Roman</label><br>
        <input type="text" name="roman" id="roman" value="" placeholder="Enter a Roman number (e.g. XIV)" style="width: 250px">
    </div>
    <input type="submit" name="c" value="Convert">
</form>


<?php if (isset($_POST['c'])) : ?>

    <?php require('romans.class.php');
    $converter = new Numbers(); ?>

    <?php if (!empty($_POST['numeric'])) : ?>
        <p>The numeric value <?php echo $_POST['numeric'] ?> equates to <?php echo $converter->generate($_POST['numeric']) ?></p>
    <?php endif ?>

    <?php if (!empty($_POST['roman'])) : ?>
        <p>The roman value <?php echo $_POST['roman'] ?> equates to <?php echo $converter->parse($_POST['roman']) ?></p>
    <?php endif ?>


<?php endif ?>


</body>
</html>
