
<!-- banner -->
<div class="inside-banner">
  
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Register</span>
    <h2>Register</h2>
</div>
</div>
<!-- banner -->

<form method="POST" action="">
  @csrf
<div class="container">
<div class="spacer">
<div class="row register">
  
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
      

                <input type="text" class="form-control" placeholder="Full Name"id = name name="name">
                <input type="email" class="form-control" placeholder="Enter Email"id=email name="email">
                <input type="password" class="form-control" placeholder="Password"id=password name="password">
                <input type="text" class="form-control" placeholder="Address"id = address name ="address">

                <button type="submit" class="btn btn-success"name="Submit">Register</button>
          


                
        </div>
  
</div>
</div>
</div>
</form>
