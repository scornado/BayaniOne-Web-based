<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Sign-up</title>


    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<body>
    <form id="form1" runat="server">
        <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
		<a class = "navbar-brand" href="index.php"><span><image src = "../images/logo.png" height= "30px" width="30px"></span><span>BayaniOne</span></a>
        <!-- <a class="navbar-brand" href="index.html">BayaniOne<span>.</span></a> -->
		</div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
		    <li class="btn-signup"><a href= "#login"data-toggle="modal" >Login</a></li>
        </ul>
        </div>
      </div>
    </nav>
       <div class="modal fade" id="login" role="dialog">
      <div class="modal-dialog modal-sm">

        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">Login</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg">Sign in to start your session</p>
              <div class="form-group">
                <form name="" id="loginForm">
                 <div class="form-group has-feedback"> <!----- username -------------->
                      <input class="form-control" placeholder="Username"  id="loginid" type="text" autocomplete="off" />
            <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback"><!----- password -------------->
                      <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="checkbox icheck">
                              <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                          </div>
                      </div>
                      <div class="col-xs-12">
                          <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Login</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<body>
   <section id="work-shop" class="section-padding">
    <div class="main">
		<div class="header" >
			<h1>Register Now</h1>
		</div>
		<p>We make a living by what we get, but we make a life by what we give.</p>
			<form>
				<ul class="left-form">
					<h2>Personal Information:</h2>
                    </br></br></br>
						<label>Type of account:</label><i>&nbsp &nbsp</i><select
                        id="DropDownList1"  runat="server" Height="22px" Width="187px">
                             <option value=""></option>
                            <option value="individual">Individual</option>
                            <option value="charity">Charity</option>
                        </select>
						<div class="clear"> </div>
                        </br>
					<li>
 						<input id = "regFname" type="text"   placeholder="First name" required/>
						<a href="#" class="icon ticker"> </a>
						<div class="clear"> </div>
					</li>

					<li>
						<input id = "regLname" type="text"   placeholder="Last name" required/>
						<a href="#" class="icon ticker"> </a>
						<div class="clear"> </div>
					</li>
					<li>
						<input id = "regEmail" type="text"   placeholder="Email" required/>
						<a href="#" class="icon into"> </a>
						<div class="clear"> </div>
					</li>
					<li>
						<input id = "regAddress" type="text"   placeholder="Address" required/>
						<a href="#" class="icon into"> </a>
						<div class="clear"> </div>
					</li>
                    <li>
                  		<input id = "regCno" type="text"   placeholder="Contact Number" required/>
						<a href="#" class="icon into"> </a>
						<div class="clear"> </div>
					</li>
                <label>Birthdate: </label><i>&nbsp &nbsp</i><input class="datefield" data-val="true" data-val-required="Date is required"
                id="ReleaseDate" name="ReleaseDate" type="date" value="1/11/1989" />
				</ul>

				<ul class="right-form">
					<h3>Login Information:</h3>
					<div>
                       <center><img id="blah" runat="server" height="150" width="150"/></center>
                       <center></br><input type="file" name="pic" accept="image/*" onchange="readURL(this);" ></center>
                       <script>
                       function readURL(input) {
                               if (input.files && input.files[0]) {
                                   var reader = new FileReader();

                                   reader.onload = function (e) {
                                       $('#blah')
                                           .attr('src', e.target.result)
                                           .width(150)
                                           .height(150);
                                   };

                                   reader.readAsDataURL(input.files[0]);
                               }
                           }
                       </script>
                     </br>
						<li><input id = "regUsername" type="text"  placeholder="Username" required id="txtusername"/></li>
						<li> <input id = "regPassword" type="password"  placeholder="Password" required/></li>
						<li> <input id = "regConPassword" type="password"  placeholder="Re-type Password" required/></li>
						<li><button type="submit" class="signupbtn" height="59px"width="341px" id="btnregister">Sign Up</button></li>

					</div>
					<div class="clear"> </div>
				</ul>
				<div class="clear"> </div>

		    </form>
	</div>
    <</section>
    <script src="../library/jquery.min.js"></script>
    <script src="../library/bootstrap.min.js"></script>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 myCols">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="signup.php">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="social-networks">
            <a href="https://twitter.com" class="twitter"><img src="../images/twitterIcon.jpg" alt="" class="img-thumbnail img-circle"/></a>
            <a href="https://facebook.com" class="facebook"><img src="../images/facebookIcon.jpg" alt="" class="img-thumbnail img-circle"/></a>
            <a href="https://plus.google.com/" class="google"><img src="../images/googlePlusIcon.jpg" alt="" class="img-thumbnail img-circle"/></a>
        </div>
        <div class="footer-copyright">
            <p>© 2017 BayaniOne </p>
        </div>
    </footer>
    </form>
</body>
</html>
