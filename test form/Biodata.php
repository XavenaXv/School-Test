<!DOCTYPE html>


<html>
  <head>
    <title>Biodata Form</title>
  </head>
  <body>
    <h1>Biodata Form</h1>
    <form action="submit-biodata.php" method="post">
      <label for="nis">NIS</label>
      <input type="text" id="nis" name="nis" required><br><br>
      
      <label for="nama">nama</label>
      <input type="text" id="nama" name="nama" required><br><br>

      <label for="gender">Jenis Klamen:</label>
      <input type="radio" id="male" name="gender" value="Lanang" required>
      <label for="male">Lanang</label>
      <input type="radio" id="female" name="gender" value="Wedok">
      <label for="female">Wedok</label>s
      <br>
      
      <label for="birth-date">ttl:</label>
      <input type="text" id="ttl" name="ttl" required>
      <input type="date" id="birth-date" name="birth-date" required><br><br>
            
      <label for="address">Alamat:</label>
      <textarea id="address" name="address" required></textarea><br><br>
      

      <label for="kelas">Kelas:</label>
      <select id="kelas" name="kelas">
        <?php
          $kelas = array("10", "11", "12",);
          foreach ($kelas as $kelas) {
            echo "<option value='$kelas'>$kelas</option>";
          }
        ?>
      </select>

      <select id="komp" name="komp">
        <?php
          $komp = array("RPL", "TKJ", "MEKA",);
          foreach ($komp as $komp) {
            echo "<option value='$komp'>$komp</option>";
          }
        ?>
      </select>



      <input type="submit" value="Submit">
    </form>
  </body>

