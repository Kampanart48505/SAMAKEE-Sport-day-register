<?php
    include_once 'connect/connect.php';

session_start();
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="รายงานผลการลงทะเบียนผ่านระบบออนไลน์.xls"');# ชื่อไฟล์

?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<HTML>
<HEAD>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
</HEAD>

<BODY>
<TABLE BORDER="1"  x:str>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM activity WHERE a_id = '$id'";
		$result = mysqli_query($conn,$sql);
		$row  = mysqli_fetch_array($result);
	}
    

?>
<TR>
  <TD colspan="7">รายงานการลงทะเบียนกีฬา ผ่านระบบออนไลน์ คณะสีสามัคคี โรงเรียนยุพราชวิทยาลัย</TD>
  </TR>
<TR>
  <TD colspan="7">รายชื่อกีฬา <?php echo $row['a_name']; ?></TD>
  </TR>
  <TR>
  <TD colspan="7">ระดับชั้น <?php if($row['a_grade'] == '1'){
      echo 'ม.ต้น';
  }else{
    echo 'ม.ปลาย';
  } ?> </TD>
  </TR>

  <TR>
  <TD colspan="7">จำนวนที่รับ <?php echo $row['a_many']; ?> คน</TD>
  </TR>
<TR>
    <TD align="center" width="90">ที่</TD>
    <TD align="center" width="190">เลขประจำตัว</TD>
    <TD align="center" width="180">ชื่อ - นามสกุล</TD>
        <TD align="center" width="180">ชั้น</TD>
    <TD align="center" width="160">เบอร์โทร</TD>
    <TD align="center" width="160">Line</TD>
    <TD align="center" width="160">Facebook</TD>
  </TR>
<TR>
<?php
$sql2 = "SELECT * FROM register WHERE a_id = '$row[a_id]' ";
$result2 = mysqli_query($conn,$sql2);
$rows = mysqli_num_rows($result2);
$i=0;
while($fetch=mysqli_fetch_array($result2)){

$i++;

$sqlreadstu33 = "SELECT * FROM student WHERE s_id = '$fetch[s_id]'";
								$querystu33 = mysqli_query($conn,$sqlreadstu33);
								
								while($fetchstu33 = mysqli_fetch_array($querystu33)){
									
								
									
									
									
									
								
								
?>

    <TD align="center"><?php echo $i;?></TD>
    <TD align="center"><?php echo $fetchstu33['s_idstudent'];?></TD>
   <TD><?php echo $fetchstu33['s_fname']. $fetchstu33['s_name']. '&nbsp;'. $fetchstu33['s_lname'];?></TD>
   <TD align="center"><?php echo $fetchstu33['s_grade']. '/' .$fetchstu33['s_room']; ?></td>
   <TD align="center"><?php echo $fetchstu33['s_tel'];?></TD>
   <TD align="center"><?php echo $fetchstu33['s_line'];?></TD>
   <TD align="center"><?php echo $fetchstu33['s_facebook'];?></TD>
                
  </TR>
<?php
}
}
?>
</TABLE>
</BODY>
</HTML>