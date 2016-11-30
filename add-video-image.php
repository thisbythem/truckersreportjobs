<?php include("include/page-head.php"); ?>

<body class="add-video-image-page">
  <div class="site-container">
    <?php include("include/site-header.php"); ?>

    <div class="add-video-wrap">
      <div class="container narrow">
        <h2>Add Video</h2>
        <form class="form-upload-box">
          <div class="form-alert add-close">
            <p>While waiting for the video to upload, you can choose a title for it.</p>
            <p><input type="text" /></p>
            <p><button type="submit" class="secondary-button">Submit</button></p>
            <span class="close-icon"></span>
          </div>
          <div class="progress-div" style="">
  					<h4><span class="upload-progress">Upload Successful</span>
  					<span class="close-icon"></span>
  					</h4>
  					<div id="progress" class="progress">
  						<div class="progress-bar progress-bar-success" style="width: 36%;"></div>
  					</div>
				  </div>

          <div class="form-alert alert-success add-close">
            <p>Thank you for uploading a video. It may take up to 24 hours to process.</p>
            <span class="close-icon"></span>
          </div>
          <hr />
          <fieldset class="form-action-upload">
            <p><button type="submit">Upload Your Video</button></p>
            <p>
              Let users know here what kind of video is accepted.
            </p>
          </fieldset>
        </form>
      </div>
    </div>



    <?php include("include/site-footer.php"); ?>
  </div>
</body>
