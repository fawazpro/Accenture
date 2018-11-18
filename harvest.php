<?php require "functions/header.php"; ?>

        <?php require "functions/dashboard.php"; ?>
		
		<div class="main">
			<h4 id="title">Harvest Details</h4>
			<div class="inner" id="inner">
				        <h5>Select a crop to add or edit its details</h5>
                        <Select>
                            <option value="cucumber red">Cucumber Red</option>
                            <option value="cucumber grey">Cucumber Grey</option>
                            <option value="cucumber yellow">Cucumber Yellow</option>
                            <option value="cucumber green">Cucumber Green</option>
                            <option value="cucumber blue">Cucumber Blue</option>
                        </Select>

                        <div class="grid" id="hdetails">
                            <ul>
                                
                                <li><span>Crop ID:</span> Cucumber Red</li>
                                <li><span>Harvest Time:</span> 45 days</li>
                                <li><span>Validity Period:</span> 30 days</li>
                                <li><span>Last Harvest:</span> 18/11/2018</li>
                                <li><span>Qty Planted:</span> 60</li>
                                <li><span>Qty Harvested:</span> 50</li>
                                <li><span>Average Qty Harvested since First Harvest:</span>45</li>
                                <li><span>Next Harvest Forecast:</span> 49</li>
                            </ul>
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
