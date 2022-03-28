<!DOCTYPE html> 

<html>  
   <head> 
      <meta charset = "utf-8"> 
      <title>test 4</title> 
  <link rel="stylesheet" href="css.css">
</head> 
  
<body> 
      <header>
      	<div>04.</div>
        <div class="info">
      4. ให้สร้าง function ที่รับข้อมูลเป็น string '(, '[, '{, }', ]', )'
ทำการตรวจสอบว่าข้อมูลที่รับมามีการเปิดปิดของสัญลักษณ์ครบคู่หรือไม่ เช่น
ข้อมูล "0" คำตอบจะเป็น true เพราะมีการเปิดปิดวงเล็บครบคู่
ข้อมูล "(0" คำตอบจะเป็น false เพราะมีการเปิดปิดไม่ครบคู่
        </div>
      </header> 
      
      
      <section>
      <div class="main">
   
   		<?php
		$data = "[([])({})({}){[[()]]}]";
		echo $data ." = ".  check($data );
		
		function check($txt){

			$arr_txt = str_split($txt);
			$c1_a = 0;	
			$c1_b = 0;	
			$c2_a = 0;	
			$c2_b = 0;	
			$c3_a = 0;	
			$c3_b = 0;	
			foreach($arr_txt as $v){
				if($v == "("){
					$c1_a++;
				}
				if($v == ")"){
					$c1_b++;
				}
				if($v == "["){
					$c2_a++;
				}
				if($v == "]"){
					$c2_b++;
				}
				if($v == "{"){
					$c3_a++;
				}
				if($v == "}"){
					$c3_b++;
				}
			}
			
		
			if($c1_a != $c1_b ){
				return "false";
			}
			if($c2_a != $c2_b ){
				return "false";
			}
			if($c3_a != $c3_b ){
				return "false";
			}
			return "true";
	
		}
		?>
        
      </div>
      
      
      </section>
      
<footer>by Jakkapong.</footer> 
</body> 
</html> 