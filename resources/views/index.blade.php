<!DOCTYPE HTML>
<html>
	<head>
		<title>Travellizer</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body id="top">

			<!-- Banner -->
			<!-- data-video is the video name without extension-->
				<section id="banner">
						<video width="400" autoplay muted>
							<source src="assets/smug.mp4">
						</video>
				</section>

            <!-- Login Modal -->
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

                <div id="id01" class="modal">
                
                    <form class="modal-content animate" action="php/login.php" method="POST"> <!-- make login.php -->
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal" >&times;</span>
                    </div>    
                    <div class="container">
                        <label for="uname"><h2><b>Username</b></h2></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label for="psw"><h2><b>Password</b></h2></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                            <br>
                        <button type="submit">Login</button>
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" style="background-color:red; float: right;">Cancel</button>
                        </div>
                    </form>
                </div>

            <!-- Main -->
				<div id="main">
					<div class="inner">

					<!-- Boxes -->
						<div class="thumbnails">

							<div class="fatbox">
								<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="assets/pic01.jpg" alt="" /></a>
								<div class="inner">
									<h3>Badabing</h3>
									<p>Badaboom</p>
									<a href="https://youtu.be/s6zR2T9vn2c" class="button fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>

							<div class="box">
								<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="assets/pic02.jpg" alt="" /></a>
								<div class="inner">
									<h3>Badabing</h3>
									<p>Badaboom</p>
									<a href="https://youtu.be/s6zR2T9vn2c" class="button style2 fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>

							<div class="box">
								<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="assets/pic03.jpg" alt="" /></a>
								<div class="inner">
									<h3>Badabing</h3>
									<p>Badaboom</p>
									<a href="https://youtu.be/s6zR2T9vn2c" class="button style3 fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>

							<div class="box">
								<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="assets/pic04.jpg" alt="" /></a>
								<div class="inner">
									<h3>Badabing</h3>
									<p>Badaboom</p>
									<a href="https://youtu.be/s6zR2T9vn2c" class="button style2 fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>
						</div>

					</div>
                </div>

			<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<h2>Wing</h2>
						<p>Wang</p>
					</div>
				</footer>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/jquery.poptrox.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
            <script src="js/main.js"></script>
            
            <script>
        // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

	</body>
</html>