<?php
//index.php

include"dbconfig.php";

if(isset($_SESSION['id']))
{

$query1 = "SELECT * FROM user_registration where id=".$_SESSION['id']."";
$query="SELECT * FROM booking where booked_by=".$_SESSION['id']."";
$result=select($query);
$result1 = select($query1);

}
else{
  header("location:UserLogin.php");
  
}

function clickMe(){
echo "hiiiiiiiiiiiiii";
}




?>

<!DOCTYPE html>

  <head>
    <title>Utility Service Provider</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://kit.fontawesome.com/8dea007a61.js" crossorigin="anonymous"></script>
    
    
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOM
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>




<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
   <?php include"nav3.php"?>





</br></br></br></br></br></br></br></br></br>
<div class="container-fluid">
<div class="row">
<div class="col-lg-2">
<?php while($p=mysqli_fetch_array($result1))
{extract($p);	
?>
<div style="margin-left:60px">
<img src="images/<?=$picture?>" style="height:100px;  border-radius: 50%;">
 </div>
 <div style="margin-left:30px">

 <h4 style="font-weight:bold;background-color:#299B4F;text-align:center;color:white;font-size:22px"><?=ucwords($first)?>
 </h4>
 </div>
 <?php
}
 ?><div style="margin-left:70px">
 <a href="UserLogout.php"><button class="btn btn-danger pill px-4 py-2"><i class="fas fa-sign-out-alt"></i> Logout</button></a>
 </div>
 </div>


<div class="site-wrap ">
  <div class="unit-5 overlay ">
    <div class="container text-center ">
      <strong><h1><i class="fas fa-arrow-alt-circle-right"></i> My Booking</h1></strong>
    </div>
  </div>  
<br>
 


<div class="col-lg-13 text-center"> 
<div class="modal-content ">

<table class="table table-hover" style="font-size:16px">
	<tr style="font-weight:bold">
    <td><b>Booking Id</b></td>
    <td>Name</td>
<td>Contact Number</td>
<td>Address</td>
<td>Date</td>
<td>Days</td>
<td>Hours</td>
<td>Action</td>
	</tr>
	<?php
	//include"dbconfig.php";
	while($r=mysqli_fetch_array($result))
	{
		extract($r);
	?>
	<td><?=$book_id?></td>
    <td><?=ucwords($first)?></td>
<td><?=$mobile?></td>
<td><?=ucwords($address)?></td>
<td><?=$date?></td>
<td><?=$days?></td>
<td><?=$hours?></td>





      

<?php if($cancel==0 && $status==0){ ?>
  
		
  <td><a href="CancelBooking.php?bid=<?=$book_id?>"><button class="btn pill px-4 py-2 btn-danger del_package" data-status="0"
    onclick="if(confirm('Are you sure you want to cancel the Booking')){window.alert('Booking has been successfully cancelled');}">
    <i class="fas fa-times-circle"></i> Cancel Booking</button></a></td>
				<?php }
				else if($status!=0) { ?>
				<td><a href="CancelBooking.php?bid=<?=$book_id?>"><button class="btn pill px-4 py-2 btn-danger del_package" data-status="0" disabled> Cancel Booking</button></a></td>
				<?php } else { ?>
		
				<td><button class="btn  pill px-4 py-2 btn-success del_package" data-status="1" disabled> Booking Cancelled</button></td>
				<?php } ?>

	
	
	
	
	</tr>
	<?php
	}
	?>
                            </table>
							
							
							
                            </div>
                    </div>




</div>

</div></br></br><br><br><br><br><br>

                    <!-- Modal content-->
      <?php include"footer.php";?>
  
  
</div>  








