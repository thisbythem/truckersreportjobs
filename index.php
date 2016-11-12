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
        </form>
        <div class="action-callouts">
          <a href="/"><i class="fa fa-pencil-square-o"></i> Review an Employer</a>
          <a href="/"><i class="fa fa-check-square-o"></i> Take a Salary Survey</a>
        </div>
      </div>
    </div>

    <div class="homepage-section homepage-lastest-reviews">
      <div class="container">
        <h3 class="page-section-title with-link"><span>Recently Reviewed Companies <a href="/">All Companies <i class="fa fa-arrow-circle-right"></i></a></span></h3>
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
