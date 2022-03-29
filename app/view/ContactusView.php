<head>
    <meta charset="utf-8">
    <title> Contact Us </title>  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Outline' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet'>


        <?php include 'NavBoot/index.html';?>
</head>
<?php 
require_once(__ROOT__ . "view/View.php");
include 'CSS/ContactusCSS.php';

class contactV extends view
{

    public function output()
    {
       $str="";
        $str.= '<div class="container">
                    <div class="row">
        
                     <div class="row-md">
                     <div class="indexBG">
                        <h1 id="CU">Contact Us </h1>
                    </div>
                    </div>  
                    </div>
                </div>    
                    ';

                return $str;

    }

    public function form()
    {
        $str="";
        $str.='
<center>
   <div id="formety">
   <form action="" method="POST">
   <div class="form-group">
   <label for="Name">Name</label>
   <input id="name" name="name" class="form-control"  type="text" required>
   <br>

   <label for="Email">Email</label>
   <input id="email" name="email" class="form-control"  type="email" required>
   <br>

   <label for="phone">Phone</label>
   <input id="phone" name="phone" class="form-control" type="text" required>
   <br>

   <label for="message">Message</label>
   <input id="message" name="message" class="form-control" type="text" required>
   <br>

   <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
 </form>
 </div>
</center>
                 ';

                 return $str;


    }

}

?>