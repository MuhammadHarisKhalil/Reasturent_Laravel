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
   <div class="card-body">
                    <h4 class="card-title">Reservation Data</h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Phone</th>
                            <th>Guest</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Message</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                        <tr>

                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>  
                            <td>{{$data->phone}}</td>
                            <td>{{$data->guest}}</td>    
                            <td>{{$data->date}}</td>
                            <td>{{$data->time}}</td>
                            <td>{{$data->message}}</td>
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