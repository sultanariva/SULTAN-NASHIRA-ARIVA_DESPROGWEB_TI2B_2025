<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp  = $_FILES['files']['tmp_name'][$key];

        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "$file_name memiliki ekstensi tidak valid.";
            continue;
        }

        if ($file_size > 2097152) {
            $errors[] = "$file_name melebihi ukuran maksimal (2MB).";
            continue;
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "images/" . $file_name);
            echo "$file_name berhasil diunggah.<br>";
        }
    }

    if (!empty($errors)) {
        echo "<br><b>Beberapa file gagal diunggah:</b><br>";
        echo implode("<br>", $errors);
    }
}
?>