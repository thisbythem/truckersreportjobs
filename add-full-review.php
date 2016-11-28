<?php include("include/page-head.php"); ?>

<body class="add-full-review">
  <div class="site-container">
    <?php include("include/site-header.php"); ?>

    <div class="add-full-reivew-wrap">
      <div class="container narrow">
        <h2>Review an Employer</h2>
        <form class="form-add-review-salary">
          <fieldset class="site-search">
            <label>Company Name</label>
            <p><input type="text" /></p>
            <div class="nav-search-results search-results-wide">
              <ul class="landing-search-results">
                <li>
                  <a href="/">
                    <span>Swift Transportation</span>
                    <small class="landing-search-count">17,961 Trucks</small>
                  </a>
                </li>
                <li>
                  <a href="/">
                    <span>Kenan Advantage Group (KAG)</span>
                    <small class="landing-search-count">17,961 Trucks</small>
                  </a>
                </li>
                <li>
                  <a href="/">
                    <span>Con-way</span>
                    <small class="landing-search-count">17,961 Trucks</small>
                  </a>
                </li>
                <li>
                  <a href="/">
                    <span>CR England</span>
                    <small class="landing-search-count">17,961 Trucks</small>
                  </a>
                </li>
              </ul>
            </div>
          </fieldset>

          <?php include("include/add-review.php"); ?>

          <fieldset class="form-actions">
            <button type="submit">Next</button>
          </fieldset>

          <?php include("include/add-salary.php"); ?>

          <fieldset class="form-actions">
            <button type="submit">Submit</button>
          </fieldset>
        </form>
      </div>
    </div>



    <?php include("include/site-footer.php"); ?>
  </div>
</body>
