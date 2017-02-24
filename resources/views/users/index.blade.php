<!DOCTYPE html>
<html>
<head>
	<title>Gerenciamento de Usuários</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    
</head>
<body>
	<div class="container" id="app">

       	<dc-users success="{{ Session::get('success') }}" token="{{ csrf_token() }}" list="{{ $users }}"></dc-users>


    </div>
    
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>