<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.required:after {
    content:" *";
    color: red;
  }
  
</style>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" "width=device-width, initial-scale=1" />  
</head>

<body>

<h3><center><br>IEEE Electronic Copyright Submission Form</center></h3>

<div>
    
	<form action="https://ecopyright.ieee.org/ECTT/IntroPage.jsp" method="post">

<label for="fname">Conference Title</label>
<input type="text" name="PubTitle" value="2021 IEEE International Conference on Nanoelectronics, Nanophotonics, Nanomaterials, Nanobioscience & Nanotechnology (5NANO)" readonly>



<label class="required" for="fname">Paper Title</label>
<input type="text" id="fname" name="ArtTitle" placeholder="Paper Title" required>


<label class="required" for="fname">Name of Authors</label>
<input type="text" id="fname" name="AuthName" placeholder="Name of Authors" required>
<label class="required" for="fname">Paper ID</label>
<input type="number" name="ArtId" placeholder="Paper ID" required>

<label for="fname">Conference Code</label>
<input type="number" name="ArtSource" value="51638" readonly>

<label class="required" for="fname">Authors Email Address</label>
<input type="email" name="AuthEmail" placeholder="Authors Email Address" required>
<input type="hidden" name="rtrnurl" value="https://www.5nano2021.com/cr/sr.php">
<input name="Submit" type="submit" value="Submit Copyright">

  </form>
</div>

</body>
</html>
