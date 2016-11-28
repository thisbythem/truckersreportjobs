<?php include("include/page-head.php"); ?>

<body class="user-entry-page">
  <div class="site-container">
    <?php include("include/site-header.php"); ?>

    <div class="user-entry-wrap">
      <form class="user-entry-form">
        <h2>Login</h2>
        <fieldset>
          <input type="text" placeholder="Your Email"/>
        </fieldset>
        <fieldset>
          <input type="email" placeholder="Your Password"/>
        </fieldset>
        <fieldset class="with-checkbox remember-me">
          <label><input type="checkbox" /> Remember Me</label>
        </fieldset>
        <fieldset class="form-actions">
          <button type="submit">Login</button>
        </fieldset>
        <fieldset class="form-links">
          <a href="/user-password-recover.php">Forgot Password?</a>
          <small><i>or</i></small>
          <a href="/user-register.php">Register</a>
        </fieldset>
      </form>
    </div>

    <?php include("include/site-footer.php"); ?>
  </div>
</body>
