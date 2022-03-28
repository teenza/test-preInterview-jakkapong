<!DOCTYPE html> 

<html>  
   <head> 
      <meta charset = "utf-8"> 
      <title>test 2</title> 
  <link rel="stylesheet" href="css.css">
</head> 
  
<body> 
      <header>
      	<div>02.</div>
        A
        <div class="info">
       		let a = 1;
			let b = 2;
			let c='';
			console.log("a=($a),b=$(b),c=$(c)");
			a += 0
			b=a+c
			if (b === a) {
				console.log('a equal b');
			} else {
				console.log('something went wrong');
			}
        </div>
        B
         <div class="info">
       		console.log(square(5));
			var square = function(n){
				return n * n;
			}
            
			console.log(square(5));
			function square(n){
				return n * n;
			}
        </div>
      </header> 
      
      
      <section>
      <div class="main">
      A
      <div id="log"></div>
      ที่ผลลัพธ์เป็น  'something went wrong' เพราะว่าเครื่องหมาย === มันเปรียบเทียบค่าที่เหมือนกัน แต่ในข้อนี้ค่า a เป็นตัวเลข แต่ค่า b เป็นตัวอักษรสังเกตจาก let c = ''  <br>
       แต่ถ้าเปลี่ยนเป็น == ก็จะได้ผลลัพธ์เป็น  'a equal b' เพราะ มันแค่เป็นการเทียบการเท่ากันเฉยๆโดยไม่สน type ของตัวแปล
       
       <hr>
       B
       <div id="log2"></div>
   ทั้ง 2 แบบต่างกันที่  function square เรียกใช้งานตรงไหนก็ได้ แต่ var square = function(n) ต้องเรียกใช้งานหลังคำสั่ง
    <script type='text/javascript'> 
			let a = 1;
			let b = 2;
			let c='';
			console.log("a=($a),b=$(b),c=$(c)");
			a += 0
			b=a+c
			if (b === a) {
				console.log('a equal b');
				 document.getElementById('log').innerHTML = 'log(a equal b)';
			} else {
				console.log('something went wrong');
				document.getElementById('log').innerHTML = 'log(something went wrong)';
			}
			
			
			console.log(square(5));
			document.getElementById('log2').innerHTML = 'log('+square(5)+')';
			var square = function(n){
				return n * n;
			}
				console.log(square(5));
				document.getElementById('log2').innerHTML = 'log('+square(5)+')';
			function square(n){
				return n * n;
			}
			
	</script>
      </div>
      
      
      </section>
      
<footer>by Jakkapong.</footer> 
</body> 
</html> 