<!DOCTYPE html>
<html>
<head>
  <title>คำนวณการเผาผลาญพลังงาน Basal Metabolic Rate (BMR) </title>
  <style type="text/css">
  #background{
    height: 750px;
    width: 95%;
    margin: 0 auto;
    margin-top: 40px;
    margin-right: 50px;
    color: #CC0066;

    

  }
  body{
    background-color:#708090 ;
    background-image:url("http://3.bp.blogspot.com/-ThmLbnU4dEQ/VbocWrFhBgI/AAAAAAAAAKQ/6KA90_bM0sM/s1600/10984994_1525305627691825_7847297541424754694_n.jpg"); 
    
  }
  #line{
    font-size: 200%;
    margin-top: 90px;
    text-align: center;
    color: #CC0066;
  }
  #line1{
    font-size: 130%;
    
    margin-top: 30px;
    display: inline-block;
    text-align: center;
    margin-left:590px;
    color: #CC0066;


  }
  #text{
    margin-top: 5px;
    
    width: 250px;
    height: 30px;
    font-size: 90% ;
    margin-left:45px;


  }
  #submit{
    width: 70px;
    height: 50px;
    margin-left:830px;
    font-size: 90% ;

  }
  #text1{
    margin-top: 5px;
    width: 250px;
    height: 30px;
    font-size: 90% ;
    margin-left:60px
    }
  #text2{
    margin-top: 5px;
    width: 250px;
    height: 30px;
    font-size: 90% ;
    margin-left:145px
    }
    #text3{
      margin-left:160px;
      }
    #text4{
      margin-left:10px;
    }
    #text5{
      margin-left:130px;
      width: 255px;
      height: 40px;
    }
    #word{
      font-size: 120% ;
      text-align: center;
      height: 90px;
      width: 60%;
      margin: 0 auto;
      margin-top: 40px;
      margin-left: : 20px;
      color: #CC0066;
      
       

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
  <div id=line >คำนวณการเผาผลาญพลังงาน Basal Metabolic Rate (BMR) </div> 
  <p id=line1>เพศ</p>
  <input id=text3 type="radio" name="gender" value="female">ชาย 
  <input id=text4 type="radio" name="gender" value="male">หญิง 
  <br>
  <p id=line1>ส่วนสูง/เซนติเมตร</p>
  <input id=text type="text" name="height" >
  <br>
  <p id=line1>น้ำหนัก/กิโลกรัม</p>
  <input id=text1 type="text" name="weight" >
  <br>
  <p id=line1>อายุ/ปี</p>
  <input id=text2 type="text" name="age" >
  <br>
  <p id=line1>กิจกรรม</p>
  <select id=text5 name="edu">
    <option name="1" value="ไม่ได้ออกกำลังกายเลย">ไม่ได้ออกกำลังกายเลย</option>
    <option name="1" value="เล่นกีฬาเล็กน้อย ประมาณอาทิตย์ละ 1-3 วัน">เล่นกีฬาเล็กน้อย ประมาณอาทิตย์ละ 1-3 วัน</option>
    <option name="1" value="เล่นกีฬาปานกลาง ประมาณอาทิตย์ละ 3-5 วัน">เล่นกีฬาปานกลาง ประมาณอาทิตย์ละ 3-5 วัน</option>
    <option name="1" value="เล่นกีฬาอย่างหนัก ประมาณอาทิตย์ละ 6-7 วัน">เล่นกีฬาอย่างหนัก ประมาณอาทิตย์ละ 6-7 วัน</option>
    <option name="1" value="เล่นกีฬาอย่างหนักทุกวันเช้าเย็น">เล่นกีฬาอย่างหนักทุกวันเช้าเย็น</option>
  </select>
  <br>
  <br>
  <br>
  <input id=submit type="submit" class="back" value="คำนวณ">
  
  <p id=word>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $height=$_POST["height"];
    $weight=$_POST["weight"];
    
    $gender=$_POST["gender"];
    $age=$_POST["age"];
    $job=$_POST["edu"];

    
    if($gender=="ชาย"){
      $bmr="66"+("13.7"*$weight)+("5"*$height)-("6.8"*$age);
    }else{
      $bmr="665"+("9.6"*$weight)+("1.8"*$height)-("4.7"*$age);
    }
    
    
    if($job=="ไม่ได้ออกกำลังกายเลย"){
      $burn=$bmr*"1.2";
      


    }
    elseif ($job=="เล่นกีฬาเล็กน้อย ประมาณอาทิตย์ละ 1-3 วัน") {
      $burn=$bmr*"1.375";
      
      
    }
    elseif ($job=="เล่นกีฬาปานกลาง ประมาณอาทิตย์ละ 3-5 วัน") {
      $burn=$bmr*"1.55";
      
      
    }
    elseif ($job=="เล่นกีฬาอย่างหนัก ประมาณอาทิตย์ละ 6-7 วัน") {
      $burn=$bmr*"1.725";
      
      
    }
    else {
      $burn=$bmr*"1.9";
      
      
    }
    echo "BMR (Basal Metabolic Rate) พลังงานที่จำเป็นพื้นฐานในการมีชีวิต $bmr กิโลแคลอรี่";
      echo "<br \>";
      echo "TDEE (Total Daily Energy Expenditure) พลังงานที่คุณใช้ในแต่ละวัน $burn กิโลแคลอรี่";
    
      
    
    
  }
  ?>
</p>
  </form>
  
  <form action="index.php">
      <input id=submit type="submit" class="back" value="Back">
  </form>
</div>

</body>
</html>