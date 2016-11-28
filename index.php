<?php include("include/page-head.php"); ?>

<body class="homepage">

  <div class="site-container">
    <?php include("include/site-header.php"); ?>

    <div class="homepage-section homepage-hero">
      <div class="hero-content">
        <h1>Find Reviews and Salaries <span><small><i>for</i></small> Trucking Companies</span></h1>
        <form>
          <input type="text" placeholder="Search Company Name"/>
          <i class="fa fa-search"></i>
          <div class="nav-search-results search-results-wide is-open">
            <ul class="landing-search-results is-open-autocompleteMenu">
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
        </form>
        <div class="action-callouts">
          <a href="/add-full-review.php"><i class="fa fa-pencil-square-o"></i> Review an Employer</a>
          <a href="/add-salary-survey.php"><i class="fa fa-check-square-o"></i> Take a Salary Survey</a>
        </div>
      </div>
    </div>

    <div class="homepage-section homepage-lastest-reviews">
      <div class="container">
        <h3 class="page-section-title with-link"><span>Recently Reviewed Companies <a href="all-companies.php">All Companies <i class="fa fa-arrow-circle-right"></i></a></span></h3>
        <div class="row equal-height-wrap">
          <?php include("include/company-review-block-1.php"); ?>
          <?php include("include/company-review-block-2.php"); ?>
          <?php include("include/company-review-block-3.php"); ?>
          <?php include("include/company-review-block-2.php"); ?>
          <?php include("include/company-review-block-3.php"); ?>
          <?php include("include/company-review-block-1.php"); ?>
        </div>
      </div>
    </div>

    <?php include("include/site-footer.php"); ?>

  </div>


</body>
