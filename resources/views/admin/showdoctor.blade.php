
<!DOCTYPE html>
<html lang="en">
  <head>
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
    

       <div class="container-fluid ">


       <table class="table">
  <thead class="thead-info">
    <tr align="center">
    <th scope="col">Serial No</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Specicality</th>
      <th scope="col">Room</th>
      <th scope="col">Image</th>
      <th scope="col">Update</th>
      <th scope="col" >Delete</th>

      
    </tr>
  </thead>

  @foreach($data as $doctors)
  <tbody>
    <tr align="center">
      <th scope="row">{{($doctors->id)}}</th>
      <td>{{($doctors->name)}}</td>
      <td>{{($doctors->phone)}}</td>
      <td>{{($doctors->speciality)}}</td>
      <td>{{($doctors->room)}}</td>
      <td><img src="doctorimage/{{($doctors->image)}}"></td>
      <td><a class="btn btn-primary btn-sm" href="{{url('updatedoctor',$doctors->id)}}">Update</a></td>
      <td><a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href="{{url('deletedoctor',$doctors->id)}}">Delete</a></td>
  
    </tr>
   
  </tbody>
  @endforeach
       </table>


       </div>
    <!-- container-scroller -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>