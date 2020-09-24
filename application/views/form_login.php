<?php
echo form_open('auth/login');
?>

		<div class="thin">
          <h3 class="section-title text-center">Login</h3>
          <div class="divide50"></div>
          <div class="form-container">
              <div class="column">
                <div class="row-sm-6">
                  <div class="form-field">
                    <label>
                      <input class="form-control" type="text" name="username" placeholder="Username" required="">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="row-sm-6">
                  <div class="form-field">
                    <label>
                      <input class="form-control" type="password" name="password" placeholder="Password" required="">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                
                <!--/column -->
                
              </div>
              <!--/.row -->
              
              <!--/.radio-set -->
              <button type="submit" class="btn btn-default" name="submit">Login</button>
              <footer class="notification-box"></footer>
            <!--/.vanilla-form --> 
          </div>
          <!--/.form-container --> 
        </div>
    </form>