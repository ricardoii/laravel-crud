<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @section('titulo')
    	titulo de pagina
	@show
	    {{HTML::style('css/bootstrap.min.css')}}
		{{HTML::style('css/bootstrap-theme.min.css')}}   
		{{HTML::style('css/jquery.dataTables.min.css')}} 
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
			<a class="navbar-brand" href="{{ URL::to('contactos') }}">Agenda</a>
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
	        <ul class="nav navbar-nav">
	        	<li><a href="{{ URL::to('contactos') }}">Listar todos los contactos</a></li>
				<li><a href="{{ URL::to('contactos/create') }}">Crear un Conctacto</a>
	        </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
    	 @yield('content')
    </div> <!-- /container -->

	{{HTML::script('js/jquery.min.js')}}
   	{{HTML::script('js/bootstrap.min.js')}}
   	{{HTML::script('js/jquery.dataTables.min.js')}}
	
	@section('javascript')
    	
	@show
  </body>
</html>
