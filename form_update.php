<?php include('connect.php'); 
		$id = $_GET['id'];
		$sql = "SELECT * FROM `myguests` WHERE id = '$id' ";
		$result = mysqli_query($conn, $sql);	
?>
<form action="update_customer.php?id=<?=$id;?>" method="post" enctype="multipart/form-data" name="form1">
<table width="100%" border="1">
<?php while($row = mysqli_fetch_array($result)){ ?>
  <tr>
    <td>ชื่อ</td>
    <td>
      <input type="text" name="name" id="name" value="<?=$row['firstname'];?>">
   </td>
  </tr>
  <tr>
    <td>นามสกุล</td>
    <td><input type="text" name="lastname" id="lastname" value="<?=$row['lastname'];?>"></td>
  </tr>
  <tr>
    <td>อี เมล</td>
    <td><input type="text" name="email" id="email" value="<?=$row['email'];?>"></td>
  </tr>
</table>
<input name="" type="submit" value="Submit" />
</form>
<?php } ?>
