<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.15.4/firebase-app.js"></script>
<!--Data Baglama-->
<script src="https://www.gstatic.com/firebasejs/7.15.4/firebase-database.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyDz1-JUkyIlIA2-MAl0Pr2r4Fq2n0B5_Zw",
    authDomain: "my-test-project-6c950.firebaseapp.com",
    databaseURL: "https://my-test-project-6c950.firebaseio.com",
    projectId: "my-test-project-6c950",
    storageBucket: "my-test-project-6c950.appspot.com",
    messagingSenderId: "92102387860",
    appId: "1:92102387860:web:5da15e0a774c1ea2c26c81"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  var myName = prompt("Enter You Name : ");

  function sendMessage() {
var messaage = document.getElementById("messaage").value;


  firebase.database().ref("messages").push().set({
    "sender": myName,
    "message": message
  });

    return false;
  }
</script>
<form onsubmit="return sendMessage();">
  <input id="messaage" placeholder="Mesaj Yaz : " autocomplete="off">

  <input type="submit">
</form>
