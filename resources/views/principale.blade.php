<!DOCTYPE html>
<html>
  <head>
    <title>To Do</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/styleCSS/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style>
        .tabbable{
            border:1px solid #ddd;
            border-top: none;
        }
        .tit{
            font-family: open sans;
            font-size: 2.3em;
            font-weight: bold;
        }
        .container{
            margin-top: 60px;
        }
      .d{
          margin: 30px 30px;
          min-height: 300px;
      }
        .operation{
            color: black;
            display: inline-block;
            margin-left: 10px;
        }
        a.operation:hover {
            color: red;

        }
        .retour{
            margin-top: 50px;
        }

    </style>
  </head>
  <body>
   
      <div class="container col-lg-offset-3" >
        <div class="tabbable center-block col-xs-6 "  > <!-- Only required for left/right tabs -->
          <ul class="nav nav-tabs">
              <li class="active col-xs-5">
                <a href="/To_Do" class="tit" data-toggle="tab">@yield('titre')</a>
              </li>
          </ul>
          <div class="d">
          <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                    @yield('contenu')
            </div>
          </div>
                @yield('ajout')
        </div>
        
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="/styleCSS/js/bootstrap.min.js"></script>
  </body>
</html>