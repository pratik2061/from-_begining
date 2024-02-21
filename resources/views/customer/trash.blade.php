<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TRash</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-[100%] h-[60px] bg-[rgb(49,10,12)] relative ">
        <nav class="">
            <div class="text-white p-[10px] absolute left-[100px] text-[25px] font-bold "><p>DEVILS</p></div>
            <div class="text-white absolute left-[290px] top-[17px]"><span><a href="{{url('/')}}">HOME</a></span></div>
            <div class="text-white absolute left-[390px] top-[17px]"><span><a href="{{url('/customer/view')}}">VIEW</a></span></div>
            <div class="text-white absolute left-[490px] top-[17px]"><span><a href="{{url('/register')}}">REGISTER</a></span></div>
            <div class="text-white absolute left-[1090px] top-[17px] bg-gradient-to-r from-[#781b94] to-[#00ff80] px-[30px] py-[3px] rounded-[5px] hover:from-[#941b91] hover:to-[#f5ff00]"><span><a href="{{url('/upload')}}">Upload Your File</a></span></div>

        </nav>
    </div>
    <table class="table-auto">
        <thead>
          <tr>
            <th class="">Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Address</th>
            <th class="pl-[100px]">Action</th>
         </tr>
        </thead>
        <tbody>
            @foreach ( $customers as $customer )
          <tr>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->gender}}</td>
            <td>{{$customer->address}}</td>
            <td>
                <button class="ml-[50px] bg-[rgb(200,0,0)] px-[10px] py-[3px] rounded-[3px] text-white"><a href="{{url('/customer/forcedelete')}}/{{$customer->customer_id}}">DELETE</a></button>
                {{-- <button class=" bg-[rgb(0,150,0)] px-[10px] py-[3px] rounded-[3px] text-white"><a href="{{url('/customer/edit')}}/{{$customer->customer_id}}">EDIT</a></button> --}}
                <button class=" bg-[rgb(190,174,66)] px-[10px] py-[3px] rounded-[3px] text-white"><a href="{{url('/customer/restore')}}/{{$customer->customer_id}}">RESTORE</a></button>

                <button class=" bg-[rgb(43,121,97)] px-[10px] py-[3px] rounded-[3px] text-white"><a href="{{url('/customer/view')}}">BACK</a></button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>