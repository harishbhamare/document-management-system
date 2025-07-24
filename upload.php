<<<<<<< HEAD
<?php
include "db.php";
if (isset($_FILES["file"])) {
    $filename = $_FILES["file"]["name"];
    $temp = $_FILES["file"]["tmp_name"];
    move_uploaded_file($temp, "uploads/" . $filename);

    $stmt = $conn->prepare("INSERT INTO documents (filename, uploaded_on) VALUES (?, NOW())");
    $stmt->bind_param("s", $filename);
    $stmt->execute();

    echo "File uploaded!";
}
?>
=======
<?php
include "db.php";
if (isset($_FILES["file"])) {
    $filename = $_FILES["file"]["name"];
    $temp = $_FILES["file"]["tmp_name"];
    move_uploaded_file($temp, "uploads/" . $filename);

    $stmt = $conn->prepare("INSERT INTO documents (filename, uploaded_on) VALUES (?, NOW())");
    $stmt->bind_param("s", $filename);
    $stmt->execute();

    echo "File uploaded!";
}
?>
>>>>>>> df16311 (Initial commit: uploaded base files for document management system)
