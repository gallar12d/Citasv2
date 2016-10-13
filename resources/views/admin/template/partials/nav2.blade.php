<div id="navbar" class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"></a>

    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="#main-slider"> <i class="icon-home"></i>

                </a>
            </li>
            <li>
                <a href="{{ route('admin.users.index') }}">Usuarios</a>
            </li>
          
         
        
        </ul>
         <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}  <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/logout') }}">Salir</a></li>
           
          </ul>
        </li>
      </ul>
    </div>
</div>