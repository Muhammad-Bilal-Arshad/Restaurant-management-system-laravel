<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <style>
                table ,tr ,th,td {
                    border: 2px solid white;
                  
                }
                
                th,tr,td, .searching{
                    padding: 20px;
                }
            </style>
  <body>
  <div class="container-scroller">
      @include("admin.navbar")
      <div id = "1" style ="position: relative; top : 60px; right:-150px;">
      <form class = 'searching' action = "{{url('/search')}}" method = "get">
        @csrf
        <input type = "text" name = "search" style = "color: blue;">
        <input type = "submit" value = "search" class = "btn btn-success">
      </form>
        <table  bgcolor=black >
                    <tr >
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Guest</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Message</th>
                    </tr>
                    @foreach($data as $data)
                    <tr >
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td> 
                        <td>{{$data->phone}}</td> 
                        <td>{{$data->guest}}</td> 
                        <td>{{$data->date}}</td> 
                        <td>{{$data->time}}</td> 
                        <td>{{$data->message}}</td>   
                    </tr>
                    @endforeach
                </table>
      </div>
    </div>

      @include("admin.adminscript")
   
  </body>
</html>