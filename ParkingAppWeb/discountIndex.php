<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Sat Oct 05 2013 01:19:31 GMT+0000 (UTC) -->
<html data-wf-site="524dc72fe439c360410001ad">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>Discount UNT App</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/webflow.css">
    <link rel="stylesheet" type="text/css" href="css/discountuntapp.css">
  </head>
  <body>
    <div class="nav-section">
      <div class="w-container header">
        <div class="w-row">
          <div class="w-col w-col-8">
            <h1 id="test" class="w-hidden-tiny"><span style="font-weight: normal;">UNT
                Discount App Management</span></h1>
          </div>
          <div class="w-col w-col-4"> <img class="headerimage" src="images/combo_stacked_one-line_WHTongreen_0.png"
              alt="combo_stacked_one-line_WHTongreen_0.png" width="409"> </div>
        </div>
      </div>
    </div>
    <div>
      <div class="w-container">
        <div class="w-row">
          <div class="w-col w-col-1 w-clearfix"><a class="w-hidden-tiny button expand"
              href="#">Expand</a> </div>
          <div class="w-col w-col-11 discountcolumn">
            <form action="process.php" name="wf-form-new-discount" method="post"
              id="discount_values"> <label class="tableheader" for="name">Create
                New Discount</label>
              <div class="w-row">
                <div class="w-col w-col-5">
                  <div class="w-container formsection">
                    <div class="formlabel">Start Date:</div>
                    <input class="w-input textfield" placeholder="MM/DD/YYYY" name="startdate"
                      data-name="startDate" required="required" type="text">
                    <div class="formlabel">End Date:</div>
                    <input class="w-input" placeholder="MM/DD/YYYY" name="enddate"
                      data-name="endDate" required="required" type="text"> </div>
                </div>
                <div class="w-col w-col-2"></div>
                <div class="w-col w-col-5">
                  <div class="w-container formsection">
                    <div class="formlabel">Start Time:</div>
                    <input class="w-input textfield" placeholder="00:00" name="starttime"
                      data-name="startTime" required="required" type="text">
                    <div class="formlabel">End Time:</div>
                    <input class="w-input" placeholder="24:00" name="endtime" data-name="endtime"
                      required="required" type="text"> </div>
                </div>
              </div>
              <br>
              <div class="w-row">
                <div class="w-col w-col-5">
                  <div class="w-container formsection">
                    <div class="formlabel">Discount Value:</div>
                    <select class="dropdownStyle" name="discount">
                      <option value="0">0%</option>
                      <option value="10">10%</option>
                      <option value="20">20%</option>
                      <option value="30">30%</option>
                      <option value="40">40%</option>
                      <option value="50">50%</option>
                      <option value="60">60%</option>
                      <option value="70">70%</option>
                      <option value="80">80%</option>
                      <option value="90">90%</option>
                      <option value="100">100%</option>
                    </select>
                  </div>
                </div>
                <div class="w-col w-col-2"></div>
                <div class="w-col w-col-5">
                  <div class="w-container formsection">
                    <div class="formlabel">Vendor:</div>
                    <select class="dropdownStyle" name="vendor">
                      <option value="parking">Parking</option>
                    </select>
                    <input class="w-button button submit" value="Submit" data-wait="Please wait..."
                      type="submit"> </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="w-container managecontainer">
        <h2>Manage Current Discounts</h2>
        <div class="w-container">
          <div class="w-container managebox">
            <div class="w-form"> <label class="tableheader" for="name">Value:</label>
              <div class="w-form-done">
                <p>Thank you! Your submission has been received!</p>
              </div>
              <div class="w-form-fail">
                <p>Oops! Something went wrong while submitting the form :(</p>
              </div>
            </div>
            <div class="w-container">
              <p>THIS <br>
                WILL <br>
                BE <br>
                A <br>
                PRETTY <br>
                TABLE</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
