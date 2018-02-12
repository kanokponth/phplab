<!DOCTYPE html>
<html>
<head>
	<title>คํานวณคอเลสเตอรอล</title>
	<style type="text/css">
  #background{
    height: 750px;
    width: 95%;
    margin: 0 auto;
    margin-top: 40px;
    margin-right: 50px;
     

  }
  body{
    background-color:#708090 ;
    background-color:#708090 ;
    background-image:url("https://img00.deviantart.net/9408/i/2010/036/c/1/when_i_think_of_you___draft_by_raindropmemory.png"); 
  }
  #line{
    font-size: 200%;
    margin-top: 90px;
    text-align: center;
    color: #6633FF;
  }
  #line1{
    font-size: 130%;
    
    margin-top: 30px;
    display: inline-block;
    text-align: center;
    margin-left:510px;
    color: #6633FF;


  }
  .back{
		background-color: #99CCFF;
    	color: white;
    	
	}
  #text{
    margin-top: 5px;
    
    width: 250px;
    height: 30px;
    font-size: 90% ;
    margin-left:50px


  }
  #submit{
    width: 60px;
    height: 40px;
    margin-left:770px;
    font-size: 90% ;

  }
  #text1{
    margin-top: 5px;
    width: 250px;
    height: 30px;
    font-size: 90% ;
    margin-left:48px
    }
  #text2{
    margin-top: 5px;
    width: 250px;
    height: 30px;
    font-size: 90% ;
    margin-left:15px
    }
   #text3{
      margin-left:100px;
      }
    #text4{
      margin-left:10px;
    }
    #text5{
      margin-left:125px;
      width: 255px;
      height: 40px;
    }
    #word{
      font-size: 190% ;
      text-align: center;
      height: 90px;
      width: 60%;
      margin: 0 auto;
      margin-top: 40px;
      margin-left: : 20px;
      color: #6633FF;
      
       

    }
    
</style>
</head>
<body>
	<div id="background">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div id=line >คํานวณคอเลสเตอรอล </div> 
  <p id=line1>ค่าไขมันLDL(mg/dL)</p>
  <input id=text type="text" name="ldl" >
  <br>
  <p id=line1>ค่าไขมันHDL(mg/dL)</p>
  <input id=text1 type="text" name="hdl" >
  <br>
  <p id=line1>ค่าไตรกลีเซอไรด์(mg/dL)</p>
  <input id=text2 type="text" name="tri" >
  <br>
  <br>
  <input id=submit type="submit" class="back" value="คำนวณ">
  
  <p id=word>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ldl=$_POST["ldl"];
    $hdl=$_POST["hdl"];
    $tri=$_POST["tri"];
    $calas=$ldl+$hdl+($tri/5);
    echo "ค่าคอเลสเตอรอล คือ $calas mg/dL";
    echo "<br \>";
    if($calas<"200"){

    	echo "ดีมาก";
    }
    else if($calas>=200&&$calas<240){
    	echo "ค่อนข้างสูง";
    }else{
    	echo "สูง";

    }
   }
  ?>
</p>
  </form>
  </form>
  
  <form action="index.php">
      <input id=submit type="submit" class="back" value="Back">
  </form>
</div>

</body>
</html>
