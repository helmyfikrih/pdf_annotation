<?php
if (!empty($_POST['data'])) {
    $data = base64_decode($_POST['data']);
    // print_r($data);
    file_put_contents("test.pdf", $data);
} else {
    echo "No Data Sent";
}
exit();
