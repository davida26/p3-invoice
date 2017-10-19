<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> @yield('title', 'Invoice Generator') </title>
        <meta name="description" content="Invoice Generator">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="NOINDEX,NOFOLLOW">
        
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ url('css/app.css') }}" type="text/css"> 
    </head>
    <body>
        <div class="container">
			<section>
				@yield('content')	
			</section>
		</div>

		<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.4.min.js"><\/script>')</script>
		
    </body>
</html>