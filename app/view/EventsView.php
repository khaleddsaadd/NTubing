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
require_once(__ROOT__ . "view/View.php");
include 'CSS/EventsCSS.php';

class offerview extends View
{
    function output()
    {
        $allevents =$this->model->All();
        echo '<div class="indexBG"><div class="container-fluid">
        <div class="row">
        <div class= <b-col md="4" offset-md="4">
               <h1 class="indexText" ; style="text-align:center;">Nile Tubing <br> Events</h1>
          </div>
          <div class="col-sm-9 col-md-6">
          </div>
        </div>
      </div></div>';
       
        echo '
        <div id="body5">
            <div class="container-fluid">
                <div class="row">
                    <label id="o" class="OfferEventText">Special Offers </label>';
                    foreach($allevents as $event)
                    {
                        $img = __ROOT__.'/view/Images/'.$event->image.'';
                       
                        echo '<center>
                        <div class="all">
                        <div class="oneOffer">';
                        echo '<div class="imgdiv"><img class="oimg"src="'.$img.'"></div><br>';
                        echo '
                        <center>
                        <label class="Name">'.$event->name.'</label><br>';
                        echo '<label class="p">'.$event->price.' EGP</label><br>';
                        echo '<label class="t">Type: '.$event->type.'</label><br>';
                        echo '<label class="sd">Start Date/Time: '.$event->startDate.'</label><br>';
                        echo '<label class="sd">End Date/Time: '.$event->enddate.'</label><br><br>';
                        echo'<button type="button" class="btn btn-primary">Book now</button>';
                        echo'</center>';
                        echo '<br>';
                        echo'</div>
                        </div>
                        </center>'
                        ;
                    }

                    echo'
                     </div>
                    </div>
                </div>';
             
    }
}
?>
<style>
 
</style>