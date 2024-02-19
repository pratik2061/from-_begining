<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-[100%] h-[60px] bg-[rgb(49,10,12)] relative ">
        <nav class="">
            <div class="text-white p-[10px] absolute left-[100px] text-[25px] font-bold "><p>DEVILS</p></div>
            <div class="text-white absolute left-[290px] top-[17px]"><span><a href="{{url('/')}}">HOME</a></span></div>
            <div class="text-white absolute left-[390px] top-[17px]"><span><a href="{{url('/customer/view')}}">VIEW</a></span></div>
            <div class="text-white absolute left-[490px] top-[17px]"><span><a href="{{url('/register')}}">REGISTER</a></span></div>

        </nav>
    </div>
    
</body>
</html>