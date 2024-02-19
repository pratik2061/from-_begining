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
  <div class="w-[100%] h-[60px] bg-[rgb(49,10,12)] relative ">
    <nav class="">
        <div class="text-white p-[10px] absolute left-[100px] text-[25px] font-bold "><p>DEVILS</p></div>
        <div class="text-white absolute left-[290px] top-[17px]"><span><a href="{{url('/')}}">HOME</a></span></div>
        <div class="text-white absolute left-[390px] top-[17px]"><span><a href="{{url('/customer/view')}}">VIEW</a></span></div>
        <div class="text-white absolute left-[490px] top-[17px]"><span><a href="{{url('/register')}}">REGISTER</a></span></div>

    </nav>
</div>
         <div class="w-[100%] h-[100vh] bg-slate-900 flex justify-center">
             <div class="w-[505px] h-[400px] bg-slate-700 mt-[20px] rounded-[10px] shadow-2xl shadow-black text-white">
              <form action="{{url('/')}}/register" method="post">
                @csrf
                 <h1 class="border-b-[3px] border-[#ccc] py-[4px] text-center font-[30px] text-[20px]">Customer Registration</h1>
                 <div class="grid grid-cols-2 ">
                     <div class="mt-[10px] px-[9px]">
                       <label for="">Name</label>
                       <input type="text" name="name" id="" class="bg-slate-700 rounded-[3px] border-[1px] border-white" placeholder=" enter your name">
                       <span class="text-[rgb(200,0,0)] text-[7px]">@error('name')
                         {{$message}}
                       @enderror</span>
                     </div>
                     <div class="mt-[10px] pl-[10px]">
                        <label for="">Email</label>
                        <input type="email" name="email" id="" class="bg-slate-700 rounded-[3px] pl-[3px] border-[1px] border-white" placeholder="email here!!">
                        <span class="text-[rgb(200,0,0)] text-[7px]">@error('email')
                          {{$message}}
                        @enderror</span>
                      </div>
                 </div>
                 <div class="pt-[30px] px-[10px]">
                 <div class="mt-[10px]">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="bg-slate-700 rounded-[3px] ml-[60px] border-[1px] border-white ">
                    <span class="text-[rgb(200,0,0)] text-[7px]">@error('password')
                      {{$message}}
                    @enderror</span>
                  </div>
                  <div class="mt-[10px]">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm_password" id="" class="bg-slate-700 rounded-[3px] border-[1px] border-white ">
                    <span class="text-[rgb(200,0,0)] text-[7px]">@error('confirm_password')
                      {{$message}}
                    @enderror</span>
                  </div>
                 </div>
                 <div class="pt-[30px] px-[10px]">
                    <div class="mt-[10px]">
                        <label for="">Gender : - </label>
                        <input type="radio" name="gender" value="male" id="" class="">
                        <span>Male</span>
                        <input type="radio" name="gender" value="female" id="">
                        <span>Female</span>
                        <input type="radio" name="gender" value="other" id="">
                        <span>Other</span>
                    </div>
                 </div>
                 <div class="px-[10px] mt-[20px]">
                    <label for="" class="">Address</label>
                    <input type="text" name="address" id="" class="bg-slate-700 rounded-[3px] ">
                    <span class="text-[rgb(200,0,0)] text-[10px]">@error('address')
                      {{$message}}
                    @enderror</span>
                 </div>
                 <div class="flex justify-center mt-[20px] py-[10px]">
                    <button class="bg-green-700 px-[36px] py-[8px] rounded-[5px]">Submit</button>
                 </div>
              </form>
             </div>
         </div>
</body>
</html>