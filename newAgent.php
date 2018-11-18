<?php require "functions/header.php"; ?>

        <?php require "functions/dashboard.php"; ?>
		
		<div class="main">
			<h4 id="title">New Agent Contact</h4>
			<div class="inner" id="inner">
				        <h5>Add New Agent</h5>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form">
                        <fieldset>
                            <label for="">Company Name: </label>
                            <input type="text" id="comname" name="comname" required="">
                        </fieldset>
                        <fieldset>
                            <label for="">Specialization: </label>
                            <input type="text" id="sp" name="sp" required="">
                        </fieldset>
                        <fieldset>
                            <label for="">Email: </label>
                            <input type="email" id="email" name="email" required="">
                        </fieldset>
                        <fieldset>
                            <label for="">Phone</label>
                            <input type="tel" id="phone" name="phone" required="">
                        </fieldset>
                        <fieldset>
                            <label for="">Address: </label>
                            <input type="text" id="address" name="address" required="">
                        </fieldset>
                        <input type="submit" value="Add New Agent" name="newAgent">
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
