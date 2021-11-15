<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
  @include("admin.head")
  </head>
  <body>
  <div class="container-scroller">
   @include("admin.nav")
   <div class="col-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Food Form</h4>                
                    <form class="forms-sample" action="/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                    @csrf  
                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" class="form-control" name="title" value="{{$data->title}}">
                      </div>
                      <td class="py-1">
                        <img src="/foodimage/{{$data->image}}" alt="image" width="100" height="100"/>
                       </td>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file"  name="image" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label >Price</label>
                        <input type="number" class="form-control" name="price" value="{{$data->price}}">
                      </div>
                      <div class="form-group">
                        <label >Description</label>
                        <textarea class="form-control" name="desc" rows="4" >{{$data->desc}}</textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>

</div>

   @include("admin.foot")
  </body>
</html>