<?php
// MIME types and limits
$mimeTypes = [
    'jpg' => 'image/jpeg',
    'png' => 'image/png',
    'pdf' => 'application/pdf',
    'txt' => 'text/plain'
];

$fileSizeLimits = [
    'jpg' => 2 * 1048576,
    'png' => 2 * 1048576,
    'pdf' => 5 * 1048576,
    'txt' => 1 * 1048576
];

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fileTypeKey = $_POST['fileType'] ?? '';

    if (isset($_FILES['uploadedFile']) && isset($mimeTypes[$fileTypeKey])) {
        if ($_FILES['uploadedFile']['error'] === 0) {
            $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
            $fileName = $_FILES['uploadedFile']['name'];
            $fileType = mime_content_type($fileTmpPath);
            $fileSize = $_FILES['uploadedFile']['size'];

            if ($fileType === $mimeTypes[$fileTypeKey]) {
                if ($fileSize <= $fileSizeLimits[$fileTypeKey]) {
                    $destination = 'uploads/' . $fileTypeKey . '_' . basename($fileName);

                    if (!is_dir('uploads')) {
                        mkdir('uploads', 0755, true);
                    }

                    if (move_uploaded_file($fileTmpPath, $destination)) {
                        $message = "<p class='success'>Uploaded successfully as $destination</p>";
                    } else {
                        $message = "<p class='error'>Error moving uploaded file.</p>";
                    }
                } else {
                    $maxMB = $fileSizeLimits[$fileTypeKey] / 1048576;
                    $message = "<p class='error'>File too large. Max size for " . strtoupper($fileTypeKey) . " is $maxMB MB.</p>";
                }
            } else {
                $message = "<p class='error'>Invalid file type. Expected " . strtoupper($fileTypeKey) . " file.</p>";
            }
        } else {
            $message = "<p class='error'>Error uploading file.</p>";
        }
    } else {
        $message = "<p class='error'>Invalid form submission.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload Grid</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f2f6fc;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        .message {
            text-align: center;
            margin: 20px 0;
        }

        .success {
            color: green;
            font-weight: bold;
        }

        .error {
            color: red;
            font-weight: bold;
        }

        .upload-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .upload-card {
            border: 1px solid #d0d7de;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9fbff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .upload-card h3 {
            margin-bottom: 15px;
            font-size: 18px;
            color: #34495e;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        input[type="file"] {
            width: 100%;
            padding: 6px;
        }

        input[type="submit"] {
            background-color: #5e2ca5;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #7a42cf;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload Your File</h2>

        <div class="message"><?= $message ?></div>

        <div class="upload-grid">
            <div class="upload-card">
                <h3>JPG Image (Max 2MB)</h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="fileType" value="jpg">
                    <input type="file" name="uploadedFile" accept="image/jpeg" required>
                    <input type="submit" value="Upload JPG">
                </form>
            </div>

            <div class="upload-card">
                <h3>PNG Image (Max 2MB)</h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="fileType" value="png">
                    <input type="file" name="uploadedFile" accept="image/png" required>
                    <input type="submit" value="Upload PNG">
                </form>
            </div>

            <div class="upload-card">
                <h3>PDF Document (Max 5MB)</h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="fileType" value="pdf">
                    <input type="file" name="uploadedFile" accept="application/pdf" required>
                    <input type="submit" value="Upload PDF">
                </form>
            </div>

            <div class="upload-card">
                <h3>TXT File (Max 1MB)</h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="fileType" value="txt">
                    <input type="file" name="uploadedFile" accept=".txt" required>
                    <input type="submit" value="Upload TXT">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
