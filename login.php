<?php
include_once 'navbar.php'
?>
<head>
    <link rel="stylesheet" href="login.css">
</head>

<body>
        <form action="include/login.inc.php" method="POST">
            <div class="mb-3 mt-3">
              <label for="Username" class="form-label">User Name/Email ID</label>
              <input type="text" name="Username" class="form-control" id="Username" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">Your prefered username</div>
            </div>
            <div class="mb-3 mt-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="mypass" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
</body>