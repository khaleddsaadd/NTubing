<?php
require_once(__ROOT__ . "model/EventsModel.php");
require_once(__ROOT__ . "controller/EventsController.php");
require_once(__ROOT__ . "view/EventsView.php");
$img = __ROOT__.'/view/Images/tubes.png';

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
    .indexText
    {
    font-family: Hind;
    font-style: normal;
    font-weight: normal;
    font-size: 80px;
    line-height: 154px;
    display: flex;
    align-items: center;
    letter-spacing: -0.017em;
    color: #1F3351;
    padding-left: 14%;
    padding-top: 14%;
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
        box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2)
    }
    .OfferEventText
    {
        position: absolute;
        font-family: 'Hind';
        font-size: 30px;
        left:5%;
        top:4%;
        color: #1F3351;
    }
    .all
    {
        padding-left:22%;
        padding-top:18%;
    }
    .Name
    {
        color:#1F3351;
        font-size:20px;
        font-weight:bolder;
        font-family='Hind';


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
        box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2)
        
    }
    .oimg
    {
        width:100%;
        height:300px;
    }
    .bookoffer
    {
        
    }

</style>