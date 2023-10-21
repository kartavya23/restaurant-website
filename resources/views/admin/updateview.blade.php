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

      @include("admin.navbar");

      <div style="position: relative; top: 60px; right: -100px">
        
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label>title</label>
                <input style="color:blue;" type="text" name="title" value="{{$data->title}}" required>
            </div>

            <div>
                <label>price</label>
                <input style="color:blue;" type="num" name="price" value="{{$data->price}}"  required>
            </div>

           

            <div>
                <label>description</label>
                <input style="color:blue;" type="text" name="description" value="{{$data->description}}" required>
            </div>

            <div>
                <label>old image</label>
                <img height="200" width="200"  src="/foodimage/{{$data->image}}">
            </div>

            <div>
                <label> new image</label>
                <input type="file" placeholder="image" name="image" required>
            </div>

            <div>
                <input  type="submit" value="save">
            </div>
        </form>


        <div>
      
    </div>

      @include("admin.adminscript");
  </body>
</html>
