<!DOCTYPE html>
<html>
<head>
  <title>โปรแกรมคำนวณ ค่า BMI BMR และคอเลสเตอรอล</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 20px;
    font-size: 30px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;

}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 200px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: #0066FF;
    padding: 12px 16px;
    text-decoration: none;
    display: block;

}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}
#dd{
  width: 370px;
  margin-top:40px; 
  margin-left: 630px; 
  
}
#myDropdown{
  width: 370px;
  font-size: 30px;
  text-align: center;
  margin-left: 630px; 
  

}
#line{
    font-size: 200%;
    margin-top: 180px;
    text-align: center;
    color: #0066FF;  }
  #background{
    height: 450px;
    width: 95%;
    margin: 0 auto;
    margin-top: 100px;
    
    

  }
  body{
    background-color:#333333;
    background-image:url("https://wallpaper.campus-star.com/app/uploads/2015/09/vector-6.jpg"); 
  }
  #aa{
    margin-top: 50px;

  }
</style>
</head>
<body>
    <div id=aa></div>
    <div id=aa></div>
  <div id="background">
    <div id=aa></div>
    <div id=aa></div>
    <div id=aa></div>
    

    <div id=line >โปรแกรมคำนวณ ค่า BMI BMR และคอเลสเตอรอล </div> 
    <div id=aa></div>
    <div id=aa></div>
    

    <div  class="dropdown">
      <button onclick="myFunction()" id=dd class="dropbtn">เลือกค่าที่ต้องการคำนวณ</button>
      <div id="myDropdown" class="dropdown-content">
        <a href="bmi.php">BMI</a>
        <a href="bmr.php">BMR</a>
        <a href="calas.php">Cholesterol</a>
      </div>
    </div>

<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</div>

</body>
</html>