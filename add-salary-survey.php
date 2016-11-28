<?php include("include/page-head.php"); ?>

<body class="add-salary-survey">
  <div class="site-container">
    <?php include("include/site-header.php"); ?>

    <div class="reivew-salary-wrap">
      <div class="container narrow">
        <h2>Add Salary Survey</h2>
        <form class="form-add-review-salary">
          <div class="form-errors">
            <p><b>Whoops!</b> There were some problems with your input.</p>
            <ul>
              <li>The pay field is required.</li>
              <li>The company or owner field is required.</li>
              <li>The company name field is required.</li>
              <li>The overall rating field is required.</li>
              <li>The review field is required.</li>
              <li>The employed field is required.</li>
            </ul>
          </div>
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
