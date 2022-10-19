<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaravelPH: Home </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
	<link href="css/main.css" rel="stylesheet" type="text/css" />
        <link href="css/agency.css" rel="stylesheet" type="text/css" />

       <style>
       </style>
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
		<a class="navbar-brand" href="#page-top">
   <img src="https://raw.githubusercontent.com/laravelph/art/master/icon.svg" alt="LaravelPH Logo Icon " style="  filter: invert(40%) sepia(23%) saturate(4478%) hue-rotate(338deg) brightness(101%) contrast(97%); " height="150" width="150" />
</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
		</button>
</div>
        </nav>
       <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To LaravelPH!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
	</header>

        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Laravel.ph</h2>
                    <h3 class="section-subheading text-muted">A website for the LaravelPH community.</h3>
                </div>
		<div class="row text-center">
		</div>
		</div>
	</section>
<!--
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
-->

            <div class="container">
                <div class="col-xs-12 lex justify-center pt-8 sm:justify-start sm:pt-0">
				<p>LaravelPH is a community of laravel enthusiasts! Join us on our <a href="https://www.facebook.com/groups/185448994945295">facebook group</a>!</p>
                </div>


		<div class="footer" style="position:absolute; bottom: 2rem">
		    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">LaravelPH &copy 2016- @php echo date('Y'); @endphp </div>
                </div>
            </div>
        </div>
    </body>
</html>
