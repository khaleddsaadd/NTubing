<?php
require_once(__ROOT__ . "model/EventsModel.php");
require_once(__ROOT__ . "controller/EventsController.php");
require_once(__ROOT__ . "view/EventsView.php");
$img = __ROOT__.'/view/Images/tubes1.png';
$img2 = __ROOT__.'/view/Images/tubesMobile.png';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    .indexBG
    {
     background-image: url("<?php echo $img?>");
      height: 100%; 
        width: 100%;
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      
    }

            /* Responsive columns */
@media screen and (max-width: 600px) {
    .indexBG {
        background-image: url("<?php echo $img2?>");
      height: 100%; 
        width: 100%;
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
        width: 100%; 
        
        
  }
}
    .indexText
    {
    font-family: Hind;
    font-style: normal;
    font-weight: normal;
    font-size: 100px;
  
    display: flex;
    align-items: center;
    letter-spacing: -0.017em;
    color: #1F3351;
    padding-left: 14%;
    padding-top: 14%;
    }

        /* Responsive columns */
@media screen and (max-width: 600px) {
    .indexText {
        font-size: 60px;
        padding-top: 25%; 
        
        
  }
}
    #body5
    {
        width: 70%;
        background-color: red;
        left: 15%;
        right: 20%;
        top:120%;
        position: absolute;
        background: #FFFFFF;
        box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2);
       
        
    }
    /* Responsive columns */
@media screen and (max-width: 600px) {
  #body5 {
   position: absolute;
     
  }
}
    .OfferEventText
    {
        position: absolute;
        
        font-family: 'Hind';
        font-size: 50px;
        left:5%;
        top:4%;
        color: #1F3351;
    }
        /* Responsive columns */
@media screen and (max-width: 600px) {
    .OfferEventText {
        font-size: 30px;
    width: 300px;
    height:205%;   
    text-align: center;
    left:0%;
    top:2%;
  }
}
    .all
    {
        padding: left 20px;%;
        padding-top:18%;
        
    }
            /* Responsive columns */
@media screen and (max-width: 600px) {
    .all {
        padding-left:0%;
        padding-top:35%;
        
        
  }
}


    .Name
    {
        color:#1F3351;
        font-size:20px;
        font-weight:bolder;
        font-family='Hind';


    }

                    /* Responsive columns */
@media screen and (max-width: 600px) {
    .Name {
        font-size:21px;
    
        
  }
}
    .p 
    {
        color:#1F3351;
        font-size:17px;
        font-weight:bolder;
        font-family='Hind';
    }


    .sd
    {
        color:#1F3351;
        font-size:17px;
        font-weight:bolder;
        font-family='Hind';
    }
                            /* Responsive columns */
@media screen and (max-width: 600px) {
    .sd {
        font-size:10px;
        padding-top:2%;
    
        
  }
}
    .t 
    {
        color:#1F3351;
        font-size:17px;
        font-weight:bolder;
        font-family='Hind';
    }
    .imgdiv
    {
    }
    .oneOffer 
    {
        background-color:blue;
        width:70%;
        background: #FFFFFF;
        box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2);
        
        
    }
    .oimg
    {
        width:70%;
        height:400px;
    }

                /* Responsive columns */
@media screen and (max-width: 600px) {
    .oimg {
        width:100%;
        height:250px;
        
        
  }
}

    .bookoffer
    {
        
    }

</style>