<?php
require 'config.php';
$category = $_GET['category'];
$page = $_GET['page'];
$itemsPerPage = $_GET['itemsPerPage'];
$offset = ($page - 1) * $itemsPerPage;
$query = "SELECT * FROM urls";
if (!empty($category)) {
    $query .= " WHERE category = '$category'";
}
$query .= " LIMIT $offset, $itemsPerPage";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $output = '<table border="1">
                    <tr>
                        <td>#</td>
                        <td>Url</td>
                        <td>Description</td>
                        <td>Category</td>
                        <td>User</td>
                    </tr>';
    $i = $offset + 1; 
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr id='{$row['id']}'>
                        <td>$i</td>
                        <td>{$row['url']}</td>
                        <td>{$row['description']}</td>
                        <td>{$row['category']}</td>
                        <td>{$row['user_id']}</td>
                    </tr>";
        $i++;
    }
    $output .= '</table>';

    echo $output;
} else {
    echo "<p>No URLs found.</p>";
}
mysqli_close($conn);
?>
