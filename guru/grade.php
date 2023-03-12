  <?php
@$nilai1 = $_POST['nilai'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nilai Grade</title>
    </head>
    <body>
 <center><h3> MASUKKAN NILAI PLISS!!!</h3></center>
        <form method="POST">
   <table width="450" border="1" align="center" border color="#0000FF" bgcolor="#00A2E8">
  
      <td><strong>Cak kau masukkan nilai kau</strong></td>
      <td><input name="nilai" type="text" value ="<?php echo $nilai1; ?>"/></br></td> 
      <td><center> <input type="submit" name="submit" value="SUBMIT"/><br/></td></center>
  </table>
  <table width="450" border="1" align="center" border color="#0000FF" bgcolor="#FF9900">
            <td><center><?php
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 >= 0 && $nilai1 <= 70) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = E.  <br> Keterangan = NANGIS KAU NANGIS. ';
            } else if ($nilai1 >= 70 && $nilai1 <= 90) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = B.  <br> Keterangan = MAYAN LAH. ';
            } else if ($nilai1 >= 90 && $nilai1 <= 100) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = A.  <br> Keterangan = MANTAP KALI KAU. ';
            } 
   
   else{
                echo 'Nilai : ' . $nilai1 . ' Jangan Suka-Suka Kau Memasukkan Nilai TU.';
            }
          ?> </td></center> 
        </form>
  </table>
  <center><span class="copy-text">Copyright &copy; 2018 - Ahmad Amin Matondang</span></center>
    </body>
</html>
