
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
        
<!----------------------------------------------------->

<div class="container-fluid ">
<div align="center">
<table class="table">
  <thead class="thead-info">
    <tr align="center">
    <th scope="col">Serial No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Doctor</th>
      <th scope="col">Date</th>
      <th scope="col">Message</th>
      <th scope="col">Status</th>
      <th scope="col">Approved</th>
      <th scope="col">Cancel</th>
      
    </tr>
  </thead>
  @foreach($data as $apps)
  <tbody>
    <tr>
      <th scope="row">{{($apps->id)}}</th>
      <td>{{($apps->name)}}</td>
      <td>{{($apps->email)}}</td>
      <td>{{($apps->phone)}}</td>
      <td>{{($apps->doctor)}}</td>
      <td>{{($apps->date)}}</td>
      <td>{{($apps->message)}}</td>
      <td>{{($apps->status)}}</td>
      <td><a class="btn btn-success btn-sm" href="{{url('approved',$apps->id)}}">Approved</a></td>
      <td><a class="btn btn-danger btn-sm" href="{{url('cancelled',$apps->id)}}">Cancelled</a></td>
  
    </tr>
   
  </tbody>
  @endforeach
</table>
</div>
</div>
    <!-- container-scroller -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>