<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  padding: 20px;
}

form {
  background-color: white;
  padding: 20px;
  border: 1px solid #888;
  width: 300px;
}

label, input, button {
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

<form id="myForm" onsubmit="return mySubmitFunction()" >

  
  <label for="source">Source:</label>
  <input type="text" id="source" name="source">
  <label for="destination">Destination:</label>
  <input type="text" id="destination" name="destination">
  <button type="submit">Submit</button>
</form>

<script>
function mySubmitFunction() {
  var source = document.getElementById("source").value;
  var destination = document.getElementById("destination").value;
  localStorage.setItem("source", source);
  localStorage.setItem("destination", destination);
  window.location.href = "page3.php";
  return false;
}
</script>

</body>
</html>
