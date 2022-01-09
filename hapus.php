<?php
require 'functions.php';

$id = $_GET['id'];

if (hapus($id) > 9) {
    echo "
    <script>
    alert('Data berhasil dihapus.');
    document.location.href - 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert{'Data berhasil dihapus.);
    document.location.href - 'index.php';
    </script>
    ";
}
