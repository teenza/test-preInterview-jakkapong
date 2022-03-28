<!DOCTYPE html> 

<html>  
   <head> 
      <meta charset = "utf-8"> 
      <title>test 6</title> 
  <link rel="stylesheet" href="css.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head> 
  
<body> 
      <header>
      	<div>06.</div>
        <div class="info">
//        
</div>
      </header> 
      
      
      <section>
      <div class="main">
      <div>
      <a href="#" onClick="getpokemon('https://pokeapi.co/api/v2/pokemon');">All</a> 
      <a href="#" onClick="getpokemonType('https://pokeapi.co/api/v2/type/1');">Type1</a> 
      <a href="#" onClick="getpokemonType('https://pokeapi.co/api/v2/type/2');">Type2</a> 
      <a href="#" onClick="getpokemonType('https://pokeapi.co/api/v2/type/3');">Type3</a> 
      <a href="#" onClick="getpokemonType('https://pokeapi.co/api/v2/type/4');">Type4</a> 
      <a href="#" onClick="getpokemonType('https://pokeapi.co/api/v2/type/5');">Type5</a> ....</div>
      <div id="data"></div>
    <div id="pagen"></div>
   		<script language="javascript">
		
		getpokemon("https://pokeapi.co/api/v2/pokemon");
		
		function getpokemon(_url){
			
			$.getJSON( _url, function( data ) {
				  var items = [];
				  $.each( data['results'], function( key, val ) {
					items.push( "<li  '><a href='#'  onclick=\"showdetail(\'"+val["url"]+"\');\">" + val["name"] + "</a></li>" );
				  });
				 
				$("#data").html("<ul>"+items.join( "" )+"</ui>");
				
				_page_next = "";
				if(data['next']){
					_page_next =  '<a href="#" onclick="getpokemon(\''+data['next']+'\')">ถัดไป</a>';
				}
				_page_previous = "";
				if(data['previous']){
					_page_previous =  '<a href="#" onclick="getpokemon(\''+data['previous']+'\')">ย้อนกลับ</a>';
				}
				$("#pagen").html(_page_previous+" "+_page_next);
			});
			
		}
		
		function showdetail(_url){
			$.getJSON( _url, function( data ) {
				 alert(JSON.stringify(data));
			});
			
		}
		
		function getpokemonType(_url){
			
			$.getJSON( _url, function( data ) {
				  var items = [];
				  $.each( data['pokemon'], function( key, val ) {
					items.push( "<li  '><a href='#'  onclick=\"showdetail(\'"+val["pokemon"]["url"]+"\');\">" + val["pokemon"]["name"] + "</a></li>" );
				  });
				 
				$("#data").html("<ul>"+items.join( "" )+"</ui>");
				
				
				$("#pagen").html("");
			});
			
		}
		

			
        
        </script>
        
      </div>
      
      
      </section>
      
<footer>by Jakkapong.</footer> 
</body> 
</html> 