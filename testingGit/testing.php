<?php include 'include/config.php'; ?>
<?php include 'head.php'; ?>
<?php session_start(); ?>

<body>
    <!-- <?php include 'newhomepageHeader.php' ?> -->
    <div id="page-container">
    	<!-- intro -->
		
 <!-- <section style="padding-top:200px">
 <div id="ytplayer"></div>
 </section> -->
 <div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myVideo">Open Modal</button>

  <!-- Modal -->
  	<div class="modal fade" id="myVideo" role="dialog" style="display:none">
    	<div class="modal-dialog" >
    
      	<!-- Modal content-->
      		<div class="modal-content">
        		<div class="modal-header">
          			<button type="button" onclick="close()" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title">Sign In</h4>
        		</div>
        		<div class="modal-body">
		
				<div class="modal-body mx-3">
					<div class="md-form mb-5">
						<i class="fas fa-envelope prefix grey-text"></i>
						<input type="email" id="email" class="form-control validate">
						<label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
					</div>

					<div class="md-form mb-4">
						<i class="fas fa-lock prefix grey-text"></i>
						<input type="password" id="password" class="form-control validate">
						<label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
					</div>
        		</div>

				<div class="modal-footer">
					<button id="login" type="button" class="btn btn-default" data-dismiss="modal">Sign In</button>
				</div>
      		</div>
    	</div>
  	</div>
  
	</div>


		<section id="ISOVideo"  class=" site-section-whiteBG backgroundControl" style="padding-left:3%;padding-right:3%;padding-top:130px;padding-bottom:130px" >
		<div class="col-md-12">
				<div class="row"  >
				
					<div class="col-md-8">
						<div class="video-iframe" style="position:relative;top:100px;height:100%;weight:100%" >
						<iframe id="pic"class="responsive-iframe" width="100%" height="100%" src="https://www.youtube.com/embed/4OGjHUCydK8?controls=0" frameborder="0" allowfullscreen="" ></iframe>
						<!-- <video data-yt2html5="https://www.youtube.com/embed/4OGjHUCydK8?controls=0" controls></video> -->
						<!-- <video width="200" controls="true" poster="" id="video">
						<source type="video/mp4" class="responsive-iframe" width="100%" height="100%" src="https://www.youtube.com/embed/4OGjHUCydK8?controls=0" frameborder="0" allowfullscreen=""></source>
						
							
							</video> -->
						</div>
					</div>
					<div class="col-md-4" style="margin-top:100px;padding-bottom:50px;">
					<!-- style="margin-top:170px;margin-left:50px" -->
						<div style="margin-left:50px;">
	    					<div class="row big-title-font" style="font-weight:600">Specialised</div>
	    				
	    				
	    					<div class="row big-title-font" style="font-weight:600">ISO 9001:2015 Solutions</div>
	    				
						
							<div class="row" style="font-size:20px;margin-top:30px;color:#ccc;text-align:justify"> A dedicated team of certification and training experts, Keyn Certification provides ISO 9001 Quality Management System Certification for organizations to achieve continual improvement and business success. </div>	    			
						</div>
					</div>
					</div>
				</div>
	    	
	    </section>

		<!-- <section>
		<video width="200" controls="true" poster="" id="video">
    <source type="video/mp4" src="http://www.w3schools.com/html/mov_bbb.mp4"></source>
</video>

<div id="status" class="incomplete">
<span>Play status: </span>
<span class="status complete">COMPLETE</span>
<span class="status incomplete">INCOMPLETE</span>
<br />
</div>
<div>
<span id="played">0</span> seconds out of 
<span id="duration"></span> seconds. (only updates when the video pauses)
</div>
<p>Playback position: <span id="demo"></span></p>
		</section> -->

    	<section>
		<iframe id="existing-iframe-example"
        width="640" height="360"
        src="https://www.youtube.com/embed/4OGjHUCydK8?controls=0&disablekb=1&amp;&enablejsapi=1"
        frameborder="0"
	></iframe>

	<button onclick="deleteCookies()">Delete Cookies</button>
	<button onclick="popUpSignIn()">Pop up Form</button>
		</section>


    </div>
	
	<?php include 'newhomepageFooter.php'; ?>

</body>

<!-- change content when different services is selected and change services css -->

<script type="text/javascript">
    var url            = 'scripts/reqClient.php';
    var method         = 'POST';
    var debug          = 0;
    var bypassBlocking = 0;
    var bypassLoading  = 0;
    var role           = [];
    let uploadImage    = "";
    var leaflet        = "";
    var leafletFileSize= "";
    var fCallback      = "";
    var courseid       = "<?php echo $_POST['id']; ?>";
let vid = document.getElementById("pic");
let vid2 = document.getElementById("video");
let popupform = false;
let remaining_time = 0;
let username = "";


// 		// 1. ytplayer code: https://developers.google.com/youtube/player_parameters#IFrame_Player_API
// 		var tag = document.createElement('script');
// 		tag.src = "https://www.youtube.com/player_api";
// 		var firstScriptTag = document.getElementsByTagName('script')[0];
// 		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
// 		let player;
// 		function onYouTubePlayerAPIReady() {
// 			player = new YT.Player('ytplayer', {
// 			height: '360',
// 			width: '640',
// 			videoId: '4OGjHUCydK8',
// 			events: {
            
//             'onStateChange': onPlayerStateChange
//         	}
// 			});
// 			let video = player;
// 		}
// 		// 2. get player.playerInfo.currentTime
// 		function onPlayerStateChange(event) {  
// 			changeBorderColor(event.data);
// 			console.log("AA");
// 			/// event.target.playVideo();

// 		}

// 		function changeBorderColor(playerStatus) {
//     var color;
//      if (playerStatus == 1) {
//       color = "#33691E"; // playing = green
// 	  console.log("A");
//     } 

//   }




		// Second testing 
		var tag = document.createElement('script');
  tag.id = 'iframe-demo';
  tag.src = 'https://www.youtube.com/iframe_api';
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('existing-iframe-example', {
        events: {
			onReady: initialize,
          'onStateChange': stateChange
        }
    });
  }

  var timestamp = 10;
var timer;

function timestamp_reached() {
   console.log('timestamp reached');
   console.log("10second reached");
   $('#myVideo').modal('show');
   console.log(popupform);
   
   player.pauseVideo();
   //do something…
}

function timestamp_callback() {
    clearTimeout(timer);
        
    current_time = player.getCurrentTime();
    remaining_time = timestamp - current_time;
	console.log(remaining_time)
	console.log(popupform);
    if (remaining_time > 0 && popupform == false) {
        timer = setTimeout(timestamp_reached, remaining_time * 1000);
		popupform = true;
    }    
}

function stateChange(evt) {
    if (evt.data == YT.PlayerState.PLAYING) {
        timestamp_callback();
			//interval for keep update cookies 
			// Update the controls on load
			updateTimerDisplay();
			//updateProgressBar();

			// Clear any old interval.
			clearInterval(time_update_interval);

			// Start interval to update elapsed time display and
			// the elapsed part of the progress bar every second.
			var time_update_interval = setInterval(function () {
				updateTimerDisplay();
				// updateProgressBar();
			}, 1000)


    }


	if (evt.data == YT.PlayerState.PAUSED){
		let user = getCookie("VideoPlayCookies");
	if(user){
		var newTime = user;

		// Skip video to new time.
		player.seekTo(newTime);
		console.log("cookies : "+ user);
	}else{
		document.cookie = "VideoPlayCookies="+player.getCurrentTime()+"";
	}
	}if (evt.data == YT.PlayerState.PLAYING) {

	}
};

//track time 
function initialize(){

	let user = getCookie("VideoPlayCookies");
	if(user){
		var newTime = user;

		// Skip video to new time.
		player.seekTo(newTime);
		console.log("cookies : "+ user);
	}else{
		document.cookie = "VideoPlayCookies="+player.getCurrentTime()+"";
	}


}

// This function is called by initialize()
function updateTimerDisplay(){
    // Update current time text display.
    // $('#current-time').text(formatTime( player.getCurrentTime() ));
    // $('#duration').text(formatTime( player.getDuration() ));
	console.log(player.getCurrentTime())
	let x = document.cookie;
	let user = getCookie("VideoPlayCookies");
	if(user){
		// var newTime = user;

		// // Skip video to new time.
		// player.seekTo(newTime);
		console.log("cookies : "+ user);
	}else{
		document.cookie = "VideoPlayCookies="+player.getCurrentTime()+"";
	}
	document.cookie = "VideoPlayCookies="+player.getCurrentTime()+"";
	
	if(!username && player.getCurrentTime() >=10.5){
				player.seekTo(0);
				popupform = false;

			}
	console.log("VideoPlay Cookies : "+ x)
	console.log(player.getDuration())
}

function formatTime(time){
    time = Math.round(time);

    var minutes = Math.floor(time / 60),
    seconds = time - minutes * 60;

    seconds = seconds < 10 ? '0' + seconds : seconds;

    return minutes + ":" + seconds;
}

function deleteCookies(){

	// Skip video to new time.
	player.seekTo(0);

}

function popUpSignIn(){
	$('#myVideo').modal('show');
}

//get cookies name
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}


  function onPlayerReady(event) {
    document.getElementById('existing-iframe-example').style.borderColor = '#FF6D00';
  }
//   function changeBorderColor(playerStatus) {
//     var color;
//     if (playerStatus == -1) {
//       color = "#37474F"; // unstarted = gray
//     } else if (playerStatus == 0) {
//       color = "#FFFF00"; // ended = yellow
//     } else if (playerStatus == 1) {
//       color = "#33691E"; // playing = green
//     } else if (playerStatus == 2) {
//       color = "#DD2C00"; // paused = red
//     } else if (playerStatus == 3) {
//       color = "#AA00FF"; // buffering = purple
//     } else if (playerStatus == 5) {
//       color = "#FF6DOO"; // video cued = orange
//     }
//     if (color) {
//       document.getElementById('existing-iframe-example').style.borderColor = color;
//     }
//   }
//   function onPlayerStateChange(event) {
//     changeBorderColor(event.data);
//   }

  		// window.onclick = () => {
		// 	console.log(player.playerInfo);
		// 	console.log(player);
		// 	if(player.playerInfo.currentTime >1){
		// 	alert("AAAA");
		// }
		// console.log(player);
		// alert(player.playerInfo.currentTime);
		// }
		// function loadDefaultListing(data, message) {
		// 	showMessage('<?php echo 'Login Account Successfully.'  ?>', 'success', '<?php echo 'Delete a Session'  ?>', 'user-plus');
		// }


	 $(document).ready(function(){
		$("#login").click(function(){
			
			var email = $('#email').val().trim();
			var password = $('#password').val().trim();
			fCallback = loadDefaultListing;
			console.log(email);
			console.log(password);
	        formData  = {
				command: 'clientLogin',
				password: password,
				Email: email,

			};
    	    ajaxSend(url, formData, method, fCallback, debug, bypassBlocking, bypassLoading, 0);
			

		})
	// 	vid2.ontimeupdate = function() {myFunction()};

	// // $(window).load(function()
	// // {
    // // 	$('#myVideo').modal('show');
	// // });

	 });

	 function close(){
		 console.log("AAA")
			document.getElementById("myVideo").classList.remove("show");
			document.getElementById("myVideo").classList.add("fade");
			document.getElementById("myVideo").style.display = 'none';
	 }
	 
	 function loadDefaultListing(data, message) {
		 console.log(data);
		 username = data.client;
		 
		 if(data.client){
			showMessage('Successful Logged in.', 'success', 'Update course detail', 'address-card',"");	
			document.getElementById("myVideo").classList.remove("show");
			document.getElementById("myVideo").classList.add("fade");
			document.getElementById("myVideo").style.display = 'none';
			
		 }else{		
			// document.getElementById("myVideo").classList.remove("fade");
			// document.getElementById("myVideo").classList.add("show");
			// document.getElementById("myVideo").style.display = 'block';
			$('#myVideo').modal('show');
			showMessage('Unsuccessful Logged in.', 'failed', 'Update course detail', 'address-card',"");	
			
		 }
		 console.log("BB")
		
	 }





	

// 	var video = document.getElementById("video");

// let timeStarted = -1;
// let timePlayed = 0;
// let duration = 0;
// // If video metadata is laoded get duration
// if(video.readyState > 0)
//   getDuration.call(video);
// //If metadata not loaded, use event to get it
// else
// {
//   video.addEventListener('loadedmetadata', getDuration);
// }


	function myFunction() {
		// Display the current position of the video in a p element with id="demo"
		document.getElementById("demo").innerHTML = vid2.currentTime;
	}
// // remember time user started the video
// function videoStartedPlaying() {
//   timeStarted = new Date().getTime()/1000;
//   console.log(timeStarted);
// }
// function videoStoppedPlaying(event) {
//   // Start time less then zero means stop event was fired vidout start event
//   if(timeStarted>0) {
//     var playedFor = new Date().getTime()/1000 - timeStarted;
//     timeStarted = -1;
//     // add the new number of seconds played
//     timePlayed+=playedFor;
//   }
//   document.getElementById("played").innerHTML = Math.round(timePlayed)+"";
//   // Count as complete only if end of video was reached
//   if(timePlayed>=duration && event.type=="ended") {
//     document.getElementById("status").className="complete";
//   }
// }

// function getDuration() {
//   duration = video.duration;
//   document.getElementById("duration").appendChild(new Text(Math.round(duration)+""));
//   console.log("Duration: ", duration);
// }

// video.addEventListener("play", videoStartedPlaying);
// video.addEventListener("playing", videoStartedPlaying);

// video.addEventListener("ended", videoStoppedPlaying);
// video.addEventListener("pause", videoStoppedPlaying);
	
</script>
<style>
#status span.status {
  display: none;
  font-weight: bold;
}
span.status.complete {
  color: green;
}
span.status.incomplete {
  color: red;
}
#status.complete span.status.complete {
  display: inline;
}
#status.incomplete span.status.incomplete {
  display: inline;
}
</style>
</html>

<?php include 'sharejs.php'; ?>


