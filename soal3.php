<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SELAMAT DATANG!</h1>
    <h2>Terima kasih telah bergabung di Website Kami. Media Belajar Kita semua!</h2>
    <?php 
    $firstname = $_POST["FirstName"];
    $lastname = $_POST["LastName"];
    $fullname = $firstname . ' ' .$lastname;
    $gender = $_POST["gender"];
    $negara = $_POST["negara"];
    $bahasa = $_POST["bahasa"];
    $bio = $_POST["message"];
    

    echo "Nama: $fullname <br>";
    echo "Gender: $gender <br>";
    echo "Negara: $negara <br>";
    echo "Bahasa yang dikuasai: " . (is_array($bahasa) ? implode(", ", $bahasa) : $bahasa);
    echo "<br>";
    echo "Bio: " . $bio;
    
    ?>
</body>
</html>