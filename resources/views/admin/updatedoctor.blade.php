
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">

               
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
       @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid ">

        @if(session()->has('message'))
        <div class="alert alert-success">
        
        <button type="button" class="close" data-dismiss="alert">

        X
        </button>
               {{session()->get('message')}}
        </div>

        @endif
        
            
        <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" style="color: black;" class="form-control" name="name" value="{{$data->name}}">
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="text" style="color: black;" class="form-control" name="phone" value="{{$data->phone}}">
  </div>
  <div class="form-group">
    <label>Speciality</label>
    <input type="text" style="color: black;" class="form-control" name="speciality" value="{{$data->speciality}}">
  </div>
  <div class="form-group">
    <label>Room</label>
    <input type="number" style="color: black;" class="form-control" name="room" value="{{$data->room}}">
  </div>
  <div class="form-group">
  <label class="form-label">Image</label>
  <input class="form-control form-control-sm" name="image" type="file" value="{{$data->image}}">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


        </div>
    <!-- container-scroller -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>