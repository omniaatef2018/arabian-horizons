<!-- Register Popup -->
<div class="popup-wrap register-popup mfp-hide corporate-form" id="popup-corporate-register">
  <div class="popup-inner">
    <div class="popup-inner-wrap">
      <div class="popup-left">
        <ul class="pl-points">
          <li>
            <div class="pl-icon">
              <img class="lazy" src="<?php echo base_url('assets/'); ?>images/placeholder-image-1.png" data-src="<?php echo base_url('assets/'); ?>images/icon-communication.svg" alt="" />
            </div>
            <div class="pl-text">Get exclusive deals and discounts available only to our members</div>
          </li>
          <li>
            <div class="pl-icon">
              <img class="lazy" src="<?php echo base_url('assets/'); ?>images/placeholder-image-1.png" data-src="<?php echo base_url('assets/'); ?>images/icon-search.svg" alt="" />
            </div>
            <div class="pl-text">Create your own alerts and wish-lists so you never miss out</div>
          </li>
          <li>
            <div class="pl-icon">
              <img class="lazy" src="<?php echo base_url('assets/'); ?>images/placeholder-image-1.png" data-src="<?php echo base_url('assets/'); ?>images/icon-team.svg" alt="" />
            </div>
            <div class="pl-text">Get personalized recommendations and checkout faster</div>
          </li>
        </ul>
      </div>
      <div class="popup-right">
        <div class="popup-right-top">
          <h3>Become Our Corporate Member</h3>
        </div>

        <div class="popup-form">
          <form>
            <div class="pf-item">
              <div class="pf-input">
                <input type="text" name="reg-name" placeholder="Name" />
                <span><i class="fa fa-pencil-square-o"></i></span> 
              </div>
            </div>
            <div class="pf-item">
              <div class="pf-input">
                <input type="email" name="reg-email" placeholder="Email" />
                <span><i class="fa fa-envelope-o"></i></span> 
              </div>
            </div>
            <div class="pf-item">
              <div class="pf-input">
                <select name="business_type" placeholder="Business">
                    <option value="">Are you a Business / Person?</option>
                    <option value="Business">Business</option>
                    <option value="Person">Person</option>
                </select>
              </div>
            </div>
            
            <div class="pf-item business-item">
              <div class="pf-input">
                <input type="text" name="company-name" placeholder="Company Name" />
                <span><i class="fa fa-building-o"></i></span> 
              </div>
            </div>
            <div class="pf-item business-item">
              <div class="pf-input">
                <input type="text" name="company-address" placeholder="Address" />
                <span><i class="fa fa-map-marker"></i></span> 
              </div>
            </div>
            <div class="pf-item business-item">
              <div class="pf-input">
                <select name="company-country" placeholder="Country">
                    <option value="">Country</option>
                </select>
              </div>
            <div class="pf-item business-item">
              <div class="pf-input">
                <input type="text" name="designation" placeholder="Your Designation" />
                <span><i class="fa fa-user"></i></span> 
              </div>
            </div>
            <div class="pf-item business-item">
              <div class="pf-input">
                <input type="text" name="mobile" placeholder="Your Mobile" />
                <span><i class="fa fa-mobile"></i></span> 
              </div>
            </div>
            
            <div class="form-button">
              <input type="submit" value="Sign up" />
            </div>
            <div class="register-bottom">
            By clicking Sign up, I agree to Arabia Horizons <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
            </div>
            <div class="form-bottom">
            Already have an account? <a class="login-form" href="#popup-corporate-login">Login</a>
            </div>              
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Register Popup -->