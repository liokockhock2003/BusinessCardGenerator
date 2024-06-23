<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $imgData = $_FILES['image'];


    try {
        require_once 'includes/dbh.inc.php';
        $query = "INSERT INTO template (image) VALUE(:imgData);";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":imgData", $imgData);
        $stmt->execute();

    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <form action="" method="POST">
        <input type="file">
    </form>
</body>
</html>