<?php
// template name: user-template
?>
<?php
if (isset($_POST['myform'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirm-password'];
    $dob = $_POST['date-of-birth'];
    $country = $_POST['country'];
    $role = $_POST['role'];

    $userdata = [
        'user_login' => $fname,
        'user_pass' => $password,
        'role' => $role,

    ];
    $user_id = wp_insert_user($userdata);

    update_user_meta($user_id, 'COUNTRY', $country);

    wp_redirect('http://localhost/wordpress/user-form/');
    exit();

}
?>
<?php get_header(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> -->
    <title>user_form</title>
</head>

<body>

    <script>

        //  Document is ready
        $(document).ready(function () {

            // Validate Username
            $("#usercheck").hide();
            let usernameError = true;
            $("#form_fname").keyup(function () {
                validateUsername();
            });

            function validateUsername() {
                let usernameValue = $("#form_fname").val();
                if (usernameValue.length == " ") {
                    $("#usercheck").hide();
                    usernameError = true;
                    return false;
                }
                //  else if (usernameValue.length < 3 || usernameValue.length > 10) {
                //     $("#usercheck").show();
                //     $("#usercheck").html("**length of username must be between 3 and 10");
                //     usernameError = false;
                //     return false;
                // }
                 else {
                    $("#usercheck").hide();
                }
            }

            // Validate Password............................................
            // $("#passcheck").hide();
            // let passwordError = true;
            // $("#password").keyup(function () {
            //     validatePassword();
            // });
            // function validatePassword() {
            //     let passwordValue = $("#password").val();
            //     if (passwordValue.length == "") {
            //         $("#passcheck").show();
            //         passwordError = false;
            //         return false;
            //     }
            //     if (passwordValue.length < 3 || passwordValue.length > 10) {
            //         $("#passcheck").show();
            //         $("#passcheck").html(
            //             "**length of your password must be between 3 and 10"
            //         );
            //         $("#passcheck").css("color", "red");
            //         passwordError = false;
            //         return false;
            //     } else {
            //         $("#passcheck").hide();
            //     }
            // }

            // Validate Confirm Password.............................................
            // $("#conpasscheck").hide();
            // let confirmPasswordError = true;
            // $("#conpassword").keyup(function () {
            //     validateConfirmPassword();
            // });
            // function validateConfirmPassword() {
            //     let confirmPasswordValue = $("#conpassword").val();
            //     let passwordValue = $("#password").val();
            //     if (passwordValue != confirmPasswordValue) {
            //         $("#conpasscheck").show();
            //         $("#conpasscheck").html("**Password didn't Match");
            //         $("#conpasscheck").css("color", "red");
            //         confirmPasswordError = false;
            //         return false;
            //     } else {
            //         $("#conpasscheck").hide();
            //     }
            // }

            // Submit button.........................
            $("#sub-btn").click(function () {
                validateUsername();
                // validatePassword();
                // validateConfirmPassword();
                if (
                    usernameError == true
                    // passwordError == true &&
                    // confirmPasswordError == true &&
                ) {
                    return true;
                } else {
                    return false;
                }
            });
        });

    </script>

    <div class="container p-2 flex-fill mx-auto my-5">
        <h2 style="text-align:center">User-Form</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="First-name">First-name</label>
                <input type="text" class="form-control" id="form_fname" placeholder="Enter first-name" name="fname">
                <span id="usercheck" style="color: red;">
                    Username is missing
                </span>
            </div>
            <div class="form-group my-4">
                <label for="Last-name">Last-name</label>
                <input type="text" class="form-control" placeholder="Enter last-name" name="lname" required>
            </div>
            <div class="form-group my-4">
                <label for="Password">Password</label>
                <input type="text" class="form-control" placeholder="Enter Password" name="password" required>
            </div>
            <div class="form-group my-4">
                <label for="author">Confirm-Password</label>
                <input type="text" class="form-control" placeholder="Enter Confirm-Password" name="confirm-Password"
                    required>
            </div>
            <div class="form-group my-4">
                <label for="Date of birth">Date of birth</label>
                <input type="text" class="form-control" placeholder="Enter D.O.B" name="date-of-birth" required>
            </div>
            <div class="form-group my-4">
                <label for="Country">Country</label>
                <input type="text" class="form-control" placeholder="Enter Country" name="country" required>
            </div>
            <div class="form-group my-4">
                <label for="role">Role</label>
                <input type="text" class="form-control" placeholder="Enter Country" name="role" required>
            </div>

            <input type="submit" id="sub-btn" name="myform" value="submit" class="btn btn-secondary">

        </form>
    </div>
</body>

</html>
<?php get_footer(); ?>