<!DOCTYPE html> 

<html>  
   <head> 
      <meta charset = "utf-8"> 
      <title>test 5</title> 
  <link rel="stylesheet" href="css.css">
</head> 
  
<body> 
      <header>
      	<div>05.</div>
        <div class="info">
5. จงเขียนโปรแกรมเพื่อหาคำตอบของจำนวนบวกต่อเนื่องกันตั้งแต่ n ถึง แ โดยโจทย์จะกำหนดตัวแปร
n และ ท มาให้
ตัวอย่างเช่น
n =1,m =5 คือการหาผลรวมของ 1, 2, 3, 4,5 ผลลัพธ์คือ 15
ท=3, m=5 คือการหาผลรวมของ 3, 4,5  ผลลัพธ์เท่ากับ 12 จงเขียนโปรแกรมเพื่อหาผลลัพธ์ต่อไปนี้
c. n=1 m =99
d. n = 446 m = 779
e. n=3 m=1,099
f. n=34 m= 1,000,000
        </div>
      </header> 
      
      
      <section>
      <div class="main">
   
   		<?php
		$a = 34;
		$b = 1000000;
		echo "$a - $b = ". number_format(sumto($a, $b ),0);
		function sumto($a,$b){
				$result = 0; 
				for ($x = $a; $x <= $b; $x++){
					$result += $x;
				}
			 
				return $result;
			}
		?>
        
      </div>
      
      
      </section>
      
<footer>by Jakkapong.</footer> 
</body> 
</html> 