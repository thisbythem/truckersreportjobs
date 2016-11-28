<?php include("include/page-head.php"); ?>

<body class="user-entry-page">
  <div class="site-container">
    <?php include("include/site-header.php"); ?>

    <div class="user-entry-wrap">
      <form class="user-entry-form">
        <h2>Register</h2>
        <fieldset>
          <input type="text" placeholder="Your Email"/>
        </fieldset>
        <fieldset>
          <input type="email" placeholder="Your Password"/>
        </fieldset>
        <fieldset>
          <input type="email" placeholder="Confirm Password"/>
        </fieldset>
        <fieldset class="form-actions">
          <button type="submit">Register</button>
        </fieldset>
        <fieldset class="form-links">
          <a href="/user-login.php">Login</a>
        </fieldset>
      </form>
    </div>

    <?php include("include/site-footer.php"); ?>
  </div>
</body>
