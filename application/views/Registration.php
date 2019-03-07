
<!DOCTYPE html>
<html>
<head>
<title>Register Form</title>
</head>
<style>
input[type=text], select {
width: 340px;
height: 40px;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: width: 500px;border-box;
}
input[type=password], select {
width: 340px;
height: 40px;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing:width: 500px;border-box;
}
form {
background-color: #170202;
width: 700px;
border-radius: 03px;
/*padding: 25px;*/
margin: 0 auto;
color: #F1F114;
/*margin-top: 50px;
margin-bottom: 100px;*/
margin-left: 150px;
border-bottom: 1px;
}
.header{
background: #FF8C00;
color: #F1F114;
text-align: left;
height: 50px;
/*width: 625px;*/
margin: 0 auto;
padding: 20px;
/*margin-left: 150px;*/
}
.footer{
background: #FF8C00;
color: #F1F114;
text-align: left;
height: 75px;
/*width: 625px;*/
margin: 0 auto;
}
.col-25{
float: left;
width: 25%;
margin-top: 6px;
}
.col-75{
float: left;
width: 75%;
margin-top: 6px;
}
.row:after {
content: "";
display: table;
clear: both;
}
.button{
background-color: #00FF00;
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
float: right;

}
</style>
<body>
<div style="background: orange;margin-left: 150px;width: 700px;">
<h2 class="header">Registration Form</h2>
</div>
<div>
<form action = "form.php" method = "post">
<div class="row">
<div class="col-25">
<label for="First Name">First Name</label>
</div>
<div class="col-75">
<input type="text" placeholder="First Name" name="firstname"><br>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="Last Name">Last Name</label>
</div>
<div class="col-75">
<input type="text" placeholder="Last Name" name="lastname"><br>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="Department / Office">Department / Office</label>
</div>
<div class="col-75">
<input type="text" name="Department" placeholder="Department"><br>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="Username">Username</label>
</div>
<div class="col-75">
<input type="text" placeholder="Username" name="Uname"><br>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="Password">Password</label>
</div>
<div class="col-75">
<input type="password" name="Password" placeholder="Password"><br>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="Confirm Password">Confirm Password</label>
</div>
<div class="col-75">
<input type="password" name="cpassword" placeholder="Confirm Password"><br>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="Email">Email</label>
</div>
<div class="col-75">
<input type="text" placeholder="E-mail Address" name="email"><br>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="Contact No.">Contact No.</label>
</div>
<div class="col-75">
<input type="text" placeholder="(639)" name="phone"><br>
</div>
</div>
<div class="footer">
<button type="Submit" class="button">Submit</button>
</div>
</body>
