<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Bungee Outline' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet'>
        <title>Rides</title>
<?php include 'NavBoot/index.html';?>
</head>


<?php 

include 'CSS/RideCSS.php';
   
class rideView
{
	
    public function output($model,$revmodal)
    {
        $rideinfo = $model->RideInfos($model->rideID);
		$reviews = $revmodal->Reviews($model->rideID);
		$list="";
		foreach ($rideinfo as $row) {
			
			$list.='<option value="'.$row->rideDate.'/'.$row->rideTime.'">'.$row->rideDate.' / '.$row->rideTime.' --- '.$row->currentCapacity.' Tubes Left</option>
		';}
		$review="<ul>";
		foreach ($reviews as $rev) {
			$review.='<li><label style="color:#1F3351;">'.$rev->Name.'</label>: <label style="font-weight:bolder;">'.$rev->Review.'</label></li>';
		}
		$review.='</ul>';

        $str='
		<div class="row" id="body1">
		<div class="column" id="body1_left">
		<p id="price">'.$model->Price.' EGP</p>
		<p id="per">per person</p>
		<p id="date"> Ride Date/Time - Remaining capacity</p>
		<form action="checkout.php?id='.$model->rideID.'" method="post">
		<div class="">
		<select id="" name="rideDate">
			'.$list.'</select>
		</div>
		<p class="persons">Persons</p>
		<div class="quantity">
		<input type="number"  class="form-control" id="k" value="1" name="quantity" min="1"  required>
		</div>
		<p id="">'.$model->currentCapacity.'</p>
	
		<div class="">
		<button class="submit-btn" name="book">Ride now</button>
			</div>
		</form>
		
		</div>

		
		<div class="column" id="body1_right">
		<h1>'.$model->Name.'</h1>
		<p id="des">'.$model->Description.'</p>
		</div>
	  </div>
	  <div id="rev-all">
	  <center>
		<div id="rev-div">
		<h1 id="rev-text">Reviews</h1>
		<form action="Ride.php?id='.$model->rideID.'" method="POST">
			<input type="text" id="name" name="name" placeholder="Write your name" required=""><br><br>
			<input type="text" id="rev-box" name="rev-box" placeholder="Write your review"required=""><br><br>
			<button class="submit-btn" name="rev-sub" id="rev-sub">Send</button>
		</div>
		</form>

		</center>
	
	  </div>
	  <div>
	  <h1 style="font-size:30px;">Previous Reviews </h1>
	  <div>'.$review.'
	  </div>
	  </div>


	  
	



';
        
        
        return $str;
    }
    
  
    
}
?>

