// Firebase App (the core Firebase SDK) is always required and
// must be listed before other Firebase SDKs
var firebase = require("firebase/app");

// Add the Firebase products that you want to use
require("firebase/auth");

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
var firebaseConfig = {
apiKey: "AIzaSyAlUP4hytIAMtzBMfWQL0Eb8QwytcBWGZk",
    authDomain: "psvhailingapp.firebaseapp.com",
    databaseURL: "https://psvhailingapp-default-rtdb.firebaseio.com",
    projectId: "psvhailingapp",
    storageBucket: "psvhailingapp.appspot.com",
    messagingSenderId: "917593455964",
    appId: "1:917593455964:web:5d57f01b1247dc5ef11599",
    measurementId: "G-LKEWJ11K47"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// Get a reference to the database service
  var database = firebase.database();

console.log("Firebase Started");

