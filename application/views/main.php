<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>MorseIt | AbneDite</title>
	<link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#" id="hometog">MorseIt</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#" id="abouttog">About</a>
	      </li>

	    </ul>
	  </div>
	</nav><br>
	<br>
	<br>

	<div class="container" id="home">
		<div class="row justify-content-md-left">
			<div class="col-md-6">
					<form class="" action="index.html" method="post">
						<div class="form-group">
							<label for="str">Enter text to convert</label>
							<input type="text" id="stretr" class="form-control">
						</div>
					</form>

		</div>
	</div>
	<div class="row justify-content-md-left">
		<div class="col-md-6">
			<div id="alert"></div>
		</div>
	</div>
	<div class="row justify-content-md-left">
		<div class="col-md-4">
			<div class="form-group">
				<button type="button" class="btn btn-primary" id="convert">Convert</button>
				<button type="button" class="btn btn-danger" id="copymorse">Copy Morse Code</button>
			</div>
		</div>
	</div>
<div class="row justify-content-md-left" id="response">
	<div class="col-md-6">
		<div class="card">
  <div class="card-body" id="resbody" style="font-size: 30px;">
    
  </div>
</div>
	</div>
</div>
</div>
<div class="container" id="about">
	<div class="row justify-content-md-left">
		<div class="col-md-6">
			<blockquote><h1 style="font-family: cursive;">About</h1></blockquote>
			<h5>Developed by <a href="https://www.facebook.com/rushikesh.akhare.75">Rushikesh Akhare</a></h5>
			<p><a href="https://www.abnedite.tech" style="text-decoration: none;">AbneDite Technologies.</a></p>
		</div>
	</div>
</div>
<script src="assets/jquery.min.js"></script>
<script src="assets/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#copymorse").hide();
		$("#response").hide();
		$("#copymorse").removeClass();
		$("#about").hide();
    $("#copymorse").addClass('btn btn-danger');
    $("#convert").attr('disabled','disabled');
    $("#stretr").keyup(function(event) {
    	if($("#stretr").val() == "")
    	{
    		$("#convert").attr('disabled','disabled');
    	}
    	else
    	{
    		$("#convert").removeAttr('disabled');
    	}
    });
    $("#hometog").click(function(){
    	$("#about").hide('animated');
    	$("#home").show('animated');
    });
    $("#abouttog").click(function(){
    	$("#home").hide('animated');
    	$("#about").show('animated');
    });
		$('#convert').click(function(event){
			event.preventDefault();
			$("#response").hide('animated');
			$("#copymorse").hide('animated');
    		$("#copymorse").removeClass();
    $("#copymorse").addClass('btn btn-danger');
			if($("#stretr").val() == "")
				{
					$("#alert").removeClass();
					$("#alert").addClass('alert alert-danger');
					$("#alert").html('Please enter a string');
				}
			else
			{
				$("#alert").removeClass();
					$("#alert").html('');
					$.ajax({
						url: 'getmorse',
						type: 'POST',
						dataType: 'json',
						data: {stretr: $("#stretr").val()},
					})
					.done(function(resp) {
						if(resp[0] == '0671bc469f31a7f408956446bef25bca')
						{
							$("#alert").removeClass();
					$("#alert").addClass('alert alert-danger');
					$("#alert").html('Please enter a string');			
						}
						else if(resp[0] == '69f31a7f408956446bef25bc0671bc4a')
						{
							$("#copymorse").show('animated');
							$("#response").show('animated');
							$('#resbody').html(resp[1]);
						}
					})
					.fail(function() {
						
					})
					.always(function() {
						
					});
					
			}
		});
		
		
		
	});

	document.getElementById("copymorse").addEventListener("click", function() {
    copyToClipboard(document.getElementById("resbody"));
    $("#copymorse").removeClass();
    $("#copymorse").addClass('btn btn-success');
});

function copyToClipboard(elem) {
	  // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
    	  succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
    
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}
</script>
</body>
</html>
