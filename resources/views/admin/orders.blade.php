<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include("admin.admincss")
    
  </head>
  <body>
  
    <div class="container-scroller">

      @include("admin.navbar");

      <div class="container">

      <h1>customer orders</h1>

      <form action="{{url('/search')}}" method="get">

        @csrf

        <input type="text" name="search" style="color:blue; ">

        <input type="submit" value="search" class="btn btn-success">
      </form>

      <table>

       <tr align="center">
        <td style="padding: 30px;">name</td>
        <td style="padding: 30px;">phone</td>
        <td style="padding: 30px;">address</td>
        <td style="padding: 30px;">foodname</td>
        <td style="padding: 30px;">price</td>
        <td style="padding: 30px;">quantity</td>
        <td style="padding: 30px;">total price</td>
      


       </tr>


       @foreach($data as $data)


       <tr align="center" style="background-color: black">
        <td>{{$data->name}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->foodname}}</td>
        <td>{{$data->price}}$</td>
        <td>{{$data->quantity}}</td>
        <td>{{$data->price * $data->quantity}}$</td>
       </tr>


     @endforeach

      </table>
    </div>
    </div>

      @include("admin.adminscript");
  </body>
</html>
