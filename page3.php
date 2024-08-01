<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  padding: 20px;
}

div {
  background-color: white;
  padding: 20px;
  border: 1px solid #888;
  width: 300px;
}

p, button {
  display: block;
  margin-bottom: 10px;
}

button {
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
</style>
</head>
<body>

<div id="myDiv">
  <p id="source"></p>
  <p id="destination"></p>
  <button onclick="calculateAmount()">Calculate Amount</button>
</div>

<script>
window.onload = function() {
  var source = localStorage.getItem("source");
  var destination = localStorage.getItem("destination");
  document.getElementById("source").textContent = "Source: " + source;
  document.getElementById("destination").textContent = "Destination: " + destination;
}

function calculateAmount() {
  // Add your calculation logic here
  alert("Amount calculated!");
}
</script>

</body>
</html>
