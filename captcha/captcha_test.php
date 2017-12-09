<?php
//https://www.phpcaptcha.org/documentation/quickstart-guide/

if (isset($_POST['submit'])) {
  include_once 'securimage/securimage.php';
	$securimage = new Securimage();

  $text_aleatori = "fdña908upaeñ";

  if ($securimage->check($_POST['captcha_code']) == false) {
  	  // the code was incorrect
  	  // you should handle the error so that the form processor doesn't continue
    	// or you can use the following code if there is no validation or you do not know how
  	  echo "The security code entered was incorrect.<br /><br />";
  	  echo"Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
  	  exit;
  	} else {
      echo "ok!";
    }
exit;
}
?>

<form action="captcha_test.php" method="POST">
  <img id="captcha" src="securimage/securimage_show.php?captcha_code=<?php echo $textaleatori; ?>" alt="CAPTCHA Image" />
  <input type="text" name="captcha_code" size="10" maxlength="6" /> 2
	<a href="#"
     onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>

<button name="submit" type="submit">Submit</button>
</form>
