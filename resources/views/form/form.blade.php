<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
 <div class="w-[100%]">
    <form action="{{url('/')}}/form" method="post">
        @csrf
        <h1 class="text-center text-3xl font-bold pb-[40px]">Registration</h1>
        <div class="pt-[10px] bg-[#ccc] ">
            <div class="pb-[10px] ">
            <label for="" class="pl-[100px] text-[30px] px-[10px] ">Username</label>
            <input type="text" name="name" class="pl-[3px] text-xl rounded-[5px]" placeholder="User name">
           <div class="text-xl text-[rgb(200,0,0)] text-center">
            @error('name'){{$message}}    
            @enderror
            
           </div>
        </div>
            <div class="pb-[10px]">
                <label for="" class="pl-[100px] text-[30px] px-[70px]">Email</label>
                <input type="email" name="email" class="pl-[3px] text-xl rounded-[5px]" placeholder="enter your email">
                <div class="text-xl text-[rgb(200,0,0)] text-center">
                    @error('email'){{$message}}    
                    @enderror
                    
                   </div>   
            </div>
                <div class="pb-[10px]">
                    <label for="" class="pl-[100px] text-[30px] px-[10px]">Password</label>
                    <input type="password" name="password" class="pl-[3px] text-xl rounded-[5px]">
                    <div class="text-xl text-[rgb(200,0,0)] text-center">
                        @error('password'){{$message}}    
                        @enderror
                        
                       </div>
                </div>
                    <div class="pb-[10px]">
                        <label for="" class="pl-[100px] text-[30px] px-[10px]">Confirm Password</label>
                        <input type="password" name="confirm_password" class="pl-[3px] text-xl rounded-[5px]">
                        <div class="text-xl text-[rgb(200,0,0)] text-center">
                            @error('confirm_password'){{$message}}    
                            @enderror
                            
                           </div>   
                    </div>
                    <div class=" pl-[250px] py-[10px]">
                    <button class="bg-[rgb(90,22,55)] text-white rounded-[8px] px-[10px]">Submit</button>
                    </div>
        </div>
    </form>
 </div>
</body>
</html>