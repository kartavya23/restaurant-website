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


     <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">

      @csrf

           <div>
                <label>Name</label>
                <input style="color:blue;" type="text" name="name" required="" placeholder="enter name">
           </div>

           <div>
            <label>speciality</label>
            <input style="color:blue;" type="text" name="speciality" required="" placeholder="enter the speciality">
       </div>


       <div>
        <input type="file" name="image" required="">
   </div>

   <div>
    <input style="color:blue;" type="submit" value="save">
</div>

       

     </form>


              <table bgcolor="black">

                <tr>
                  <th style="padding: 30px; ">chef name</th>
                  <th style="padding: 30px; ">speciality</th>
                  <th style="padding: 30px; ">image</th>
                  <th style="padding: 30px; ">action</th>
                  <th style="padding: 30px; ">action</th>
                </tr>

                @foreach($data as $data)
                    
                

                <tr align="center">

                  <td>{{$data->name}}</td>
                  <td>{{$data->speciality}}</td>
                  <td><img height="100px" width="100px" src="/chefimage/{{$data->image}}"></td>
                  <td><a href="{{url('/updatechef',$data->id)}}">update</a></td>

                  <td><a href="{{url('/deletechef',$data->id)}}">delete</a></td>

                </tr>


                @endforeach

              </table>

      
    </div>

      @include("admin.adminscript");
  </body>
</html>
