<!DOCTYPE html>
<html lang="en">
<center>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Create Account- Rejuvenate Ganga</title>
   <link rel="stylesheet" href="../cssfolder/styles.css">
</head>
<nav class="navbar">
   <ul>
       <li><a href="htmlfolder/contact.html">Contact Us</a></li>
       <li><a href="aboutme.html">About Us</a></li>
       <li><a href="supportus.html">Support Us</a></li>
       <li><a href="relatedlinks.html">Related Links</a></li>
       <li><a href="ourmission.html">Our Mission</a></li>
       <li><a href="aboutus.html">About Ganges</a></li>
       <li><a href="../index.html">Home</a></li>
    </ul>
</nav>
<body>
<section class="column2">
   <h2 class="Account">Create Account</h2>
   <form action="submit_form.php" method="post">
       <label for="firstname">First Name *</label>
       <input type="text" id="firstname" name="firstname" placeholder="First Name" required>


       <label for="lastname">Last Name *</label>
       <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>


       <label for="email">Email *</label>
       <input type="email" id="email" name="email" placeholder="Your Email" required>


       <label for="city">City *</label>
       <input type="text" id="city" name="city" placeholder="Enter City">


       <label for="state">State *</label>
       <input type="text" id="state" name="state" placeholder="Enter State">


       <label for="country">Country *</label>
       <input type="text" id="country" name="country" placeholder="Enter country">


       <label for="password">Password *</label>
       <input type="password" id="password" name="password" placeholder="Enter password">


       <label for="re-password">Re-enter Password *</label>
       <input type="password" id="re-password" name="re-password" placeholder="Re-enter password">


       <button class="btn" action="submit_form.php" type="submit" value="Submit">Continue</button>
       <br><br><br><br>
  <p>By continuing, you agree to our <a href="#">Conditions of Use</a> and <a href="#">Privacy Notice</a>.</p>
  <p class="help">Need help?</p>
  <ul class="other">
      <li><a href="#">Forgot your password?</a></li>
      <li><a href="#">Other issues with Sign-In</a></li>
  </ul>
  <p>Already have an account? <a href="signin.html" class="sign-in-link">Sign in</a></p>
   </form>
</section>
   <script src="../javascriptfolder/form_validation.js"></script>
</div>
<script src="../javascriptfolder/index.js"></script>
<footer>
   <p>&copy; 2024 Rejuvenate Ganga. All Rights Reserved.</p>
</footer>
</center>
</body>
</html>
