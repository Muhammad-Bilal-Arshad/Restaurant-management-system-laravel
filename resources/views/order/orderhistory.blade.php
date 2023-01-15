

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   table , tr , td , th{
        border: 2px solid white;
   
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
           <div>
           <table bgcolor=black>
                <tr>
                    <th style = "padding:30px ;border: 2px solid white;">Items</th>
                    <th style = "padding:30px ;border: 2px solid white;">Table No</th>
                    <th style = "padding:30px ;border: 2px solid white;">Status</th>
                    <th style = "padding:30px ;border: 2px solid white;">Order Timing</th>
                </tr>
            @foreach($data as $data)
                    <tr align = "center">
                        <td style = "border: 2px solid white;">{{$data->content}}</td>
                        <td style = "border: 2px solid white;">{{$data->tableno}}</td>
                        
                        <td style = "border: 2px solid white;">
                        @if($data->fulfilled == "0")
                           In Progress
                        
                        @elseif($data->fulfilled == "1")
                            Completed
                        
                        @endif
                    
                    </td>
                        <td style = "border: 2px solid white;">{{$data->created_at}}</td>
                    </tr>
            @endforeach
            </table>

           </div>    
     
         
    
          @include("order.orderscript")
       
      </body>
    </html>
</body>
</html>