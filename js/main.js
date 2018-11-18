function addprof() {
  console.log("Add profile clicked");
  document.getElementById('active').innerHTML = 'Add Profile';
  document.getElementById('title').innerHTML = 'Add Profile';
  var output = ``;
  output += `
        <h5>Welcome to Add Profile</h5>
        <form action="">
        	<div class="form">
          <fieldset>
            <label for="">First Name: </label>
            <input type="text" id="fname" name="fname" required="">
          </fieldset>
          <fieldset>
            <label for="">Last Name: </label>
            <input type="text" id="lname" name="lname">
          </fieldset>
          <fieldset>
            <label for="">Email: </label>
            <input type="text" id="email" name="email">
          </fieldset>
          <fieldset>
            <label for="">Phone</label>
            <input type="text" id="phone" name="phone">
          </fieldset>
          <fieldset>
            <label for="">Address: </label>
            <input type="text" id="address" name="address">
          </fieldset>
          <button type="submit" onclick="addNewWorker(e)" name="add_worker">Add New Worker</button>


        </div>

      </form>

  			</div>
`;
  document.getElementById('inner').innerHTML = output;
}

function addNewWorker(e) {
  e.preventDefault();
  var fname = document.getElementById('fname').value;
  var lname = document.getElementById('lname').value;
  var email = document.getElementById('email').value;
  var phone = document.getElementById('phone').value;
  var address = document.getElementById('address').value;
  console.log("New worker added"+lname+fname+email+phone+address);
}

function home() {
  console.log("Home clicked");
  document.getElementById('active').innerHTML = '';
  document.getElementById('title').innerHTML = 'Overview';
  var output = ``;
  output += `<h5>Welcome to FARM A.I</h5>
  <p><span>Please enter your
  <input type="text" placeholder="farm name">
  <input type="file">
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


`;
  document.getElementById('inner').innerHTML = output;
}

function uploadHistory() {
  console.log("History upload clicked");
  document.getElementById('active').innerHTML = 'Upload Data';
  document.getElementById('title').innerHTML = 'History Uploading';
  var output = ``;
  output += `
          <h5>Please note that the data to be imported must be in a CSV format</h5>
  				<p><span>Import:
  				<input type="file" name="history" oninput="doUploadHistory()"></span>
  			<br>
`;
  document.getElementById('inner').innerHTML = output;
}

function doUploadHistory() {
  console.log("do Upload is clicked");
  document.getElementById('inner').innerHTML = output;
}

function farmName() {
  console.log("Farm Name Entered");
  document.getElementById('farmName').innerHTML = '';
}
