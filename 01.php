<!DOCTYPE html> 

<html>  
   <head> 
      <meta charset = "utf-8"> 
      <title>test 1</title> 
<link rel="stylesheet" href="css.css">
</head> 
  
<body> 
      <header>
      	<div>01.</div>
        <div class="info">
        1. บริษัท Tesla ขายรถ Tesla มีรถจำนวนทั้งหมด 3 รุ่น (a,b,c) ในปีที่ผ่านมาขายไปได้ดังนี้
            a ขายได้ 1200 ค้น
            b ขายได้ 95 คัน
            c ขายได้ 115 คัน
            จงหาว่ปีที่ผ่านมาขายแต่ละรุ่นไปเป็นจำนวนกี่ % จากยอดขายรถทั้งหมด
        </div>
      </header> 
      
      
      <section>
      <div class="main">
      <?php
	  $car_a = 1200;
	  $car_b = 65;
	  $car_c = 115;
	  $car_all = array($car_a,$car_b,$car_c);
	  
	  //sale A %
	  echo "CAR A ($car_a) คัน = ".cal($car_all, $car_a). "% <br>";
	  echo "CAR B ($car_b) คัน = ".cal($car_all, $car_b). "% <br>";
	   echo "CAR C ($car_c) คัน = ".cal($car_all, $car_c). "% <br>";
	  
	  
	  function cal($car_all, $car){
		  $sum_car = 0;
		 foreach($car_all as $c){
			 $sum_car +=  $c;
		  }
		  $car_percent = (($car*100)/ $sum_car);
		  $car_percent = number_format($car_percent, 2);
		  return  $car_percent;
	  }
	  ?>
      </div>
      </section>
      
<footer>by Jakkapong.</footer> 
</body> 
</html> 