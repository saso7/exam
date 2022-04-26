<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">


            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <div class = "formAddCategory">
                    @yield('form')

    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif         
    <form action="{{route('editing_product')}}" method="POST" enctype="multipart/form-data" style="text-align:center">
        @csrf
        <div class="add-prod-box">
            <label for="name">Name</label>
            <br>
            <input type="text" id="name" name="name" required
                minlength="1" maxlength="50" size="20">
        </div>
        @error('name')<div class="alert alert-danger" style="color:red">{{ $message }}</div>@enderror
        <br>

        <div class="add-prod-box">
            <label for="name">Init Date</label>
            <br>
            <input type="date" id="initDate" name="initDate" required
                size="10">
        </div>
        @error('initDate')<div class="alert alert-danger" style="color:red">{{ $message }}</div>@enderror
        <br>

        <div class="add-prod-box">
            <label for="name">End Date</label>
            <br>
            <input type="date" id="endDate Date" name="endDate" required
                 size="10">
        </div>
        @error('endDate')<div class="alert alert-danger" style="color:red">{{ $message }}</div>@enderror
        <br>

        <div class="add-prod-box">
            <label for="name">Places</label>
            <br>
            <input type="text" id="places" name="places" required
                 size="20">
        </div>
        @error('places')<div class="alert alert-danger" style="color:red">{{ $message }}</div>@enderror
        <br>


        <label for="name">City Id</label>
        <br>
        <div>
            <select name="id_city" id="id_city">
            @foreach($cityInfo as $cityInf)
                <option  value="{{$cityInf->id}}">{{$cityInf->name}}</option>
            @endforeach
        </select>
        </div>
        <br>


        <div style="cursor: pointer;display:flex;justify-content: center;">
            <div style="width:150px;text-align:center;display:grid;justify-items: center;">
                <div style="display:grid;border:black solid 1px;align-items: center;width:100px;height:50px;">
                    <a href="">
                        <input style="cursor:pointer;" type="submit" value="Send">
                    </a>
                </div>
            </div>
        </div>
        <br>
    </form> 
        <div style="cursor: pointer;text-align:center;display:grid;justify-items: center;">
            <div style="display:grid;border:black solid 1px;align-items: center;width:100px;height:50px;">
                <a href="{{route('casalView')}}">
                    <button >Back</button>
                </a>
            </div>
        </div>
    <br>