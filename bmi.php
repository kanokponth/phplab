<!DOCTYPE html>
<html>
<head>
	<title>โปรแกรมคำนวณดัชนีมวลกาย</title>
	<style type="text/css">
	#line{
		font-size: 200%;
		margin-top: 90px;
		text-align: center;
		color: #9966CC;
	}
	#background{
    height: 600px;
    width: 95%;
    margin: 0 auto;
    margin-top: 100px;
    background-image:url("https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/PseudochelidonSirintarae.svg/1217px-PseudochelidonSirintarae.svg.png"); 
    
     

  }
	#line1{
		color: #9966CC;
		font-size: 130%;
		text-align: center;
		margin-top: 30px;
		display: inline-block;
		text-align: center;
		margin-left:590px;

	}
	#text{
		margin-top: 5px;
		margin-left:20px;
		width: 250px;
		height: 30px;
		font-size: 90% ;


	}
	#text1{
		margin-top: 5px;
		margin-left:35px;
		width: 250px;
		height: 30px;
		font-size: 90% ;


	}
	#submit{
		width: 70px;
		height: 50px;
		margin-left:800px;
		font-size: 90% ;
		color: #9966CC;

	}
	#str{
		font-size: 160% ;
		text-align: center;
		color: #9966CC;

	}
	body{
		background-color:#00CC99;
		background-image: url("https://donottellmyboss.com/wp-content/uploads/2013/08/green-white-background.jpg");
		
	}
	.back{
		background-color: #99CCFF;
    	color: white;
    	
	}
	

      

  </style>
	
</head>
<body>
	<div id="background">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div id=line >โปรแกรมคำนวณดัชนีมวลกาย Body Mass Index (BMI) </div> 
  <p id=line1>ส่วนสูง/เซนติเมตร</p><input id=text type="text" name="height" >
  <br>
  <p id=line1>น้ำหนัก/กิโลกรัม</p><input id=text1 type="text" name="weight" >
  <br>
  <br>

  <input id=submit type="submit" class="back" value="คำนวณ">
  <p id=str>
  <?php
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

  	
  	
  	$height=$_POST["height"];
  	$weight=$_POST["weight"];
  	
  		$height=$height/100;
  	$bmi=$weight/$height**2;
  	echo "<br \>";
  	
  	echo "BMI=$bmi";
  	echo "<br \>";

  		
  	if($bmi>="40"){
  		echo "<br \>";
  		 echo "โรคอ้วนขั้นสูงสุด";

  	}
  	else if ($bmi>="35"&&$bmi<="39.9") {
  		echo "<br \>";
  		echo "โรคอ้วนระดับ2 คุณเสี่ยงต่อการเกิดโรคที่มากับความอ้วน หากคุณมีเส้นรอบเอวมากกว่าเกณฑ์ปกติ ";
  		echo "<br \>";
  		echo "คุณจะเสี่ยงต่อการเกิดโรคสูง คุณต้องควบคุมอาหาร และออกกำลังกายอย่างจริงจัง ";
  		echo "<br \>";
  		

  		
  	}
  	else if ($bmi>="28.5"&&$bmi<="34.9") {
  		echo "<br \>";
  		echo "โรคอ้วนระดับ1 และหากคุณมีเส้นรอบเอวมากกว่า 90 ซม.(ชาย) 80 ซม.(หญิง) คุณจะมีโอกาศเกิดโรคความดัน เบาหวานสูง  ";
  		echo "<br \>";
  		
  		echo "หากคุณมีเส้นรอบเอวมากกว่าเกณฑ์ปกติคุณจะเสี่ยงต่อการเกิดโรคสูง จำเป็นต้องควบคุมอาหาร และออกกำลังกาย ";
  		echo "<br \>";
  		

  		
  	}
  	else if ($bmi>="23.5"&&$bmi<="28.4") {
  		echo "<br \>";
  		echo "น้ำหนักเกิน หากคุณมีกรรมพันธ์เป็นโรคเบาหวานหรือไขมันในเลือดสูง";

  		echo "<br \>";
  		echo "ต้องพยายามลดน้ำหนักให้ดัชนีมวลกายต่ำกว่า 23";
  		
  	}
  	else if ($bmi>="18.5"&&$bmi<="23.4") {
  		echo "<br \>";
  		echo "น้ำหนักปกติ และมีปริมาณไขมันอยู่ในเกณฑ์ปกติ มักจะไม่ค่อยมีโรคร้าย ";
  		echo "<br \>";
  		echo "อุบัติการณ์ของโรคเบาหวาน ความดันโลหิตสูงต่ำกว่าผู้ที่อ้วนกว่านี้";
  		
  	}
  	else {
  		echo "<br \>";
  		echo "น้ำหนักน้อยเกินไป ซึ่งอาจจะเกิดจากนักกีฬาที่ออกกำลังกายมาก " ;
  		echo "<br \>";
  		echo "และได้รับสารอาหารไม่เพียงพอ วิธีแก้ไขต้องรับประทานอาหารที่มีคุณภาพ";
  		echo "<br \>";
  		echo "และมีปริมาณพลังงานเพียงพอ และออกกำลังกายอย่างเหมาะสม";
  	}
}

  ?>
  </p>
  </form>
  <br>
  <br>
  <br>
  <form action="index.php">
      <input id=submit type="submit" class="back" value="กลับ">
  </form>
</div>

</body>
</html>



  	
