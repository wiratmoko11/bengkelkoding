<!DOCTYPE html>
<html lang="en">
<head>
	<title>BengkelKoding</title>
    @include('include/css')
</head>
<body>
    @include('navbar')
    @include('sidebar')
    <div id="content">
        <div class="container-fluid">
            @yield('content')
        </div>
        
    </div>

    @include('include/js')  
</body>
</html>