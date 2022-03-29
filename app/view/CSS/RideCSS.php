<?php 
require_once(__ROOT__ . "model/RideModel.php");
require_once(__ROOT__ . "controller/RideController.php");
require_once(__ROOT__ . "view/RideView.php");


?>
<style>
* {
  box-sizing: border-box;
}
.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}	
/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding-left: 200px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
.body{
	background-color: white;
	font-family: Hind;
}
#body1
{
	padding-top:10%;
	padding-left:2%;
}
@media screen and (max-width: 600px) {
  #body1 {
	padding-top:40%;
  }
}
#body1_left
{
	padding-left: 5%;
	background: #FFFFFF;
	box-shadow: 2px 2px 40px rgba(0, 0, 0, 0.15);
	border-radius: 20px;
	width: 40%;
	height: 50%;
	
}
@media screen and (max-width: 600px) {
  #body1_left {
    width: 100%;
  }
}
@media screen and (max-width: 600px) {
  #body1_left{
	  height: 60%;
  }
}
#body1_right
{

}
@media screen and (max-width: 600px) {
  #body1_right{
    width: 100%;
	padding-left:3%;
  }
}
#rec1{
	position: absolute;
width: 35%;
height: 70%;
left: 8%;
top: 20%;

background: #FFFFFF;
box-shadow: 2px 2px 40px rgba(0, 0, 0, 0.15);
border-radius: 20px;}


#price{
font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 36px;
line-height: 58px;
display: flex;
align-items: center;
letter-spacing: -0.017em;

color: #1F3351;}

#per{
font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 14px;
line-height: 22px;
display: flex;
align-items: center;
letter-spacing: -0.017em;

color: #1F3351;

}

#date{

font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 24px;
line-height: 38px;
display: flex;
align-items: center;
letter-spacing: -0.017em;

color: #1F3351;
}

.date{position: absolute;
width: 60%;
height: 10%;
left: 14%;
top: 45%;

background: #EEEFF3;
border-radius: 30px;}

select 
{
	border-radius: 30px;

}
.form-control {
	color: #ebecee;
	border-radius: 400px;
	width: fit-content;
	border: none;

	height: 40px;
	-webkit-box-shadow: none;
	box-shadow: none;
	color: #3e485c;
	font-size: 18px;
}

.persons{


font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 24px;
line-height: 38px;
display: flex;
align-items: center;
letter-spacing: -0.017em;

color: #1F3351;

}


#quantity
{

}

#cap{


}

.sub{
	position: absolute;
width: 135px;
height: 36px;
left: 60%;
top: 85%;
border-radius: 30px;
}
.BookNow
{
    text-decoration: none;
    font-family: 'Hind';
    font-weight: bolder;
    font-size: large;
    padding-left: 30%;
    color: #1F3351;

}

.submit-btn {
	display: inline-block;
	color: #fff;
    background-color: #1A3E92; 
	font-weight: 700;
	padding: 14px 30px;
	border-radius: 400px;
	border: none;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
}
.submit-btn:hover, .submit-btn:focus {
	opacity: 0.3;
}

h1{

font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 75px;
align-items: right;
letter-spacing: -0.017em;

color: #1F3351;
}
@media screen and (max-width: 600px) {
  h1{
	font-size: 40px;
	line-height: 50px;

  }
}
.review{
margin-top:30%;
margin-left:8%;
}
#des{
	
font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 24px;
line-height: 38px;
display: flex;
align-items: center;
letter-spacing: -0.017em;

color: #000000;
}
@media screen and (max-width: 600px) {
  #des{
	font-size: 17px;

  }
}

#rideinfo{
	width: 90%;
	height: 80%;
	margin-top: 2%;
	margin-left: 3%;
}
#avg{
	position: absolute;
width: 300px;
height: 47px;
left: 55%;
top:60%;

font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 36px;
line-height: 58px;
display: flex;
align-items: center;
text-align: center;
letter-spacing: -0.017em;

color: #F1D158;
}

#rec2
{
	position: absolute;
width: 85%;
left: 10%;
top: 110%;
/*margin-left:20px;*/

background: #FFFFFF;
box-shadow: 2px 2px 40px rgba(0, 0, 0, 0.15);
}

#rev-text{

font-family: 'Hind';
font-style: normal;
font-weight: normal;
font-size: 64px;
line-height: 102px;
letter-spacing: -0.017em;

color: #EEBF0F;


}
#rev-all
{
	padding-top:8%;
}
@media screen and (max-width: 600px) {
	#rev-all
{
width:100%;
  }
}
#rev-div
{
	/* background: #EEEFF3; */
	width: 50%;
}
@media screen and (max-width: 600px) {
	#rev-div
{
width:100%;
  }
}
.wrev{
	
background: #EEEFF3;
}

#name{
	
border-radius: 25px;
    border: 2px solid ;
background: #FFFFFF;
box-sizing: border-box;
width:50%;

}

#rev-box{
	
border-radius: 25px;
box-sizing: border-box;
width:50%;
height: 20%;
}

#rev-sub{


}
</style>