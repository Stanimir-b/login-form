

  

    <div id="wrapper">
  <div id="regbar">
    <div id="navthing">
      <h2><a href="#" id="login">Login</a> | <a href="#" id="register">Register</a></h2>
    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
           <form>
             <label name="email">Email</label>
             <input type="email" id="email" required />
             <label name="password">Password</label>
             <input type="password" id="password" required />
             <input type="submit" value="Login" id="logButton"/>
           </form>
        </div>
      </div>
    </div>
      <div class="register">
        <div class="arrow-upr"></div>
        <div class="formholder">
          <div class="randompad">
            <form method="POST">
              <label name="email">Email</label>
              <input type="email" name="email" required/>
              <label name="password">Password</label>
              <input type="password" name="password" id="regPassword" required />
              <label name="rePassword">Confirm Password</label>
              <input type="password" name="rePassword" id="rePassword" required />
              <input type="submit" value="Register" name="register" id="reg"/>
            </form>
          </div>
        </div>
      </div>
      <div class="sendEmail">
        <div class="formholder">
          <div class="randompad">
            <form method="POST">
              <label name="email">Please send your Email</label>
              <input type="email" name="sendMail" required/>
              <input type="submit" value="Send" name="mailSend"/>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src='js/jquery.min.js'></script>
    <script src="js/index.js"></script>
    <script src="js/md5.js"></script>
 