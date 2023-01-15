<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .element{
        padding:10px;
    }
</style>
<body>
<x-app-layout>
    
    </x-app-layout>
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        @include("order.ordercss")
       
      </head>
    <div class="container-scroller">
            @include("order.navbar")
               <div style = "position: relative; top: 60px; right: -150px">
        <form action ="{{url('/uploadorder')}}" method = "post" enctype = "multipart/form-data">
            @csrf
            <div class = "element">
                <label >Items</label>
                <input style = "color: blue;" type="text" name = "content" required>
            </div>
            <div class = "element">
                <label >Table No</label>
                <input style = "color: blue;" type="text" name = "tableno"  required>
            </div>
            <div class = "element">
                <label >Status</label>
                <input style = "color: blue;" type="text" name = "fulfilled" value = "0" >
            </div>
            <div class = "element">
                
                <input style = "background-color: white; color: black" type="submit" value = "Save">
            </div>



        </form>
      
           
</div>
            
         
    
          @include("order.orderscript")
       
      </body>
    </html>
</body>
</html>