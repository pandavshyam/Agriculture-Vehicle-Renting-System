<?php
echo"
<div class='container-fluid'>
            <div class='row'>
                <nav class='navbar navbar-inverse'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span> 
      </button>
      <a class='navbar-brand' href='#'>FFFF</a>
    </div>
    <div class='collapse navbar-collapse' id='myNavbar'>
      <ul class='nav navbar-nav'>
        <li class='active'><a href='#'>Home</a></li>
        <li><a href='#'>Page 1</a></li>
        <li><a href='#'>Page 2</a></li> 
        <li><a href='#'>Page 3</a></li> 
      </ul>
      <ul class='nav navbar-nav navbar-right'>
        <li><a href='#'><span class='glyphicon glyphicon-user'></span>".$_SESSION['uname'];
echo" </a></li>
        <li><a href='#'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>";
?>
