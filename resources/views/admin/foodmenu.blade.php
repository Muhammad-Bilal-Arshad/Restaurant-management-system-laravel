<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <style>
    .element{
        padding: 10px;
    }
    table , tr , td , th{
        border: 2px solid white;
    }
  </style>
  <body>
    <div class="container-scroller">
      @include("admin.navbar")
      <div style = "position: relative; top: 60px; right: -150px">
        <form action ="{{url('/uploadfood')}}" method = "post" enctype = "multipart/form-data">
            @csrf
            <div class = "element">
                <label >Title</label>
                <input style = "color: blue;" type="text" name = "title" placeholder = "write a title" required>
            </div>
            <div class = "element">
                <label >Price</label>
                <input style = "color: blue;" type="num" name = "price" placeholder = "price" required>
            </div>
            <div class = "element">
                <label >Image</label>
                <input type="file" name = "image"  required>
            </div>
            <div class = "element">
                <label >Description</label>
                <input style = "color: blue;"  type="text" name = "description" placeholder = "write a description" required>
            </div>
            <div class = "element">
                
                <input style = "background-color: white; color: black" type="submit" value = "Save">
            </div>



        </form>
        <div>
            <table bgcolor=black>
                <tr>
                    <th style = "padding:30px">FoodName</th>
                    <th style = "padding:30px">Price</th>
                    <th style = "padding:30px">Description</th>
                    <th style = "padding:30px">Image</th>
                    <th style = "padding:30px">Delete</th>
                    <th style = "padding:30px">Update</th>
                </tr>
                @foreach($data as $data)
                <tr align = "center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img src="/foodimage/{{$data->image}}" width = "250" height = "150"></td>
                    <td><a href = "{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    <td><a href = "{{url('/updatemenu',$data->id)}}">Update</a></td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>
      </div>
      @include("admin.adminscript")
   
  </body>
</html>