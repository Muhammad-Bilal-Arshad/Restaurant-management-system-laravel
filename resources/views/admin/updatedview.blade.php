<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
      @include("admin.navbar")
      <div style = "position: relative; top: 60px; right: -150px">
 
        <form action ="{{url('/update',$data->id)}}" method = "post" enctype = "multipart/form-data">
            @csrf
            <div class = "element">
                <label >Title</label>
                <input style = "color: blue;" type="text" name = "title" value = "{{$data->title}}" required>
            </div>
            <div class = "element">
                <label >Price</label>
                <input style = "color: blue;" type="num" name = "price" value = "{{$data->price}}" required>
            </div>
            <div class = "element">
                <label >OldImage</label>
                <img height = "150" width = "250" src="/foodimage/{{$data->image}}" alt="">
            </div>
            <div class = "element">
                <label >New Image</label>
                <input type="file" name = "image" required>
            </div>
            <div class = "element">
                <label >Description</label>
                <input style = "color: blue;"  type="text" name = "description" value = "{{$data->description}}" required>
            </div>
            <div class = "element">
                
                <input style = "background-color: white; color: black" type="submit" value = "Save">
            </div>

        </form>
     
        <div>
      </div>

      @include("admin.adminscript")
   
  </body>
</html>