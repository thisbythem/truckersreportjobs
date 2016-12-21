<?php include("include/page-head.php"); ?>

<body class="company-detail-page">
  <div class="site-container">

    <?php include("include/site-header.php"); ?>

    <section class="company-detail-section company-detail-header">
      <div class="container">
        <div class="row">
          <div class="sub-group company-info">
            <div class="row">
              <figure>
                <img src="images/heartland_logo.png"  class="company-logo"/>
              </figure>
              <div class="company-name-contact">
                <h2>Heartland Express</h2>
                <p class="company-phone"><i class="fa fa-phone"></i> <span>1-800-998-2221</span></p>
                <p class="company-trailer-type"><i class="fa fa-truck"></i> <span>Flatbed</span></p>
              </div>
            </div>
          </div>
          <div class="sub-group company-rating">
            <div class="rating-entry-wrap">
              <?php include("include/rating-matrix.php"); ?>
            </div>
            <span class="company-rating-total"><small>Based on 37 Reviews</small></span>
          </div>
        </div>
      </div>
    </section>

    <div class="company-detail-section company-detail-anchor-nav">
      <div class="container">
        <div class="anchor-nav">
          <div class="link-wrap">
            <a href="#reviews">Reviews</a>
            <a href="#salary-surveys">Salary Surveys</a>
            <a href="#discussion">Discussion</a>
            <a href="#jobs">Jobs</a>
          </div>
        </div>
        <div class="actions">
          <a href="/add-full-review.php"><i class="fa fa-pencil-square-o"></i> Review an Employer</a>
          <a href="/add-salary-survey.php"><i class="fa fa-check-square-o"></i> Take a Salary Survey</a>
          <!-- IF NO VIDEO OR PHOTO CONTENT, SHOW -->
          <a href="/add-video-image.php"><i class="fa fa-plus"></i> Add Video</a>
          <a href="/add-video-image.php"><i class="fa fa-plus"></i> Add Photo</a>
        </div>
      </div>
    </div>


    <div class="company-detail-section company-detail-reivews" id="reviews">
      <div class="container">
        <h4><i class="fa fa-circle"></i> Reviews <a href="/add-full-review.php"><i class="fa fa-plus"></i> Review this Company</a></h4>
        <?php include("include/company-detail-review-entry.php"); ?>
        <?php include("include/company-detail-review-entry.php"); ?>
        <?php include("include/company-detail-review-entry.php"); ?>
        <div class="view-more-wrap">
          <a href="#">View More Reviews</a>
        </div>
      </div>
    </div>

    <div class="company-detail-section company-detail-reivews" id="salary">
      <div class="container">
        <h4><i class="fa fa-circle"></i> Salary Surveys <a href="/add-salary-survey.php"><i class="fa fa-plus"></i> Take a Salary Survey</a></h4>
        <?php include("include/company-detail-salary-entry.php"); ?>
        <?php include("include/company-detail-salary-entry.php"); ?>
        <?php include("include/company-detail-salary-entry.php"); ?>
      </div>
    </div>

    <div class="company-detail-section company-detail-discussion" id="discussion">
      <div class="container">
        <h4><i class="fa fa-circle"></i> Discussion <a href="/"><i class="fa fa-arrow-right"></i> Full Discussion on The Truckersreport.com</a></h4>
        <?php include("include/company-detail-discussion-entry.php"); ?>
        <?php include("include/company-detail-discussion-entry.php"); ?>
        <?php include("include/company-detail-discussion-entry.php"); ?>
        <?php include("include/company-detail-discussion-entry.php"); ?>
        <div class="view-more-wrap">
          <a href="#">View More Discussions</a>
        </div>
        <!-- IF NO CONTENT, SHOW -->
        <div class="no-content-cta">
          <a href="/"><i class="fa fa-plus"></i> Go to Discussion</a>
        </div>
      </div>
    </div>

    <div class="company-detail-section company-detail-job-postings" id="jobs">
      <div class="container">
        <h4><i class="fa fa-circle"></i> Jobs</h4>
        <div class="company-detail-discussion-wrap">
          <?php include("include/company-detail-job-entry.php"); ?>
          <?php include("include/company-detail-job-entry.php"); ?>
          <?php include("include/company-detail-job-entry.php"); ?>
          <?php include("include/company-detail-job-entry.php"); ?>
        </div>
      </div>
    </div>

    <?php include("include/site-footer.php"); ?>
  </div>
</body>
