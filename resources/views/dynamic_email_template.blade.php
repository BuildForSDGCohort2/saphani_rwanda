
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NNA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <p> Hello {{ $data['name'] }},<br></p>
<p>This message comes from NNA.</p>
<p>Use this email <strong>{{ $data['email'] }}</strong> and click on this link to reset your password <a href="" target="blank"><button type="button" class="btn btn-primary">Click To Reset You password</button></a>  and use this email. <div class="alert alert-success"></div> </p>
</div>

</body>
</html>
