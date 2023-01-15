<style>
    
    table , tr , td , th{
        border: 2px solid white;
        color:white;
    }
    body{
        background-color:black;
    }
  </style>
<div>
<table bgcolor = "black">
    <tr align = "center">
        <th style = "padding: 30px">Name</th>
        <th style = "padding: 30px">Email</th>
    </tr>
    @foreach($data as $data)
   
    <tr align = "center">
        <th style = "padding: 30px">{{$data->name}}</th>
        <th style = "padding: 30px">{{$data->email}}</th>
    </tr>
    @endforeach
</table>
</div>