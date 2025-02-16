<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Create Student Account</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">Full Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Section</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="number" name="email" id="number" placeholder="Email" required>
            <label for="email">LRN</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="CREATE" name="signUp">
      </form>
      <p class="or">
        or
      </p>
      <div class="links">
        <p>Already got Student Acc?</p>
        <button id="signInButton">Log In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Student Log In</h1>
        <form method="post" action="register.js">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="number" name="email" id="email" placeholder="Email" required>
              <label for="email">LRN</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Refresh</a>
          </p>
         <input type="submit" class="btn" value="Log In" name="signIn">
        </form>
        <p class="or">
          or
        </p>
        <div class="links">
          <p>Don't have Account?</p>
          <button id="signUpButton">Sign Up</button>
          <br>
      </div>
      <script src="script.js"></script>
</body>
</html>
