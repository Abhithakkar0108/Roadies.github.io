<style>
.error {
    width: 100%;
    margin-top: .25rem;
    font-size: .575em;
    color: #dc3545;
}
</style>
<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="column is-4 is-offset-8">
        <div class="box">
        <p class="subtitle is-4">Please login to proceed.</p>
        </br>
          <form method="post" action="Intro/loginCheck" id="login">
            <?php if($type == "customer"){ ?>
              <div class="field">
                <p class="control has-icons-left has-icons-right">
                  <select class="input is-medium text-muted" name="type" id="type">
                    <option value="">Select User Type</option>
                    <option value="customer">Customer</option>
                    <option value="transporter">Transporter</option>
                  </select>
                </p>
              </div>
            <?php }else{ ?>
              <input type="hidden"  name="type" id="type" value="<?php echo $type; ?>">
            <?php } ?>
            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input is-medium" type="text" name="userId" id="userId" placeholder="Username" />
                <span class="icon is-medium is-left">
                  <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-medium is-right">
                  <i class="fas fa-check"></i>
                </span>
              </p>
            </div>
            <div class="field">
              <p class="control has-icons-left">
                <input class="input is-medium" type="password" name="password" id="password" placeholder="Password" />
                <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
            </div>
            <div class="field text-end">              
              <label class="checkbox">
                <input type="checkbox" />
                Remember me
              </label><br>
            </div>
            <button type="submit" id="check" class="button is-block is-info is-large is-fullwidth">Login</button><br />            
          </form>
        </div>
        <p class="has-text-grey">
          <a href="#">Sign Up</a> &nbsp;·&nbsp; <a href="#">Forgot Password</a> &nbsp;·&nbsp;
          <a href="#">Need Help?</a>
        </p>
      </div>
    </div>
  </div>
</div>
</section>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.additional-methods.js'); ?>"></script>
<script type="text/javascript">
  if($("#login").length > 0){
        $("#login").validate({
            rules: {
              userId: {
                required: true,
                remote: {
                  url: "<?php echo base_url('Intro/checkLoger'); ?>", 
                  type: 'post',
                  data: {
                    userId: function(){
                      return $('#userId').val();
                    },
                    type: function(){
                      return $('#type').val();
                    }
                  }
                }
              },  
              type: {
                required: true
              },            
              password: {
                required: true,
                remote: {
                  url: "<?php echo base_url('Intro/checkLoger'); ?>",
                  type: 'post',
                  data: {
                    password: function(){
                      return $("#password").val();
                    },
                    userId: function(){
                      return $("#userId").val();
                    },
                    type: function(){
                      return $('#type').val();
                    }
                  }
                }
              }
            },
            messages: {
              userId: {
                  required: "Username is required",
                  remote: "Username does not exist"
                },  
                type: {
                  required: "PLease select user type"
                },                
                password: {
                  required: "Password is required",
                  remote: "incorrect password"                  
                }
            },
            submitHandler: function(e){
                $("#check").html("Sending");
                $.ajax({
                    url: "<?php echo site_url('Intro/login'); ?>",
                    type: 'post',
                    method: 'post',
                    data: $('#login').serialize(),
                    success: function(data){
                        if(data.length > 0){
							window.location.href = "<?php echo site_url('Intro/index'); ?>";
						}else{
							return false;
                        }
                    }
                });
            }
        });
    }
</script>