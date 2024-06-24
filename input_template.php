<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $template_id = $_POST['template_id'];
    
    $imgData = $_FILES['image']['name'];


    try {
        require_once 'includes/dbh.inc.php';
        $query = "INSERT INTO template (template_id, template_image) VALUE(:template_id, :imgData);";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":template_id", $template_id);
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
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="template_id">
        <input type="file" name="image" id="upload">
        <input type="submit" value="upload">
    </form>
</body>
</html>