<?php  
session_start();
include "style1.css "; include "navtest.php";?>
<div class="container">
<form action="test.php" method="post">
<fieldset>
<input type="text" name="Name" placeholder="Full name" id="namelabel" required ><br><br>
<input type="text" name="Phone" placeholder="Phone number" required><br><br>
<input type="text" name="ID" placeholder="National ID" required><br><br>
<input type="text" name="email" placeholder="Email address" required><br><br>
<input type="password" name="pass" placeholder="Password" required maxlength="30" required><br><br>
<input type ="password" name="confirm" placeholder="Confirm Password" required maxlength="30" required> <br><br>
<button type="submit">Sign up</button>
Already have an account?<button type="submit" class="button" onclick="window.location.href='/signin1.php'">Sign in</button>
</fieldset>
</form>

</div>
