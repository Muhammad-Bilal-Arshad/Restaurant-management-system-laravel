<x-app-layout>
   </x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")

  </head>
  <style>
  h1{
    font-size: 72px;
    font-style: italic;
   
  }
</style>
  <body>
  <div class="container-scroller">
      @include("admin.navbar")
        <h1>CONTROL YOUR RESTAURANT FROM HERE</h1>
      </div>

      @include("admin.adminscript")
   
  </body>
</html>