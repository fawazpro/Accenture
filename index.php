<?php require "functions/header.php"; ?>

        <?php require "functions/dashboard.php"; ?>
		
		<div class="main">
			<h4 id="title">Overview</h4>
			<div class="inner" id="inner">
				<h5>Welcome to FARM A.I</h5>
				<p><span id="farmName">Please enter your
				<input type="text" onchange="farmName()" placeholder="farm name">
				</span>
			<br>
				Where do you want to start?
				</p>
				<div class="grid">
				<button onclick="viewProfiles()"><div class="boxLeft">
					<img src="images/profile.png" alt="profile">
					<br><span>Manage Workers Profile</span>
				</div></button>

				<button onclick="newCrop()"><div class="boxRight">
					<img src="images/tree.png" alt="crop">
					<br><span>Define a new crop</span>
				</div></button>

				<div class="clearfix"></div>

				<button onclick="uploadHistory()"><div class="boxLeft">
					<img src="images/db.png" alt="History">
					<br><span>Upload Data</span>
				</div></button>

				<button onclick="recycle()"><div class="boxLeft">
					<img src="images/recycle.png" alt="Recycle">
					<br><span>Recycle Waste</span>
				</div></button>

				<button onclick="forecast()"><div class="boxLeft">
					<img src="images/predict.png" alt="predict">
					<br><span>Forecast Waste</span>
				</div></button>
				</div>

			</div>

		</div>
		<div class="clearfix"></div>
	</div>


	<footer>
		<p class="footer">Designed With <img src="images/love.png" alt="love"> from FUNAAB CSC Dept &copy 2018</p>
	</footer>

</body>

</html>
