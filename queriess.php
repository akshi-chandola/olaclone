<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border: none;
}

#myForm {
  display: none;
  background-color: #f1f1f1;
  padding: 20px;
  border: 1px solid #888;
  width: 300px;
}

#myForm form {
  display: flex;
  flex-direction: column;
}

#myForm label, #myForm select, #myForm input, #myForm button {
  margin-bottom: 10px;
}

#myForm input[type="submit"], #myForm button {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border: none;
}

#popup {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}

#popup-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: auto;
  height: auto;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  transition: 1.1s ease-out;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<button id="openFormButton" onclick="myFunction()">Open Form</button>

<div id="myForm">
  <form onsubmit="return mySubmitFunction()">
    <label for="query">Choose a query:</label>
    <select id="query" name="query">
        <option value="selectQuery">Select Query</option>
      <option value="driverDenied">Driver Denied ride</option>
      <option value="payment">Query regarding Payment</option>
      <option value="fareHigh">Cab fare charged too high</option>
      <option value="wrongDest">Wrong Destination</option>
      <option value="other">Other</option>
    </select>
    <br><br>
    <input type="submit">
    <button type="button" onclick="myFunction()">Back</button>
  </form> 
</div>

<div id="popup">
  <div id="popup-content">
    <span class="close" onclick="closePopup()">×</span>
    <p>Thank you for reaching us. We will get back to you shortly.</p>
  </div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myForm");
  var y = document.getElementById("openFormButton");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}

function mySubmitFunction() {
  var popup = document.getElementById("popup");
  popup.style.display = "block";
  return false;
}

function closePopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "none";
}
</script>

</body>
</html>