<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select</title>
    @vite('resources/css/app.css')
</head>
<body class="relative">
    <div class="w-[100%] h-[60px] bg-[rgb(49,10,12)] relative ">
        <nav class="">
            <div class="text-white p-[10px] absolute left-[100px] text-[25px] font-bold "><p>DEVILS</p></div>
            <div class="text-white absolute left-[290px] top-[17px]"><span><a href="{{url('/')}}">HOME</a></span></div>
            <div class="text-white absolute left-[390px] top-[17px]"><span><a href="{{url('/customer/view')}}">VIEW</a></span></div>
            <div class="text-white absolute left-[490px] top-[17px]"><span><a href="{{url('/register')}}">REGISTER</a></span></div>
            <div class="text-white absolute left-[1090px] top-[17px] bg-gradient-to-r from-[#781b94] to-[#00ff80] px-[30px] py-[3px] rounded-[5px] hover:from-[#941b91] hover:to-[#f5ff00]"><span><a href="{{url('/upload')}}">Upload Your File</a></span></div>

        </nav>
    </div>
    <div class="absolute right-[150px] top-[95px] ">
      <form action="">
        <input type="text" name="search" value="{{$search}}" id="" placeholder="search by name or email" class="border-[1px] border-black mr-[10px] w-[450px] py-[5px] rounded-[5px] text-center">
        <button class=" px-[50px] py-[5px] rounded-[5px] bg-gradient-to-r from-orange-400 to-orange-200 font-bold ">Search</button>
        <a href="{{url('/customer/view')}}">
        <button type="button" class=" px-[50px] py-[5px] rounded-[5px] bg-gradient-to-r from-purple-300 to-purple-600 font-bold ">Back</button>
      </a>
      </form>
    </div>
    <table class="table-auto absolute top-[150px] left-[10px] ">
        <thead class="border-[2px] border-black">
          <tr>
            <th class="p-[5px] border-x-[2px] border-black text-center ">Id</th>
            <th class="p-[5px] border-x-[2px] border-black text-center ">Name</th>
            <th class="p-[5px] border-x-[2px] border-black text-center ">Email</th>
            <th class="p-[5px] border-x-[2px] border-black text-center ">Gender</th>
            <th class="p-[5px] border-x-[2px] border-black text-center ">Address</th>
            <th class="p-[5px] border-x-[2px] border-black text-center pl-[100px]">Action</th>
         </tr>
        </thead>
        <tbody class=" left-[30px]">
            @foreach ( $customers as $customer )
          <tr class="border-[2px] border-black">
            <td class="p-[3px] border-x-[2px] border-black text-center">{{$customer->customer_id}}</td>
            <td class="p-[3px] border-x-[2px] border-black text-center">{{$customer->name}}</td>
            <td class="p-[3px] border-x-[2px] border-black text-center">{{$customer->email}}</td>
            <td class="p-[3px] border-x-[2px] border-black text-center">{{$customer->gender}}</td>
            <td class="p-[3px] border-x-[2px] border-black text-center">{{$customer->address}}</td>
            <td class="p-[5px] border-x-[2px] border-black ">
                <button class="ml-[50px] bg-[rgb(200,0,0)] px-[10px] py-[3px] rounded-[3px] text-white"><a href="{{url('/customer/delete')}}/{{$customer->customer_id}}">TRASH</a></button>
                <button class=" bg-[rgb(0,150,0)] px-[10px] py-[3px] rounded-[3px] text-white"><a href="{{url('/customer/edit')}}/{{$customer->customer_id}}">EDIT</a></button>
                <button class=" bg-[rgb(33,51,88)] px-[10px] py-[3px] rounded-[3px] text-white"><a href="{{url('/customer/trash')}}">Recycle Bin</a></button>


            </td>
          </tr>
          @endforeach
        </tbody>  

      </table>                            
      
      
      {{-- for pagination --}}

      
      {{-- <div class=" absolute bottom-[0px]">
        {{$customers->links()}}
        </div> --}}
</body>
</html>