<?php 
$cat = filter_input(INPUT_POST, 'cat', FILTER_SANITIZE_STRING); 

$statusMsg = '';
$backlink = ' <a href="form.php">Go back</a>';
// File upload path
$targetDir = "assets/images/gallery/";
$file = glob($targetDir . '*');
$countFile = 0;
if ($file != false) {
  $countFile = count($file);
}
$countFile += 1;

$fileName = basename($_FILES["file"]["name"]);
$extension = explode(".", $_FILES["file"]["name"]);
$targetFilePath = $targetDir . $countFile+1 . "-" .$cat . "." . end($extension);
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
  // Allow certain file formats
  $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
  if (!file_exists($targetFilePath)) {
    if (in_array($fileType, $allowTypes)) {
      // Upload file to server
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
        $statusMsg = "File Uploaded successfully!" . $backlink;
      } else {
        $statusMsg = "Sorry, there was an error uploading your file." . $backlink;
      }
    } else {
      $statusMsg = "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload." . $backlink;
    }
  } else {
    $statusMsg = "The file <b>" . $fileName . "</b> is already exist." . $backlink;
  }
} else {
  $statusMsg = 'Please select a file to upload.' . $backlink;
}
// Display status message
echo $statusMsg;
?>
