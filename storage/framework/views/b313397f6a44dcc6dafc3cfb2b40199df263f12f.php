<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account</title>
    <style>
       @font-face { font-family: Arial !important; font-display: swap !important; }
    </style>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="#" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
    ::-webkit-scrollbar {
      width: 8px;
    }
    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1; 
    }
     
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888; 
    }
    
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555; 
    } @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*{
margin: 0;
padding: 0;
box-sizing: border-box;
}

body{
font-family: 'Poppins', sans-serif;
background-color: aliceblue;
}

.wrapper{
padding: 30px 50px;
border: 1px solid #ddd;
border-radius: 15px;
margin: 10px auto;
max-width: 600px;
}
h4{
letter-spacing: -1px;
font-weight: 400;
}
.img{
width: 70px;
height: 70px;
border-radius: 6px;
object-fit: cover;
}
#img-section p,#deactivate p{
font-size: 12px;
color: #777;
margin-bottom: 10px;
text-align: justify;
}
#img-section b,#img-section button,#deactivate b{
font-size: 14px; 
}

label{
margin-bottom: 0;
font-size: 14px;
font-weight: 500;
color: #777;
padding-left: 3px;
}

.form-control{
border-radius: 10px;
}

input[placeholder]{
font-weight: 500;
}
.form-control:focus{
box-shadow: none;
border: 1.5px solid #0779e4;
}
select{
display: block;
width: 100%;
border: 1px solid #ddd;
border-radius: 10px;
height: 40px;
padding: 5px 10px;
/* -webkit-appearance: none; */
}

select:focus{
outline: none;
}
.button{
background-color: #fff;
color: #0779e4;
}
.button:hover{
background-color: #0779e4;
color: #fff;
}
.btn-primary{
background-color: #0779e4;
}
.danger{
background-color: #fff;
color: #e20404;
border: 1px solid #ddd;
}
.danger:hover{
background-color: #e20404;
color: #fff;
}
@media(max-width:576px){
.wrapper{
padding: 25px 20px;
}
#deactivate{
line-height: 18px;
}
}</style>


  <!-- Main CSS-->
    </head>
    <body classname="snippet-body" data-new-gr-c-s-check-loaded="14.1077.0" data-gr-ext-installed="">
      <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
                <a class="logo" href="/admin/home">
                <?php endif; ?>
                <?php if(auth()->check() && auth()->user()->hasRole('User')): ?>
                <a class="logo" href="/home">
                <?php endif; ?>
                  
                    <h1 style="color:yellow">ZIX</h1>
                </a>

            </div>
        </div>
    </div>
    <form action="/Image/Upload" method="post" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
    <div class="wrapper bg-white mt-sm-5">
<h4 class="pb-4 border-bottom">Account settings</h4>
<div class="d-flex align-items-start py-3 border-bottom">
<label for="file"><img src="<?php echo e($user->img); ?>" width="500" class="img" alt=""></label>
<div class="pl-sm-4 pl-2" id="img-section">
<b>Profile Photo</b>
<p>Accepted file type .png. Less than 1MB</p>
<input type="file" required name="img" id="file">
<button type="submit" class="btn button border"><b>Upload</b></button>
</div>
</div>
</form>
<form action="/Account/Save" method="post">
  <?php echo csrf_field(); ?>
<div class="py-2">
<div class="row py-2">
<div class="col-md-6">
<label for="firstname">Name</label>
<input type="text" id="firstname" class="bg-light form-control" name="name" value="<?php echo e($user->name); ?>">
</div>
<div class="col-md-6 pt-md-0 pt-3">
<label for="email">Email Address</label>
<input type="text" id="email" class="bg-light form-control" name="email" value="<?php echo e($user->email); ?>">
</div>
</div>
<div class="row py-2">
  <div class="col-md-6">
  <label for="old">Old Password</label>
  <input type="password" id="old" name="password" class="bg-light form-control" placeholder="*******">
  </div>
  <div class="col-md-6 pt-md-0 pt-3">
  <label for="new">New Password</label>
  <input type="password" id="new" name="new" class="bg-light form-control" placeholder="*******">
  </div>
  </div>

</div>

 
<div class="py-3 pb-4 border-bottom">
<button class="btn btn-primary mr-3">Save Changes</button>
<?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
<a class="btn border button" href="/admin/home">Cancel</a>
<?php endif; ?>
<?php if(auth()->check() && auth()->user()->hasRole('User')): ?>
<a class="btn border button" href="/home">Cancel</a>

<?php endif; ?>
</div>
</form>
<form action="/Account/Delete" method="post">
  <?php echo csrf_field(); ?>
<div class="d-sm-flex align-items-center pt-3" id="deactivate">
<div>
<b>Delete your account</b>
</div>
<div class="ml-auto">

<button type="submit" class="btn danger">Delete</button>
</div>
</div>

</form>
</div>
</div>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript">#</script>
    <script type="text/javascript">
    var myLink = document.querySelectorAll('a[href="#"]');
    myLink.forEach(function(link){
      link.addEventListener('click', function(e) {
        e.preventDefault();
      });
    });
   </script>
    
</body></html><?php /**PATH /var/www/html/Laravel-Projects/MAIN/resources/views/Dashboard/account.blade.php ENDPATH**/ ?>