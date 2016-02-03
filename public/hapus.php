<?php
 
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
if ($id <> '') {
//    jalankan perintah hapus data
    mysql_query("DELETE FROM employees WHERE id='$id'");
    echo 'data dengan id = '.$id.' berhasil dihapus';
}
?>