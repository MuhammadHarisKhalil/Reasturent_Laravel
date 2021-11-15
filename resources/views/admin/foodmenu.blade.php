<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.head")
  </head>
  <body>
  <div class="container-scroller">
   @include("admin.nav")
   <div class="col-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Food Form</h4>                
                    <form class="forms-sample" action="/createfood" method="post" enctype="multipart/form-data">
                    @csrf  
                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter the Title">
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file"  name="image" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label >Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Price">
                      </div>
                      <div class="form-group">
                        <label >Description</label>
                        <textarea class="form-control" name="desc" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Foods Data</h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Desc</th>
                            <th>Delete</th>
                            <th>Update</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                        <tr>

                            <td>{{$data->title}}</td>
                            <td>{{$data->price}}</td>  
                            <td class="py-1">
                              <img src="/foodimage/{{$data->image}}" alt="image" />
                            </td>
                            <td>{{$data->desc}}</td>    
                            <td>            
                            <form method="POST" action="/food/{{ $data->id }}/delete">
                          @method('DELETE')
                             @csrf
                             <button type='submit'  class="badge badge-danger" >Delete</button>
                             </form></td>
                             <td>
                             <button class="badge badge-success" onClick="window.location.href='/food/{{ $data->id }}/edit';">Edit</button>
                             </td>
                        </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

</div>

   @include("admin.foot")
  </body>
</html>