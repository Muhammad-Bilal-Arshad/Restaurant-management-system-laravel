<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<x-app-layout>
    
    </x-app-layout>
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        @include("admin.admincss")
       
      </head>
    <div class="container-scroller">
            @include("admin.navbar")
            <style>
                table ,tr ,th,td {
                    border: 2px solid white;
                  
                }
                
                th,tr,td{
                    padding: 30px;
                }
            </style>
            <div id = "1" style ="position: relative; top : 60px; right:-150px;">
                <table  bgcolor=black >
                    <tr >
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @foreach($data as $data)
                    <tr >
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        @if($data->usertype=="0"){<td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>}
                        @else <td>Can't Delete</td>
                        @endif    
                    </tr>
                    @endforeach
                </table>
            </div>
</div>
            
         
    
          @include("admin.adminscript")
       
      </body>
    </html>
</body>
</html>