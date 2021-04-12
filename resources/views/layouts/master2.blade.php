<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('filepond/dist/filepond.css')}}">

</head>
<body>


<input type="file">
	<script type="text/javascript" src="{{asset('filepond/dist/filepond.js')}}"></script>
	{{-- <script type="text/javascript" src="{{asset('filepond/dist/filepond.esm.js')}}"></script> --}}
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

<script>
const inputElement = document.querySelector('input[type="file"]');
const pond = FilePond.create( inputElement );
console.log(pond)
</script>

</body>
</html>