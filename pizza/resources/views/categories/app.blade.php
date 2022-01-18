<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
    <title>Category</title>
</head>
<body>
    <div class="container w-50 mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb">
                    <a href="{{ route('categories.index') }}">Home</a>
                </li>
                <li class="breadcrumb">
                    <a href="{{ route('categories.create') }}">Create Category</a>
                </li>
            </ol>
        </nav>
        @yield('content')
    </div>
</body>
</html>