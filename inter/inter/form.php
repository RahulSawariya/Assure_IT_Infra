<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
    
</head>
<body>
   <div id="form">
        <h1 align="center">Registration</h1>
        <div class="container">
        <div class="form-group">
            <label for="my-input">Name</label>
            <input  class="form-control" type="text"  id="name">
        </div>
        <div class="form-group">
            <label for="my-input">Email</label>
            <input  class="form-control" type="email"  id="email">
        </div>
        <div class="form-group">
            <label for="my-input">Mobile</label>
            <input  class="form-control" type="tel"  id="mobile">
        </div>
        <input type="button" class="btn btn-primary" id="submit" value="submit">
        </div>
   </div>
   
</body>
</html>