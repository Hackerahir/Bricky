<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

      <form>
		  <h1>enter number</h1>
		  <input type="text" id="number" >
		  <div id="recaptcha-container" ></div>
		  <button type="button" onclick="phoneAuth();">send code</button>
	</form>
	<br>
	<h1>enter the code</h1>
	<form>
		<input type="text" id="verificationcode">
		<button type="button" onclick="codeverify();">verify</button>
	</form>
    
	

        

  <script  type="application/javascript" src="https://www.gstatic.com/firebasejs/7.17.2/firebase-app.js"></script>
  <script type="application/javascript" src="https://www.gstatic.com/firebasejs/7.17.2/firebase-analytics.js"></script>
  <script type="application/javascript" src="https://www.gstatic.com/firebasejs/7.17.2/firebase-auth.js"></script>
  <script type="application/javascript" src="https://www.gstatic.com/firebasejs/7.17.2/firebase-firestore.js"></script>
	
 
    <script>
   
		const firebaseConfig = {
  apiKey: "AIzaSyBZxq7dAAdMEsG6OrkhmYgXtbBXnEcRudg",
  authDomain: "bricky-266813.firebaseapp.com",
  databaseURL: "https://bricky-266813.firebaseio.com",
  projectId: "bricky-266813",
  storageBucket: "bricky-266813.appspot.com",
  messagingSenderId: "787492591280",
  appId: "1:787492591280:web:3e618e987172dbd2464d75",
  measurementId: "G-XNLHS64K0M"
};
    firebase.initializeApp(firebaseConfig);
  </script>
	<script type="application/javascript" src="NumberAuthentication.js"></script>
    
</body>
</html>