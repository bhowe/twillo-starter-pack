<!DOCTYPE html>
<html>
<body>

<h2>TWILLO SMS form mockup</h2>

<form action="controller.php" method = "POST">
 
  <br>
  ToCountry:<br>
  <input type="text" name="ToCountry" value="US">
  <br>
  ToState:<br>
  <input type="text" name=" ToState" value="MS">
  <br>
  SmsMessageSid:<br>
  <input type="text" name="SmsMessageSid" value="<?php echo uniqid('', true); ?>">
  <br> NumMedia:<br>
  <input type="text" name="NumMedia" value="0">
  <br> ToCity:<br>
  <input type="text" name="ToCity" value="JACKSON">
  <br>  FromZip:<br>
  <input type="text" name=" FromZip" value="39232">
  <br> SmsSid:<br>
  <input type="text" name="SmsSid" value="<?php echo uniqid('', true); ?>">
  <br> FromState:<br>
  <input type="text" name="FromState" value="MS">
  <br> SmsStatus:<br>
  <input type="text" name="SmsStatus" value="recieved">
  <br> FromCity:<br>
  <input type="text" name="FromCity" value="JACKSON">
  <br>  Body:<br>
  <input type="text" name=" Body" value="this is a test">
  <br>
  <br> FromCountry:<br>
  <input type="text" name="FromCountry" value="US">
  <br><br> TO:<br>
  <input type="text" name="To" value="+601233232">
  <br><br>  ToZip:<br>
  <input type="text" name="ToZip" value="39232">
  <br><br>  MessageSid:<br>
  <input type="text" name=" MessageSid" value="<?php echo uniqid('', true); ?>">
  <br><br>  AccountSid:<br>
  <input type="text" name="AccountSid" value="<?php echo uniqid('', true); ?>"
  <br><br> From:<br>
  <input type="text" name="From" value="+16013261597">
  <br><br>  ApiVersion:<br>
  <input type="text" name="ApiVersion" value="2010-04-01">
  <br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the twillo sms data will be  posted to your local host "/controller.php".</p>

</body>
</html>
