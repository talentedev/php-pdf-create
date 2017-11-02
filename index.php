<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PDF Creator</title>
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #4CAF50;
}

.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}

/*custom style*/

	</style>
</head>
<body>
	<div class="container">  
	  <form id="contact" action="http://maisonengros.com/erratum/pdf.php" method="post">
	    <!-- <h3>Colorlib Contact Form</h3>
	    <h4>Contact us for custom quote</h4> -->
	    <fieldset>
	      <input name="field_1" placeholder="Jour et Mois Début:" type="text" tabindex="1" required autofocus>
	    </fieldset>
	    <fieldset>
	      <input name="field_2" placeholder="Jour et Mois Fin:" type="text" tabindex="2" required>
	    </fieldset>
	    <fieldset>
	      <input name="field_3" placeholder="Année:" type="text" tabindex="3" required>
	    </fieldset>
	    <fieldset>
	      <input name="field_4" placeholder="Page de circulaire:" type="text" tabindex="4" required>
	    </fieldset>	    
	    <fieldset>
	      <input name="field_5" placeholder="Erratum Ligne 1:" type="text" tabindex="4" required>
	    </fieldset>
	    <fieldset>
	      <input name="field_6" placeholder="Erratum Ligne 2:" type="text" tabindex="4" required>
	    </fieldset>
	    <fieldset>
	      <input name="field_7" placeholder="Erratum Ligne 3:" type="text" tabindex="4" required>
	    </fieldset>
	    <fieldset>
	      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending"> Create PDF</button>
	    </fieldset>
	    <!-- <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p> -->
	  </form>
	</div>	
</body>
</html>