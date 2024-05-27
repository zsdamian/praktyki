<?php
$host = "mysql";
$username = "root";
$password = "root";
$dbname = "praktyki";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

$response = array('success' => false, 'message' => '');

if(isset($_POST['id']) && !empty($_POST['id']) && 
   isset($_POST['author']) && !empty($_POST['author']) && 
   isset($_POST['content']) && !empty($_POST['content']) && 
   isset($_POST['rating']) && !empty($_POST['rating'])) {

    try {
        $sql = "INSERT INTO Comment (product_id, author, content, stars) VALUES (:id, :author, :content, :rating)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $_POST['id']);
        $stmt->bindParam(':author', $_POST['author']);
        $stmt->bindParam(':content', $_POST['content']);
        $stmt->bindParam(':rating', $_POST['rating']);

        if($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = "Dodano Komentarz";
        }
    } catch(PDOException $e) {
        $response['message'] = "Error: " . $e->getMessage();
    }
} else {
    $response['message'] = "Wszystkie pola są wymagane";
}

header('Content-Type: application/json');
echo json_encode($response);
?>
