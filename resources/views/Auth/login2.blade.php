<!DOCTYPE HTML>
<html>

<head>
  <!-- Latest compiled and minified CSS -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <title>FAMY SENYAS</title>

</head>

<body class = "login">
  <div class="container">
    <div class = "card">
      @if(!Auth::check())
      <div class="row">
        <div class="col-md-12 center">
          <div id = "panel-wrapper">
            <img class = "img-responsive center" id = "login-logo" src = "../img/logo3.png" style="width: 250px">
            <div class="panel panel-primary center" id = "login-panel">
              <div class="panel-heading">
                <h4>Login to your account</h4>
              </div>

              <form id="loginform" class="form-horizontal" role="form" method="POST" action="{{ url('/handlelogin') }}">
                {{ csrf_field() }}
                @if(count($errors))
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                  </ul>

                </div>
                @endif
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12 {{ $errors->has('username') ? ' has-error' : '' }}">
                      <input type="text" name="username" placeholder="Username" class="form-control login-input" required autofocus>
                      @if ($errors->has('username'))
                      <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                      </span>
                      @endif

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                      <input type="password" name="password" placeholder="Password" class="form-control {{ $errors->has('password') ? ' has-error' : '' }} login-input" required>
                    </div>
                  </div>

                  <div class="row" style="margin-top: 20px;">
                    <div class="col-md-12">
                      <input id="login" type="submit" value="Log-In" name="sumbit" class="form-control btn-submit">
                      @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class = "col-md-4 col-md-offset-4" id = "copyright-login">
                <p class = "center">Developed by ADSOPH Technology Solutions © 2017</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @else

    <div class="jumbotron">
      <h1><a href="/ADMIN">Back to Map</a></h1>
    </div>
    @endif


  </div>


</body>

<!-- <script type="text/javascript">

$('#login').submit(function(){
  //var itemcode = $(this).attr("id");
  var username = document.forms["loginform"]["username"].value;
  console.log(username);

    $.ajax({
      url:"act_logs",
      method: "post",
      data:{username:username},
      success:function(data){

        }

    });
});
</script> -->
<script>

</script>
</html>
