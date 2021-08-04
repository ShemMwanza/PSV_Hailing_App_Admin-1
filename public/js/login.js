function login(){
  let email = document.getElementById('email_login').value;
  let password = document.getElementById('password_login').value;
  // console.log(email);
  // console.log(password);
  firebase.auth().signInWithEmailAndPassword(email, password)
  .then((userCredential) => {
    // Signed in
    var user = userCredential.user;
    // ...
    window.location.href = "/test";

  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorMessage); 
  });
 
}

function register(){
  let email = document.getElementById('email_sign_up').value;
  let password = document.getElementById('password_sign_up').value;
  // console.log(email);
  // console.log(password);
  firebase.auth().createUserWithEmailAndPassword(email, password)
  .then((userCredential) => {
    // Signed in 
    var user = userCredential.user;
    // ...
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorMessage); 
    // ..
  });
  //console.log("Account Creation Successful");
}

function logout(){
    firebase.auth().signOut().then(() => {
    // Sign-out successful.
    console.log("Logged Out")
  }).catch((error) => {
    // An error happened.
    console.log("Not Logged Out");
  });
}
