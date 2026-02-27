<?php
$message = "";

if (isset($_FILES['image'])) {

    $file = $_FILES['image'];

    if ($file['error'] === 0) {

        if ($file['size'] < 2000000) {

            $allowed = ['jpg', 'jpeg', 'png', 'gif'];
            $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

            if (in_array($ext, $allowed)) {

                if (!is_dir("uploads")) {
                    mkdir("uploads");
                }

                $newName = time() . "_" . $file['name'];
                $path = "uploads/" . $newName;

                if (move_uploaded_file($file['tmp_name'], $path)) {
                    $message = "Uploaded successfully!";
                } else {
                    $message = "Upload failed.";
                }

            } else {
                $message = "Only JPG, JPEG, PNG, GIF allowed.";
            }

        } else {
            $message = "File too large (Max 2MB).";
        }

    } else {
        $message = "Upload error.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Upload</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        height: 100vh;
        background: linear-gradient(135deg, #4e73df, #1cc88a);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card {
        background: #ffffff;
        width: 400px;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        text-align: center;
    }

    .card h2 {
        margin-bottom: 20px;
        color: #333;
    }

    input[type="file"] {
        margin: 15px 0;
        padding: 8px;
        width: 100%;
        border: 1px solid #ddd;
        border-radius: 6px;
    }

    button {
        background: #4e73df;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 15px;
        transition: 0.3s;
    }

    button:hover {
        background: #2e59d9;
    }

    .message {
        margin-top: 15px;
        font-weight: bold;
        color: #444;
    }
</style>

</head>
<body>

<div class="card">
    <h2>Upload Image</h2>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Upload</button>
    </form>

    <?php if ($message): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>
</div>

</body>
</html>