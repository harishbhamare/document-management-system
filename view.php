<<<<<<< HEAD
<?php
include "db.php";
$result = $conn->query("SELECT * FROM documents ORDER BY uploaded_on DESC");
echo "<h2>Uploaded Files</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<a href='uploads/{$row['filename']}' target='_blank'>{$row['filename']}</a><br>";
}
?>



=======
<?php
include "db.php";
$result = $conn->query("SELECT * FROM documents ORDER BY uploaded_on DESC");
echo "<h2>Uploaded Files</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<a href='uploads/{$row['filename']}' target='_blank'>{$row['filename']}</a><br>";
}
?>



>>>>>>> df16311 (Initial commit: uploaded base files for document management system)
