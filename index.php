

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="GET">
        <input type="text" label="person" name="person">
        <button type="submit">submit</button>
    </form>

    <?php
        $name = $_GET['person'];
        echo $name." is handsome";
    ?>
    
</body>
</html>