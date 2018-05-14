<html lang="en">
    <head>
        <title>{{ $title }}</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    
    <body>
        @include('admin.header')

        <div class="container">
            <h2>{{ $title }}</h2>
            <table class="table table-striped table-hover ">
                @yield('table')
            </table>         
        </div>
        
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Picture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <img src="">
              </div>
              
            </div>
          </div>
        </div>

        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>	
        <script src="{{ asset('js/common.js') }}"></script>
    </body>
</html>
