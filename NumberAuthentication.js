window.onload=function(){
	render();
};

function render() {
	window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
	recaptchaVerifier.render();
	
}

  function phoneAuth() {
	
	var number="+91" + document.getElementById('number').value;
	firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function(confirmationResult){
		window.confirmationResult=confirmationResult;
		coderesult=confirmationResult;
		console.log(coderesult);
		alert("OTP sent Succesfully");
	});
}

function codeverify() {
	
	
	var code=document.getElementById('verificationcode').value;
	coderesult.confirm(code).then(function (result){
		alert("Succesfully verified");
		var user=result.user;
		console.log(user);
	})
} 