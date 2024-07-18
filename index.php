<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            
          <form class="col-sm-5" id="myform" style="margin-left: 32%;">
            <h1 class="alert-warning text-center p-3">
          Add/Update Student
            </h1>

            
            <div style="display:flex; gap:31px; margin:10px;">
              <input type="text" id="stuid" class="form-control" style="display: none;">
                <label for="nameid" class="form-label">name</label>
                <input type="text" class="form-control" id="nameid"/>
            </div>
            <div style="display:flex; gap:31px; margin:10px;">
                <label for="emailid" class="form-label">email</label>
                <input type="email" class="form-control" id="emailid"/>
            </div>
            <div style="display:flex; gap:3px; margin:10px;">
                <label for="passwordid" class="form-lablel">Password</label>
                <input type="text" class="form-control" id="passwordid"/>
            </div>
            &nbsp;
            <div class="mt-3 pr-5 text-center">
                <button type="submit" class="btn btn-primary" id="btnadd">save</button>

            </div>
          </form>


        </div>
        <div class="col-sm-6">
            
            </div>

    </div>
 
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="js/jquery.js" ></script>

</body>
</html>