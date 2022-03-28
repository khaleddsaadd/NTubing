<?php 
require_once(__ROOT__ . "model/HomeModel.php");
require_once(__ROOT__ . "controller/HomeController.php");
require_once(__ROOT__ . "view/HomeView.php");

$img = __ROOT__.'/view/Images/bbb.jpeg';



?>
<style>
    body, html 
    {
      height: 100%;
    }
    * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 5 -5px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  height:60%
}
#VMP 
{
padding-left:22%
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  #VMP {
    width: 70%;
    display: block;
    margin-bottom: 20px;
    padding-left:0%

  }
}

    .bg { 

      background-image: url("<?php echo $img?>");
      height: 110%; 
      width: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .NTLogo_Header
    {
        width:13%;

    }
    h1
    {
        color: red;
    }
    .body1  
    {
        background-color: red;
         background: #FFFFFF;
    box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2)

    }
    
    .introText
    {
        font-family: Bungee Outline;
        font-style: normal;
        font-weight: normal;
        font-size: 96px;
        color: #FFFFFF;
        
        padding-top: 15%;

    }
    .desc
    {
        padding-left:10%;
        width:100%;
        height: 400px;
        font-family: 'Hind';
        padding-top: 25%;
        padding-right: 10%;
        color: #1F3351;

        font-family: 'Hind';
        font-size: 30px;


    }

    @media screen and (max-width: 600px) {
    .desc {

        font-size: 5px;
        padding-left:0%;
        padding-right: 0%;
        padding-top: 15%;
        height: 280px;
    

  }
}
    #vid
    {
        padding-bottom: 10%;
    }
        /* Responsive columns */
@media screen and (max-width: 600px) {
    #vid {
    width:300px;
    height: 250px;
    padding-bottom: 0%;
    

  }
}

    #row1
    {
        width: 90%;
        padding-left: 10%;
        padding-top: 6%;

    }
    .body1Vid
    {
        padding-left: 10%;   
    }

            /* Responsive columns */
@media screen and (max-width: 600px) {
    .body1Vid {

    padding-left: 0%;   
    

  }
}

    .Timg
    {
        padding-left: 5%;
        width:80%;
        height: 400px;

    }
    #product-grid
    {
        margin-bottom:30px;
        background-color: red;
        width: 80%;
    }
    #body2
    {
        position: absolute;
        width: 90%;
        height:90%;
        left: 10%;
        top: 200%;
    }
    #body2_1
    {
         position: absolute;
        width: 25%;
        height: 70%;
        left:1.5%;

    background: #FFFFFF;
    box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2)

    }
    #body2_2
    {
        position: absolute;
        width: 25%;
        height: 70%;
        left:32%;
       background: #FFFFFF;
    box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2)
    }
    #body2_3
    {
         position: absolute;
        width: 25%;
        height: 70%;
        left:62%;
        background: #FFFFFF;
    box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2)
    }
    .body2_titles
    {margin-top: 10%;
        font-family: 'Hind';
        font-size: 18px;
        font-weight: bold;
    }
    .body2_content
    { margin-left: 7% ;
        margin-right:10%;
        font-family: 'Hind';
        font-size: 15px;
        color: #CCA203;
        height: 400px;
    }

    #Footer 
{
    position: absolute;
    width:100%;
    height:40%; 
    top:250%;
    left: 0%;
    background-color : #1F3351;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  #Footer {
    width: 100%;
    display: block;
    margin-bottom: 20px;
    top:400%

  
  }
}
#NTLogo
{
    position: absolute;
    width:10%;
    height:50%;
    left:4%;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
#NTLogo {
    width:30%;
    height:50%;
    left:10%;

  }
}

.footer_Div_Left
{
    margin-top: 10%;
    margin-left: 5%;
    width: 20%;
    top:73%;
    left:5%;
}
.footer_Text_Left
{ position: absolute;

    color: white;
    font-family: 'Hind';

}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .footer_Text_Left {
  padding-top:22%;
  padding-left:9%;

  }
}

#locImg
{
    position:absolute;
    width:20%;
    height:90%;
    left:61%;
    top:-15%;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
#locImg {
    width:50%;
    height:80%;
    left:52%;
    top:-7%;
    

  }
}
.footer_Div_Right
{
    position:absolute;
    left:73%;
    top:27%;
}
.footer_Text_Right
{
    color:white;
    font-family: 'Hind';
    
}

/* Responsive columns */
@media screen and (max-width: 600px) {
.footer_Text_Right {
  padding-top:60%;
  

  }
}

#Footer2
{
    position: absolute;

    background-color: #F1D158;
    width:100%;
    height: 7%; 
    top: 290%;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  #Footer2 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
    top:440%;

  }
}
.socialLogo
{ 
    width:100%;
    height:100%;
   
}
ul.social 
{ 
    margin: 0;
    padding: 0;
    width: 100%;
    text-align: center;
}
ul.social > li
{
display: inline-block;
}

ul.social > li > a 
{ 
display: inline-block;
font-size: 18px;
line-height: 100%;
width: 30px;
height: 30px;
border-radius: 50%;
background-color: #1F3351;
color: #fff;
margin: 0 10px 10px 0;
}

ul.social > li > a:hover 
{
text-decoration: none;
background-color: #ee7c22;
}
.socialmedia
{
    position: relative;

   
    top:15%;
    /*left:1%;*/
}



#i{
    position: relative;
    top: 18%;
    left: 0%;
}

    .product-item {	float:left;	background: #ffffff;margin:15px 10px;	padding:5px;border:#CCC 1px solid;border-radius:4px;}
    .product-item div{text-align:center;	margin:10px;}
</style>
