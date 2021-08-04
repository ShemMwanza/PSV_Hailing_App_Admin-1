<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test</title>
</head>
<body>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<button type="button" onclick="logout()">Logout</button>

	<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
        <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

		<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
		<!-- <script src="/__/firebase/8.8.1/firebase-app.js"></script> -->

		<!-- Add Firebase products that you want to use -->
		<!-- <script src="/__/firebase/8.8.1/firebase-auth.js"></script> -->
		  
        <!-- <script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-database.js"></script> -->
        
        <script type="text/javascript" src="{{ url('/js/firebase-cred.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/login.js') }}"></script>

        <script type="text/javascript">
        	
        		firebase.auth().onAuthStateChanged(function(user) {
			  if (user) {
			    // User is signed in.
			    // var isAnonymous = user.isAnonymous;
			    // var uid = user.uid;
			    // var userRef = app.dataInfo.child(app.users);
			    
			    // var useridRef = userRef.child(app.userid);
			    
			    // useridRef.set({
			    //   locations: "",
			    //   theme: "",
			    //   colorScheme: "",
			    //   food: ""
			    // });
			    
			    let driverDataRef = firebase.database().ref('users');
			    //console.log(driverDataRef);
	        	driverDataRef.on('value', (snapshot) => {
	        		console.log(snapshot);
	        		const data = snapshot.val();
	        		console.log(data);
	        	}, function (error) {
				   console.log("Error: " + error.code);
				});

			    console.log("Yeeee");

			  } else {
			    // User is signed out.
			    // ...
			     console.log("Neee");
			  }
			  // ...
			});

   //          const dbRef = firebase.database().ref();
			// dbRef.child("users").child("driver").get().then((snapshot) => {
			//   if (snapshot.exists()) {
			//     console.log(snapshot.val());
			//   } else {
			//     console.log("No data available");
			//   }
			// }).catch((error) => {
			//   console.error(error);
			// });
        	// let driverDataRef = firebase.database().ref('Users/Driver');
        	// driverDataRef.on('value', (snapshot) => {
        	// 	console.log("Happening");
        	// 	const data = snapshot.val();
        	// 	console.log(data);
        	// });
        </script>

</body>
</html>