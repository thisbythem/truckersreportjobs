<?php include("include/page-head.php"); ?>

<body class="all-companies">
  <div class="site-container">
    <?php include("include/site-header.php"); ?>

      <div class="all-companies-wrap">
        <div class="container medium">

          <div class="all-companies-list-header">
            <h2 class="page-title">All Companies </h2>
            <form>
              <label>Sort</label>
              <fieldset class="with-select">
                <select>
                  <option>Best Rating</option>
                  <option>Most Ratings</option>
                  <option>Company Name</option>
                </select>
              </fieldset>
            </form>
          </div>

          <div class="all-companies-list">
            <?php include("include/company-list-block.php"); ?>
            <?php include("include/company-list-block-2.php"); ?>
            <?php include("include/company-list-block.php"); ?>
            <?php include("include/company-list-block-2.php"); ?>
            <?php include("include/company-list-block.php"); ?>
            <?php include("include/company-list-block-2.php"); ?>
            <?php include("include/company-list-block.php"); ?>
            <?php include("include/company-list-block-2.php"); ?>
          </div>

          <div class="view-more-wrap">
            <a href="#">View More Companies</a>
          </div>

        </div>
      </div>


    <?php include("include/site-footer.php"); ?>
  </div>
</body>
