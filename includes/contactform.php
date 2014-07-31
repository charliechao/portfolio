<section >
<div class="col-sm-6">
  <h2 class="text-center">Contact Me</h2>
                <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
          <fieldset>
            <?php if(isset($hasError)) { //If errors are found ?>
              <p class="alert alert-danger">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
            <?php } ?>
            <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
              <div class="alert alert-success">
                <p><strong>Message Successfully Sent!</strong></p>
                <p>Thank you for using my contact form, <strong><?php echo $name;?></strong>! Your email was successfully sent and I will be in touch with you soon.</p>
              </div>
            <?php } ?>
        <div class="form-group">
              <label for="name">Name<span class="help-required">*</span></label>
              <input type="text" name="contactname" id="contactname" value="" class="form-control required" role="input" aria-required="true" 
              placeholder="Your name"/>
        </div>


            <div class="form-group">
              <label for="email">Email<span class="help-required">*</span></label>
              <input type="text" name="email" id="email" value="" class="form-control required email" role="input" aria-required="true"
               placeholder="email@example.com"/>
            </div>

            <div class="form-group">
              <label for="message">Message<span class="help-required">*</span></label>
              <textarea rows="8" name="message" id="message" class="form-control required" role="textbox" aria-required="true"
              placeholder="Hi Charlie, we would like to talk to you..."></textarea>
            </div>       

            <div class="actions">
              <input type="submit" value="Send" name="submit" id="submitButton" class="btn btn-primary" title="Click here to submit your message!" />
            </div>
          </fieldset>
        </form>
    </div>
</section>    