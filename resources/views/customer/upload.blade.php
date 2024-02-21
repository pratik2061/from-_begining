<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
    @vite('resources/css/app.css')
</head>
<body>
            <div class="pt-[100px] pl-[100px] bg-gradient-to-r to-slate-300 from-slate-900 text-white flex justify-center">
                <form action="{{url('/')}}/upload" method="post" enctype="multipart/form-data" class="pb-[50px] relative">
                    @csrf
                    <label for="">Upload your file</label>
                    <input type="file" name="image" id="">
                    <button class="absolute bottom-[5px] right-[200px]  bg-orange-500 px-[9px] py-[3px] rounded-[5px]" > Submit</button>
                </form>
            </div>
</body>
</html>