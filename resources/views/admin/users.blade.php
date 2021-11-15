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

   <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users Data</h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>User</th>
                            <th>Product</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                        <tr>

                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>    
                            <td>  
                            @if($data->usertype=="0")
                            <form method="POST" action="/user/{{ $data->id }}/delete">
                          @method('DELETE')
                             @csrf
                             <button type='submit'  class="badge badge-danger" >Delete</button>
                             </form></td>
                            @else
                            <label   class="badge badge-success" >Not Delete</label>
                             @endif
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