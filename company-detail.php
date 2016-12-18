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
            <a href="#profile">Profile</a>
            <a href="#salary">Salary</a>
            <a href="#media">Videos & Images</a>
            <a href="#reviews">Reviews</a>
            <a href="#salary-surveys">Salary Surveys</a>
            <a href="#discussion">Discussion</a>
            <a href="#jobs">Jobs</a>
          </div>
        </div>
        <div class="actions">
          <a href="/add-full-review.php"><i class="fa fa-pencil-square-o"></i> Review an Employer</a>
          <a href="/add-salary-survey.php"><i class="fa fa-check-square-o"></i> Take a Salary Survey</a>
        </div>
      </div>
    </div>

    <div class="company-detail-section company-detail-salary-media">
      <div class="container">

        <div class="sub-group company-detail-salary-profile">

          <!-- IF PROFILE, SHOW BELOW -->
          <div class="company-profile" id="profile">
            <h4><i class="fa fa-circle"></i> Profile</h4>
            <div class="content">
              <p>50 years of exceptional service.</p>
              <p>Even though Crete Carrier is one of the largest privately owned dry van trucking companies in the country, we understand that building relationships is the foundation for our success. That’s why we always listen to the needs and concerns of our customers. If you need it done, we’re dedicated to finding the best solution.</p>
            </div>
          </div>
          <!-- END PROFILE BOX-->

          <h4 id="salary"><i class="fa fa-circle"></i> Salary</h4>
          <p>The Glassdoor.com average salary for Fedex Ground Delivery Drivers is $39,016 per year.</p>
          <p>FedEx employees may receive the following benefits:</p>
          <ul>
            <li>Salary increase based on individual performance</li>
            <li>Variable Pay	</li>
            <li>Tuition Assistance	</li>
            <li>Paid Time Off	</li>
            <li>Supplemental Commercial Medical Insurance	</li>
            <li>Life & Accidental Death Insurance	</li>
            <li>Reduced Shipping Rate	</li>
            <li>Discounted Travel	</li>
          </ul>
        </div>

        <div class="sub-group company-detail-media" id="media">

          <h4><i class="fa fa-circle"></i> Videos <a href="/add-video-image.php"><i class="fa fa-plus"></i> Add Video</a></h4>
          <div class="row company-videos-wrap">
            <a class="venobox" data-type="youtube" data-overlay="rgba(19,64,108,0.85)" href="https://youtu.be/YETb5VzLsJg" data-autoplay="true">
              <img src="../images/temp-vid-slug-1.jpg" />
              <span>Video Title Here</span>
            </a>
            <a class="venobox" data-type="youtube" data-overlay="rgba(19,64,108,0.85)" href="https://youtu.be/YtJwOoUYOwc" data-autoplay="true">
              <img src="../images/temp-vid-slug-2.jpg" />
              <span>Video Title Here</span>
            </a>
            <a class="venobox" data-type="youtube" data-overlay="rgba(19,64,108,0.85)" href="https://youtu.be/YtJwOoUYOwc" data-autoplay="true">
              <img src="../images/temp-vid-slug-2.jpg" />
              <span>Video Title Here</span>
            </a>
          </div>

          <!-- IF NO CONTENT, SHOW -->
          <div class="no-content-cta">
            <a href="/add-video-image.php"><i class="fa fa-plus"></i> Add Video</a>
          </div>

          <h4><i class="fa fa-circle"></i> Photos <a href="/add-video-image.php"><i class="fa fa-plus"></i> Add Photo</a></h4>
          <div class="row company-images-wrap">
            <a class="venobox" data-gall="companyGallery" href="../images/temp-image-thumb-1.jpg"><img src="../images/temp-image-thumb-1.jpg" /></a>
            <a class="venobox" data-gall="companyGallery" href="../images/temp-image-thumb-1.jpg"><img src="../images/temp-image-thumb-1.jpg" /></a>
            <a class="venobox" data-gall="companyGallery" href="../images/temp-image-thumb-1.jpg"><img src="../images/temp-image-thumb-1.jpg" /></a>
            <a class="venobox" data-gall="companyGallery" href="../images/temp-image-thumb-1.jpg"><img src="../images/temp-image-thumb-1.jpg" /></a>
            <a class="venobox" data-gall="companyGallery" href="../images/temp-image-thumb-1.jpg"><img src="../images/temp-image-thumb-1.jpg" /></a>
          </div>

          <!-- IF NO CONTENT, SHOW -->
          <div class="no-content-cta">
            <a href="/add-video-image.php"><i class="fa fa-plus"></i> Add Photo</a>
          </div>

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
