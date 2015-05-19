<?php
$output = $_POST['nama'];
$csrdata = $_POST['CSR'];

$file = "C:/xampp/htdocs/sign/" . $output .".crt";

$cacert = file_get_contents("C:/xampp/htdocs/sign/ca/ca.crt");

$privkey = array(file_get_contents("C:/xampp/htdocs/sign/ca/ca.key"), "fandazky23");

$usercert = openssl_csr_sign($csrdata, $cacert, $privkey, 365);

openssl_x509_export($usercert, $certout) and var_dump($certout);
openssl_pkey_export($privkey, $pkeyout, "fandazky23") and var_dump($pkeyout);
echo $certout;

while (($e = openssl_error_string()) !== false) {
    echo $e . "\n";
}

openssl_x509_export_to_file($usercert, $file, FALSE);
?>
