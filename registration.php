<?php
    session_start();
    if(isset($_SESSION["username"])){
        header('location:home.php');
    }
?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Sign Up</title>
  <script type="text/javascript" src="Library/jquery.min.js"></script>
<!-- script to choose account type -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('#account_type').on('change', function() {
        if ( this.value == 'individual')
        {
          $("#individual_user").show();
          $("#organization_user").hide();
        }
        else if ( this.value == 'organization')
        {
          $("#organization_user").show();
          $("#individual_user").hide();
        }
      });
    });
  </script>

</head>
<body>
    <p><a href="registration.php">Register</a> | <a href="signin.php">Sign In</a></p>
    <form class="modal-content animate" id="UserFormReg" name="UserFormReg" action="registration.php" method="post">
      <h2>Personal Information:</h2>
      </br>
      <fieldset>
        <?php
        $connect=mysqli_connect("localhost","root","","bayanione_db");
        // Check connection
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $result = mysqli_query($connect,"SELECT MAX(user_id) FROM users GROUP BY user_id");
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $next = $row['MAX(user_id)'] + 1;
            }
            echo "<input value='". $next ."' type='hidden' name='user_id' id='user_id'>";
            echo "</input>";
        }
        mysqli_close($connect);
        ?>
      <label>Type of account:</label>
      <select class="input" id="account_type" name="account_type" value="" Height="22px" Width="187px">
          <option value="">choose type ..</option>
          <option value="individual">Individual</option>
          <option value="organization">Organization</option>
      </select>
      </br></br>
      <div id="individual_user" style="display:none;">
        <fieldset>
          <table>
            <tr>
              <td>
                <label>First name:</label>
              </td>
              <td>
                <input id="first_name" name="first_name" type="text" placeholder="first name ..."/>
              </td>
            </tr>
            <tr>
              <td>
                <label>Last name:</label>
              </td>
              <td>
                <input id="last_name" name="last_name" type="text"   placeholder="last name ..."/>
              </td>
            </tr>
            <tr>
              <td>
                <label>Middle name:</label>
              </td>
              <td>
                <input id="middle_name" name="middle_name" type="text"   placeholder="middle name ..."/>
              </td>
            </tr>
            <tr>
              <td>
                <label>Birthdate:</label>
              </td>
              <td>
            <input id="birthdate" name="birthdate" type="date"/>
              </td>
            </tr>
          </table>
        </fieldset>
      </div>
      <div id="organization_user" style="display:none;">
        <fieldset>
          <table>
            <tr>
              <td>
                <label>Organization name:</label>
              </td>
              <td>
                <input id = "org_name" name="org_name" type="text" placeholder="organization name ..."/>
              </td>
            </tr>
            <tr>
              <td>
                <label>Representative full name:</label>
              </td>
              <td>
                <input id = "rep_name" name="rep_name" type="text" placeholder="representative full name ..."/>
              </td>
            </tr>
          </table>
        </fieldset>
      </div>
        </br></br>
        <label>User Profile Photo:</label>
        </br>
        <img id="user_image" name="user_image" runat="server" height="150" width="150"/>
        </br>
        <input type="file" id="user_photo" name="user_photo" accept="image/*" onchange="readURL(this);" required/>
        <!-- script to display image on select -->
        <script>
        function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#user_image')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(150);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
        </br></br>
        <table>
          <tr>
            <td>
              <label>Residential Address:</label>
            </td>
            <td>
              <input id = "residential_address" name="residential_address" type="text" placeholder="complete address ..." required/>
            </td>
          </tr>
          <tr>
            <td>
              <label>Email Address:</label>
            </td>
            <td>
              <input id="email_address" name="email_address" type="email" placeholder="user@domain.com" required/>
            </td>
          </tr>
          <tr>
            <td>
              <label>Username:</label>
            </td>
            <td>
              <input id="username" name="username" type="text" placeholder="username ..." required/>
            </td>
          </tr>
          <tr>
            <td>
              <label>Password:</label>
            </td>
            <td>
              <input id="password" name="password" type="password" placeholder="password ..." required/>
            </td>
          </tr>
      </table>
      </fieldset>
        </br></br>
      <input type="submit" id="registerUser" name="registerUser" value="Sign Up"/>
    </form>

    <?php include 'databaseconn.php' ?>
    <?php
      if(isset($_POST['registerUser']))
      {
        $user_id = $_POST['user_id'];
        $account_type = $_POST['account_type'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $middle_name = $_POST['middle_name'];
        $birthdate = $_POST['birthdate'];
        $org_name = $_POST['org_name'];
        $rep_name = $_POST['rep_name'];
        $user_photo = $_POST['user_photo'];
        $residential_address = $_POST['residential_address'];
        $email_address = $_POST['email_address'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(isset($_FILES['user_photo'])) {
        $user_photo=addslashes(file_get_contents($_FILES['user_photo']['tmp_name'])); //will store the image to fp
        }

        //query to insert data
        if($account_type!=''){
        mysqli_query($connect, "INSERT INTO users (user_id,account_type,user_photo,residential_address,email_address,username,password)
                    VALUES('$user_id','$account_type','$user_photo','$residential_address','$email_address','$username','$password')");
                    if(mysqli_affected_rows($connect) > 0){
                    echo "      ";
                  }else {
                    echo mysqli_error($connect);
                    echo "Not Added!";
                  }
        }
        if($account_type=='individual'){
        mysqli_query($connect, "INSERT INTO individual_user (user_id,first_name,last_name,middle_name,birthdate)
                    VALUES('$user_id','$first_name','$last_name','$middle_name','$birthdate')");
                    if(mysqli_affected_rows($connect) > 0){
                    echo "      ";
                  }else {
                    echo mysqli_error($connect);
                    echo "Not Added!";
                  }
      }
      else if($account_type=='organization'){
      mysqli_query($connect, "INSERT INTO organization_user (user_id,org_name,rep_name)
                  VALUES('$user_id','$org_name','$rep_name')");
                  if(mysqli_affected_rows($connect) > 0){
                  echo "      ";
                }else {
                  echo mysqli_error($connect);
                  echo "Not Added!";
                }
    }
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>
</body>
</html>
