<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$uploaddir = __DIR__ . '/' . 'ufiles' . '/';
$uploadfile = $uploaddir . basename($_FILES['ufile']['name']);

if (is_dir($uploaddir) && is_writable($uploaddir)) {
  if (move_uploaded_file($_FILES['ufile']['tmp_name'], $uploadfile)) {
      $out = "Successfully uploaded.\n";
  } else {
      $out = "Something went wrong!\n";
  }
} else {
    echo 'Upload directory is not writable, or does not exist.';
}
echo $out;
?>
