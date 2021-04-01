<html>
	<head>
		<meta charset="utf-8">
		<title>Laxwinco</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('assets/register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/bootstrap/css/bootstrap.min.css')}}">
		<!-- STYLE CSS -->
        <link rel="stylesheet" href="{{asset('assets/register/css/style.css')}}">
        <!-- jquery libray -->
        <script src="{{asset('assets/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
                    <img src="{{asset('assets/register/images/3005-drsd.jpg')}}">
                    <h2 class = "image-preview">ID Card Preview</h2>
                    <img id="preview-image-before-upload" src="{{asset('assets/register/images/idcard-default.png')}}"
                       alt="preview image">
				</div>
                <form id = "register-form" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
					<h3>YOU ARE WELCOME !</h3>
					<div class="form-group">
						<input type="text" id = "firstname" name = "firstname" placeholder="First Name" class="form-control">
						<input type="text" id = "lastname" name = "lastname" placeholder="Last Name" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="text" id = "username" name = "name" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
                    </div>
                    
					<div class="form-wrapper">
						<input type="text" id = "email" name = "email" placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
                    </div>

                    <div class="form-wrapper">
						<input type="text" id = "idcardnumber" name = "idcardnumber" placeholder="Idcard Number" class="form-control">
						<i class="zmdi zmdi-n-6-square"></i>
                    </div>

                    <div class="form-wrapper">
						<input type="text" id = "locationcode" name = "locationcode" placeholder="Location Code" class="form-control">
						<i class="zmdi zmdi-n-6-square"></i>
                    </div>

                    <div class="form-wrapper">
						<input type="text" id = "phonenumber" name = "phonenumber" placeholder="Phone Number" class="form-control">
						<i class="zmdi zmdi-phone"></i>
					</div>
					<div class="form-wrapper">
						<select name="pickup" id="pickup" class="form-control">
							<option value="" disabled selected>Pick-Up Location</option>
							<option value="kerkplein">Kerkplein</option>
							<option value="highway">Highway</option>
							<option value="noord">Noord</option>
							<option value="nickerie">Nickerie</option>
							<option value="newmont">Newmont</option>
							<option value="moengo">Moengo</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                    </div>
                    <div class="form-wrapper">
						<input type="text" id = "address" name = "address" placeholder="Address" class="form-control">
						<i class="zmdi zmdi-home"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" id = "password" name = "password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" id = "repassword" name = "password_confirmation" placeholder="Confirm Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
                    </div>
                    <div class="form-group">
                        <p>Please Select ID Card Image.<br>(resolution: 23:14)</p>
                        <input type="file" name="image" placeholder="Choose image" id="image">
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div id = "message-alert" class="alert alert-danger" style = "visibility: hidden;">
                        <strong class = "error-message"></strong>
                    </div>
                    <div class = "row">
                        <button type = "button" onclick = "validate()" style = "border-radius: 0px;">Register
                            <i class="zmdi zmdi-arrow-right"></i>
                        </button>
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"><button class = "btn btn-success" type = "button">Login
                            <i class="zmdi zmdi-arrow-right"></i>
                        </button></a>
                    </div>
                </form>
                
			</div>
		</div>
		
    </body>
    <script>
        var fileupload = 0
        $(document).ready(function (e) {
        
        $('#image').change(function(){
                
        let reader = new FileReader();
        
        reader.onload = (e) => { 

            $('#preview-image-before-upload').attr('src', e.target.result); 
            fileupload = 1;
        }

        reader.readAsDataURL(this.files[0]); 
        
        });
        
        });

        // Email validation function define
        function validateEmail($email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test( $email );
        }
        // phone number validation pattern valiable
        var phone_pattern = /([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;

        function validate(){
            var flag = 0, passconfirm = 0;
            if ($('#firstname').val() == "")
            {
                $("#firstname").css("border-bottom", "1px solid red");
                flag = 1;
            }else{
                $("#firstname").css("border-bottom", "1px solid #333");
            }

            if ($('#idcardnumber').val() == "")
            {
                $("#idcardnumber").css("border-bottom", "1px solid red");
                flag = 1;
            }else{
                $("#idcardnumber").css("border-bottom", "1px solid #333");
            }
            
            if ($('#lastname').val() == "")
            {
                $("#lastname").css("border-bottom", "1px solid red");
                flag = 1;
            }else{
                $("#lastname").css("border-bottom", "1px solid #333");
            }

            if ($('#username').val() == "")
            {
                $("#username").css("border-bottom", "1px solid red");
                flag = 1;
            }else{
                $("#username").css("border-bottom", "1px solid #333");
            }

            if (!validateEmail($('#email').val())||$('#email').val() =="") 
            {
                $("#email").css("border-bottom", "1px solid red");
                flag = 1;
            }else{
                $("#email").css("border-bottom", "1px solid #333");
            }
            
            if ( !phone_pattern.test( $('#phonenumber').val() )){
                $("#phonenumber").css("border-bottom", "1px solid red");
                flag = 1;
            }else{
                $("#phonenumber").css("border-bottom", "1px solid #333");
            }
            if ( $('#locationcode').val() == null ){
                $("#locationcode").css("border-bottom", "1px solid red");
                flag = 1;
            }else{
                $("#locationcode").css("border-bottom", "1px solid #333");
            }
            if ( $('#pickup').val() == null ){
                $("#pickup").css("border-bottom", "1px solid red");
                flag = 1;
            }else{
                $("#pickup").css("border-bottom", "1px solid #333");
            }
            
            if ($('#address').val() == "")
            {
                $("#address").css("border-bottom", "1px solid red");
                flag = 1;
            }else{
                $("#address").css("border-bottom", "1px solid #333");
            }

            if ($('#password').val() == "")
            {
                $("#password").css("border-bottom", "1px solid red");
                flag = 1;
            }else{
                $("#password").css("border-bottom", "1px solid #333");
            }

            if ($('#repassword').val() == "")
            {
                $("#repassword").css("border-bottom", "1px solid red");
                flag = 1;
            }else{
                $("#repassword").css("border-bottom", "1px solid #333");
            }
            if($('#password').val() != "" && $('#password').val()==$('#repassword').val()){
                $("#password").css("border-bottom", "1px solid #333");
                $("#repassword").css("border-bottom", "1px solid #333");
                
            }else{
                $("#password").css("border-bottom", "1px solid red");
                $("#repassword").css("border-bottom", "1px solid red");
                $("#message-alert").css("visibility", "visible");
                $(".error-message").html("Password conform is requred!");
                passconfirm = 1;
            }
            
            if (flag == 1)
            {
                $("#message-alert").css("visibility", "visible");
                $(".error-message").html("All fileds are requred!");
            }else{
                if (fileupload == 0)
                {
                    $("#message-alert").css("visibility", "visible");
                    $(".error-message").html("ID Card Image uploading are requred!");
                }
            }
            

            if (flag == 0 && passconfirm == 0 && fileupload == 1)
            {
                $('form#register-form').submit();
            }
        }
    </script>
</html>