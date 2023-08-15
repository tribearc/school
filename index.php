<!DOCTYPE html>
<html>
<head>
    <title>HTML File Navigation</title>
</head>
<body>

<h2>List of HTML Files</h2>

<table border="1">
    <tr>
        <th>File Name</th>
        <th>Link</th>
    </tr>
    
    <?php
    $directory = './'; // Change this to the directory path you want to list HTML files from

    // Get a list of all HTML files in the directory
    $htmlFiles = glob($directory . '*.html');

    // Loop through the HTML files and display them in the table
    foreach ($htmlFiles as $file) {
        $fileName = basename($file);
        echo "<tr>";
        echo "<td>{$fileName}</td>";
        echo "<td><a href='{$fileName}'>View</a></td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>