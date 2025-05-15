<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <?php
    $filename = "sample.txt";

    if (isset($_POST['write'])) {
        $text = $_POST['content'] ?? '';
        if (!empty(trim($text))) {
            file_put_contents($filename, $text);
            echo "<div class='output'><strong>Success:</strong> Text written to file.</div>";
        } else {
            echo "<div class='output'><strong>Error:</strong> Textarea is empty!</div>";
        }
    }

    if (isset($_POST['read'])) {
        if (file_exists($filename)) {
            $data = file_get_contents($filename);
            echo "<div class='output'><strong>File Content:</strong><br><br>" . htmlspecialchars($data) . "</div>";
        } else {
            echo "<div class='output'><strong>Error:</strong> File does not exist!</div>";
        }
    }
  ?>
  <br><a href="index.html">Go Back</a>
</div>
</body>
</html>
