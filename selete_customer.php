<?php
	include('connect.php');
	include('function.php');
	
	$sql 	= " SELECT * FROM `myguests` ";
	$suelt	= mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($suelt) >= '0' ){
		?>
			<table width="100%" >
            	<tr>
                	<td>ID</td>
                    <td>Firstname</td>
                    <td>Lastname</td>
                    <td>E-mail</td>
                    <td>Time</td>
                    <td></td>
                </tr>
                <?php 
					while($row = mysqli_fetch_assoc($suelt)){
				?>
                <tr>
                	<td><?=$row['id'];?></td>
                    <td><?=$row['firstname'];?></td>
                    <td><?=$row['lastname'];?></td>
                    <td><?=$row['email'];?></td>
                    <td><?=$row['reg_date'];?></td>
                    <td>
                    <a href="/test_sqli?paper=update&id=<?=$row['id'];?>">แก้ไข</a>
                    <a href="/test_sqli?paper=delete&id=<?=$row['id'];?>">ลบ</a>		
                    </td>
                </tr>
				<?php } ?>
            </table>
		<?php	
	}

?>

<a href="/test_sqli?paper=ceate">
เพื่มข้อมูล</a>