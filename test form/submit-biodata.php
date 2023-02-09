<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $birthDate = $_POST['birth-date'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $ttl = $_POST['ttl'];
    
    // Insert the biodata into a database or send it via email, etc.
    // ...
    echo $nama;
    echo $nis;
    echo $birthDate;
    echo $gender;
    echo $ttl;
    echo $address;
    echo "Biodata submitted successfully!";
  }
?>
</html>
