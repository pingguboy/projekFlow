<html>
<head>
  <title>Firebase Login</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<!-- Login -->
  <div id="login_div" class="main-div">
    <h3>projekFlow Login</h3>
    <input type="email" placeholder="Email..." id="email_field" />
    <input type="password" placeholder="Password..." id="password_field" />

    <button onclick="login()">Login to Account</button>
  <br>
    <button onclick="register()">New User?</button>
  </div>

  <div id="user_div" class="loggedin-div">    <!-- basically another segment -->
    <h3>Welcome User</h3>
    <p id="user_para">Welcome to Firebase web login Example. You're currently logged in.</p>
    <button onclick="logout()">Logout</button>
  </div>

  <!-- Signup -->
  <div id="newuser_div" class="register-div">    
    <h3>Hello! Welcome to projekFlow</h3>
    <p id="newuser_para">We would like to get to know you more.</p>
    <input type="text" placeholder="Full name..." id="name_field" />
    <input type="text" placeholder="New Matric Number..." id="matric_field" />
    <input type="email" placeholder="Email..." id="newemail_field" />
    <input type="password" placeholder="Password..." id="newpassword_field" />
    <!--<input type="category" placeholder="Student / Staff..." id="category_field" />-->
    <label>Select your category:</label> </br>
    <select id="category_field">
      <option selected value="Student">Student</option>
      <option value="Staff">Staff</option>
      <option value="Outside">Outside</option>
    </select>
    <input type="phonenumber" placeholder="Phone Number..." id="phone_field" />
    <button type="button" onclick="submit()">Submit</button>  
    <br>
    <button type="button" onclick="backtologinpage()">Back to Login</button>
  </div>



 <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
<!-- Load Firestore library -->
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-firestore.js"></script>


<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
       <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
        
       <!-- Loading firebase authentication library -->
        <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyATa9yGV000iVrO-_d-z2fToEHWNEC7r10",
    authDomain: "fir-php-4bdd0.firebaseapp.com",
    databaseURL: "https://fir-php-4bdd0.firebaseio.com",
    projectId: "fir-php-4bdd0",
    storageBucket: "fir-php-4bdd0.appspot.com",
    messagingSenderId: "235554520478",
    appId: "1:235554520478:web:fa027bd1f5a0d59cfd6a8f",
    measurementId: "G-3GGPTN9XKD"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  // var db = firebase.firestore(); 
</script>

<!-- // make auth and firestore references-->
<!-- const auth = firebase.auth() -->
<!-- const db = firebase.firestore() -->
<!-- //update firestore settings -->
<!-- db.settings({timestampsInSnapshots: true}); -->

  <script src="assets/js/index.js"></script>
  <script src="assets/js/auth.js"></script>

</body>
</html>