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
                    <h4 class="card-title">Chiefs Form</h4>                
                    <form class="forms-sample" action="/create/chiefs" method="post" enctype="multipart/form-data">
                    @csrf  
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter the Name">
                    </div>    
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file"  name="image" >
                        </div>
                      <div class="form-group">
                        <label >Position</label>
                        <input type="text" class="form-control" name="position" placeholder="Enter the Position">
                      </div>
                      <div class="form-group">
                      <label >Facebook Link</label>
                        <input type="text" class="form-control" name="facebook" placeholder="Enter the Facebook Link">
                      </div>
                      <div class="form-group">
                      <label >Instagram Link</label>
                        <input type="text" class="form-control" name="instagram" placeholder="Enter the Instagram Link">
                      </div>
                      <div class="form-group">
                      <label >Twitter Link</label>
                        <input type="text" class="form-control" name="twitter" placeholder="Enter the Twitter Link">
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