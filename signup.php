<?php

include_once 'navbar.php'

?>
<head>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<form action="include/signup.inc.php" method="POST">
        <!-- Name -->
        <div class="mb-3 mt-3">
          <label for="Name" class="form-label">Full Name</label>
          <input type="text" name="Fullname" class="form-control" id="Name" aria-describedby="emailHelp">
        </div>  

        <!-- Age -->
        <div class="mb-3 mt-3">
          <label for="Age" class="form-label">Age</label>
          <input type="number" name="age" class="form-control" id="Age" aria-describedby="emailHelp">
        </div>  
        <!-- State -->
        <!-- <div class="mb-3 mt-3">
          <label for="State" class="form-label">State</label>
          <input type="text" name="state" class="form-control" id="State" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Your resident state</div>
        </div> -->
        <!-- Email -->
        <div class="mb-3 mt-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <!-- password -->
        <div class="mb-3 mt-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="mypass" class="form-control" id="exampleInputPassword1">
        </div>
        <!-- Username -->

        <div class="mb-3 mt-3">
          <label for="Username" class="form-label">User Name</label>
          <input type="text" name="Username" class="form-control" id="Username" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Your prefered username</div>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>