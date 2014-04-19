<!DOCTYPE html>
<?php
session_start();
// Session Data Variables
$_SESSION['total_time']=0;
$_SESSION['score']=0;
?>
<html>
  <head>
    <title>Ragangal</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	
	

	
	<script>
		//global answer variable
		var global_answer;
		//global score variable
		var global_score = 0;
		//global time variable
		var global_time = 0;
		//global pause time variable
		var global_time_pause = 100;
		//global progress bar workaround
		var global_bar = 200;
		//global first time check
		var global_first = 0;
	</script>

	<script src="http://code.jquery.com/jquery-latest.js"></script>
    	<script src="js/bootstrap.min.js"></script>

	<script>
		//Hide score div		
		//Dismiss that pesky success alerts
		$(document).ready(function(){
			console.log("Closing alerts");
			$('#success').hide();
			$('#failure').hide();
			$('#welcome_alert').show();
			
			$("#score_disp").hide();
		});
	</script>
	
  </head>
  
  
  <body>
    
	<script type="text/javascript" src="jquery.jplayer.min.js"></script>
	
	 <!-- Alerts -->
	
	<div class="alert fade in" id = "welcome_alert">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Alert!</strong> Welcome to Ragangal, your session score is located on the right.
	</div>
	
	 <div class= "alert alert-success fade in" id = "success">
      <a class= "close">×</a> 
      Great job! You got that ragam correct!
    </div>
	
	<div class="alert alert-error fade in" id = "failure">
	<button type="button" class="close">×</button>
	Sorry, you missed that ragam. Better luck next time...
	</div>
	
	<div id = "alert_placeholder"></div>
	
	<script type = "text/javascript">
		//Binding the close button
		$('.alert .close').live("click", function(e) {
		$(this).parent().hide();
		});
	
		
		
		
	</script>
	
	<!-- End Alerts -->
	
	
	<div id="jquery_audioPlayer" class="jp-jplayer"></div>
	
	
	<script>
		//Dismiss
		
	   $("#jquery_audioPlayer").jPlayer({
        swfPath: "/js",
        wmode: "window"
		});
	</script>
	
	<div class = "container-fluid">
		<div class = "navbar navbar-inverse">
			<div class = "navbar-inner">
				<!--NavBar-->
				<a class="brand" href="#"><b> Ragangal... </b> <i> The carnatic ragam quiz app </i></a>
				<ul class = "nav">
					<li> <a href = "#help" data-toggle="modal"> Help </a> </li>
					<li> <a href = "#about" data-toggle="modal"> About </a> </li>
					
				</ul>
			</div>
	
	

			
	<!-- Sign in Modal-->
	<div id="signin" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Sign In</h3>
		</div>
		<div class="modal-body">

			<div class = "row-fluid">
				<div class = "span8">
					<!--Sign In-->
					<p><b>Sign in with your Ragangal Account</b></p>
					<form class="form-inline">
						<input type="text" class="input-small" placeholder="Email">
						<input type="password" class="input-small" placeholder="Password">
						<button type="submit" class="btn btn-primary">Sign in</button>
					</form>
				
				</div>
				<div class = "span4">
					<!--Sign Up-->
					 Don't have an account? Register Here...
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
		</div>
	</div>
	
	<!-- Help Modal-->
	<div id="help" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="helpModalLabel">Help</h3>
		</div>
		<div class="modal-body">
			Ragangal is a game in which players compete to correctly guess Carnatic Ragams. Carnatic ragams will be played back and the
			player must enter the name of the ragam to win points. Correct answers will credit 1 point and incorrect answers will credit
			0 points.
		</div>
		<div class="modal-footer">
			<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
		</div>
	</div>
	
	<!-- About Modal -->
	<div id="about" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="helpModalLabel">About Ragangal</h3>
		</div>
		<div class="modal-body">
			Raganagal is a web app that was created to help people learn to identify ragams. Ragangal was created by Visrut Sudhakar
			in December 2012 and utilizes the following technologies.
			<br>
			
			<p>
			
			<ul>
				<li> HTML 5 </li>
				<li> CSS 3 </li>
				<li> Javascript </li>
				<li> JQuery </li>
				<li> Twitter Bootstrap </li>
				<li> PHP </li>
				<li> MySQL </li>
			</ul>
			
			<br>
			The ragam alapanas used on this site for the game were taken from <a href = "www.sangeethapriya.org"> Sangeethapriya </a>
			another amazing Carnatic Rasika driven site.
			
			<p>
			
			<p class = "text-warning"> The design and interface of this site was heavily influenced by <a href = "www.protobowl.com"> Protobowl
			</a> an online Quizbowl applet. </p>
			
			<p class = "text-info"> Much of the testing, decoding, and debugging would have been tedious and nearly impossible to do without
			the help of <a href = "www.jsfiddle.net"> JSFiddle </a>. </p>
			
			This project was conceived and created to become a top resource for Carnatic sishyas, gurus, and rasikas in the world and to
			spark the inspiration of other individuals who want to create a similar application. For that reason this application's source
			code and files will be released as an <i> Open Source Initiative </i> through the Creative Commons license.
			<br>
			
			<p>
			
			<center> <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Ragangal</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://visrut.suvithra.com" property="cc:attributionName" rel="cc:attributionURL">Visrut Sudhakar</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a> </center>
			
			
			<br>
			
			<p>
			For more information please visit <a href = "http://vsudhakar.suvithra.com"> http://vsudhakar.suvithra.com </a>
			
		</div>
		<div class="modal-footer">
			<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
		</div>
	</div>
			
		</div>
		<div class = "row-fluid">
			<div class = "span3">
				<!--Sidebar-->
				<div class = "well">
					<p><h3> Player Statistics </h3></p>
					<table class = "table">
						<tr>
							<td> Session Score </td>
							<td> <label id="msg"></label> </td>
							<script> window.setInterval(function(){$('#msg').html(global_score);},100); </script> 
						</tr>
						
					</table>
				</div>
				
				
				
				
			</div>
			
			<div class = "span9">
				<!--Main Content-->
				<!-- Buttons-->
				<div class="progress progress-danger progress-striped active">
					<div class="bar" style="width: 0%;"></div>
				</div>
				
				<div class = "well">
					<div id = "btnControl">
						<p> <h3> Ragangal </h3> <p>
						<button class = "btn btn-primary" onclick = "start()" id = "start"> Start </button>
						<button class = "btn btn-inverse" onclick = "stopGame()"> Stop </button>
						<button class = "btn btn-warning" onclick = "skip()"> Skip </button>
						<!-- <button class = "btn btn-danger" onclick = "nextFile()"> Next </button> -->
					</div>
				
					<div id = "welcomeText" class = "collapse in">
						<div class = "well">
							<p class = "lead">
								Welcome to Ragangal, to begin please press start. Stats are located on the left. Press the pause button to temporarily freeze the game. Help is located in the main menu.
							</p>
						</div>
					</div>

					<div id = "score_disp">
						<h1> Thanks for playing Ragangal! </h1>
						<h3>
					</div>
					
					
						
					<div id = "inputFields" class = "collapse down">
						<div class = "well">
							<input type="textbox" name = "entry" id = "raga_entry" class = "input-medium" data-provide="typeahead">
							<button id="Get" class = "btn btn-info"> Submit </button>
						</div>

						<script>
							//Stop Game button code
							function stopGame(){
								//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
								stopPlayback();
								$("#inputFields").hide();
								$("#score_disp").show();
								var scoreDispString = global_score + " Points";
								$("#score_disp").append("<h3>");
								$("#score_disp").append("</h3>");
								$("#score_disp").append(scoreDispString);
								$("#score_disp").append("<br><a class = 'btn btn-warning btn-large' href = 'http://visrut.suvithra.com/ragangal'>Play Again</a>");
								$("#btnControl").hide();
							}
						</script>
					
						<script>
							//Start button code
							function start(){
								if(global_first == 0){
									$("#welcomeText").collapse();
									$("#inputFields").collapse();
									$("#start").hide();
								}
								global_first++;
								getFile();
							}
						</script>
					
						<script>
							//Next button code
							function nextFile(){
								stopPlayback();
								getFile();
							}
						</script>
					
						<script>
							//Skip button code
							function skip(){
							bootstrap_alert = function() {}
							bootstrap_alert.warning = function(message) {
							$('#alert_placeholder').html('<div class="alert"><a class="close" data-dismiss="alert">×</a><span>'+message+'</span></div>')
							}

							bootstrap_alert.warning('You skipped that ragam, the answer was ' + global_answer);
							
							stopPlayback();
							//alert('Skipped');
							getFile();
							}

						
						</script>
					
						<script type="text/javascript">

							//Button answer script
							$("#Get").click(function () {
								//alert("Hey, what's up?");
 
								var user_answer = $("#raga_entry").val();
								//alert(user_answer);
								
								stopPlayback();
								//alert('Amber');
								//alert(global_answer);
								
								
								if(user_answer == global_answer)
								{
									 $('#success').show();
									 //alert('success');
									 global_score++;
									 getFile();
								}
								
								else
								{
									//alert('You suck!');
									 $('#failure').show();
									bootstrap_alert = function() {}
									bootstrap_alert.warning = function(message) {
									$('#alert_placeholder').html('<div class="alert"><a class="close" data-dismiss="alert">×</a><span>'+message+'</span></div>')
								}

							bootstrap_alert.warning('The answer was ' + global_answer);
									 getFile();
								}
								
								//alert("Skipper!");
								
									window.setInterval(function(){
										$("#success").hide();
										$("#failure").hide();
									},5000);
					 	
							
 
							});
						
						</script>
				
					
						
						
						
				
						
						<script>
							function getFile()
							{
							var rand_file = files[Math.floor(Math.random() * files.length)];
							var n=rand_file.indexOf("_");
							var answer = rand_file.slice(0,n);
							global_answer = answer;
							rand_file_good = "http://visrut.suvithra.com/ragangal/music/"+rand_file;
							console.log(rand_file_good);
							//window.alert(global_answer);
							$('#jquery_audioPlayer').jPlayer("setMedia", {mp3:rand_file_good});
							$('#jquery_audioPlayer').jPlayer("supplied", "mp3");
							$('#jquery_audioPlayer').jPlayer("play");
							progressBar();
							//global_time_pause = 0;
							global_bar = 0;
							var time_interval = setInterval(function(){
							if(global_time_pause == 0){
							$('#time').html(global_time); global_time++
							}
							else{
							window.clearInterval(time_interval);
							}
							},1000);
							
							
							
					 	
							}
					
						
						</script>
						
						
						<script>
						var x = 0;
						</script>
						
						<script>
							function progressBar()
							{
							
							
							
							var e = 2.5;
							var intervalID = setInterval(function () {
							
								if(global_bar == 200){
									$('.bar').css('width', '0%');
								}
							
								if (++x === 40) {
									window.clearInterval(intervalID);
								
								}
								
								else{
									$('.bar').css('width', e + '%');
									e = e + 2.5;
								}
								
								if(e == 97.5){
									skip();
								}
								

								
							}, 3000);
							
							

							
							}
						</script>
						
						<script>
							function stopPlayback()
							{
								$('#jquery_audioPlayer').jPlayer( "clearMedia" );
								$('.bar').css('width', '0%');
								x = 39;
								global_time_pause = 100;
								global_bar = 200;
								$("#start").show();
		
							}
						</script>
						
			
						
						
						
						<script>
							function answerCheck()
							{
								alert("Fact check");
								/*stopPlayback();
								var userAnswer = document.getElementById('raga_entry').value;
								alert(global_answer);
								
								if(userAnswer == global_answer){
									 $('#success').show();
									 alert('success');
									 global_score++;
									 getFile();
								}
								
								else{
									 $('#failure').show();
									 getFile();
								}*/
								
								
							}
						</script>
						
						
						
				
						
						
						
					</div>
				<div>
		
			</div>
		</div>
	</div>
	
	<div class = "row-fluid">
		<div class = "span12">
			<div class = "well">
				<!-- The Footer -->
				<strong> Ragangal </strong>| <i> A <a href = "http://vsudhakar.suvithra.com"> vSudhakar </a> Project </i>
				
			</div>
		</div>
	</div>
  </body>

	<!-- Ragam and Files-->

	<script>
		// Ragams list
		var raagams = ['abogi', 'arabhi', 'abheri','bhairavi', 'carukesi' , 'mohanam', 'saveri', 'thodi', 'kamboji', 'shankarabaranam', 'karaharapriya', 'bilahari', 'begada'];   
		$('#raga_entry').typeahead({source: raagams}) 
	</script>

	<script>
		var files = ['abheri_balamuralikrishna.mp3', 'carukesi_tvs.mp3', 'kamboji_tvs.mp3', 'shankarabaranam_tvs.mp3', 'karaharapriya_sudhar.mp3', 'bilahari_.mp3', 'begada_.mp3'];   
	</script>
</html>
