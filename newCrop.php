<?php require "functions/header.php"; ?>

        <?php require "functions/dashboard.php"; ?>
		
		<div class="main">
			<h4 id="title">New Crop</h4>
			<div class="inner" id="inner">
				        <h5>Define a New Crop</h5>
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form">
                        <fieldset>
                            <label for="">Crop Unique Name: </label>
                            <input type="text" id="cname" name="cname" required="">
                        </fieldset>
                        <fieldset>
                            <label for="">Seeding to first Harvest:</label>
                            <input type="text" id="fharvest" name="fharvest" required="">
                        </fieldset>
                        <fieldset>
                            <label for="">Validity Period: </label>
                            <input type="text" id="vperiod" name="vperiod" required="">
                        </fieldset>
                        
                        <input type="submit" value="Add New Crop Profile" name="newCrop">
                        </div>
                        
                    </form>


  			</div>
		</div>
		<div class="clearfix"></div>
	</div>


	<footer>
		<p class="footer">Designed With <img src="images/love.png" alt="love"> from FUNAAB CSC Dept &copy 2018</p>
	</footer>

</body>

</html>
