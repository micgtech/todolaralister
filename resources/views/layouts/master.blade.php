
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  
</head>
<body>
  
  <div class="container">


    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <p>Logged as <b>{{ Auth::user()->name }}</b></p>
      <button type="submit" class="waves-effect waves-light btn">Logout</button>
    </form>

    <ul class="collapsible">
      <li>
        <div class="collapsible-header">
          <i class="material-icons">account_circle</i>
          Invitations
          <span class="new badge red">4</span></div>
        <div class="collapsible-body">
          <p>Lorem ipsum dolor sit amet.
            <span class="red-text"><b>Buzz Aldrin</b>
            <a href="#">Accept</a> | <a href="#">Reject</a></span>
          </p>

          <p>Lorem ipsum dolor sit amet.
            <span class="red-text"><b>Neil Armstrong</b>
            <a href="#">Accept</a> | <a href="#">Reject</a></span>
          </p>

          <p>Lorem ipsum dolor sit amet.
            <span class="red-text"><b>Neil DeGrasse</b>
            <a href="#">Accept</a> | <a href="#">Reject</a></span>
          </p>
           
        </div>
      </li>
    </ul>
  
    <h1 class="center-align blue-text text-darken-2">To-do list</h1>
    
        @yield('content')
    
  </div>
  

  <footer>
    <p>Copyright</p>
  </footer>
 


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

  <script src="js/init.js"></script>
  <script>
      var elems = document.querySelectorAll('.collapsible');
      var options;
      var instances = M.Collapsible.init(elems, options);
  
      var elems2 = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems2);


  </script>

  </body>
</html>
