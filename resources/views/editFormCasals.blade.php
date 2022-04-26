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
    <form action="{{route('editing_casal')}}" method="POST" enctype="multipart/form-data" style="text-align:center">
    @csrf
        <div>
            <label for="name">Your about to change this casal:</label>
            <br>
            <select id="name" name="name" required>
                    <option value = "{{$casalsInfo[0]->name}}" >{{$casalsInfo[0]->name}}</option>
            </select>
            @error('name')<div class="alert alert-danger" style="color:red">{{ $message }}</div>@enderror
        </div>
        <br>

        <div>

            <label for="name">New casal's Name:</label>
            <br>
            <input name = "newName" type="text" value="{{$casalsInfo[0]->name}}"/>
            <br>
            @error('newName')<div class="alert alert-danger" style="color:red">{{ $message }}</div>@enderror

            <label for="name">New city name:</label>
            <br>
            <select name="newCity" id="newCity">
                @foreach($cities as $city)
                    <option  value="{{$cities[0]->id}}">{{$city->name}}</option>
                @endforeach
            </select>
            <br>
            @error('newCity')<div class="alert alert-danger">{{ $message }}</div>@enderror
            
            <label for="name">New Init date:</label>
            <br>
            <input name = "newInitDate" type="date" value="{{$casalsInfo[0]->initDate}}"/>
            <br>
            @error('newInitDate')<div class="alert alert-danger">{{ $message }}</div>@enderror

            <label for="name">New End Date:</label>
            <br>
            <input name = "newEndDate" type="date" value="{{$casalsInfo[0]->endDate}}"/>
            <br>
            @error('newEndDate')<div class="alert alert-danger">{{ $message }}</div>@enderror

            <label for="name">places</label>
            <br>
            <input type="number" id="newPlaces" style="height:70px" name="newPlaces" value="{{$casalsInfo[0]->places}}" 
            minlength="10" maxlength="255" size="70">
            @error('newPlaces')<div class="alert alert-danger">{{ $message }}</div>@enderror
            <br>
            <br>

        </div>
        <br>
        <div style="cursor: pointer;display:flex;justify-content: center;">
            <div style="width:150px;text-align:center;display:grid;justify-items: center;">
                <div style="display:grid;border:black solid 1px;align-items: center;width:100px;height:50px;">
                    <a href="">
                        <input  type="submit" value="Send">
                    </a>
                </div>
            </div>
        </div>
        <br>
    </form> 

        <div style="cursor: pointer;text-align:center;display:grid;justify-items: center;">
            <div style="display:grid;border:black solid 1px;align-items: center;width:100px;height:50px;">
                <a href="">
                    <button >Back</button>
                </a>
            </div>
        </div>
