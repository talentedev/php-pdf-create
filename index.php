<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PDF Creator</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">  
	  <form id="contact" action="pdf.php" method="post">
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