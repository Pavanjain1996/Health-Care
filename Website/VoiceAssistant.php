<?php
include('Header.php');
?>
<title>Voice Assistant</title>
<style>
body{
	background:url('images/background.png');
}
#frame{
	border:10px solid rgb(200,150,180);
	border-radius:20px;
}
</style>
<div class="container-fluid">
<iframe
    allow="microphone;"
    width="100%"
    height="75%"
    src="https://console.dialogflow.com/api-client/demo/embedded/8e66dc36-8d0f-43ba-91c4-54735adff9b8" id="frame">
</iframe>
</div>
<br/>
<?php
include('Footer.php');
?>