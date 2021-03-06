<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#foodnote-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="foodnote-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/recipes">Recipes</a></li>
          <li><a href="#">Planner</a></li>
          <li><a href="#">Shopping List</a></li>
        </ul>
        @if (Auth::check())
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/user">{{ Auth::user()->name }}</a></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        @else
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
          </ul>
        @endif
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
