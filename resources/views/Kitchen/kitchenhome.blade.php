<x-app-layout>
   </x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("Kitchen.kitchencss")

  </head>
  <style>
  h1{
    font-size: 72px;
    font-style: italic;
   
  }
</style>
  <body>
  <div class="container-scroller">
      @include("Kitchen.navbar")
        <h1>CONTROL YOUR RESTAURANT FROM HERE</h1>
      </div>

      @include("Kitchen.kitchenscript")
   
  </body>
</html>