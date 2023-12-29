
<!DOCTYPE html>
<html lang="en">
  <head>

  <style type="text/css">
    label
    {
        display: inline-block;
        width: 200px;
    }
  </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
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
        <div class="container" align="">

        @if(session()->has('message'))
        <div class="alert alert-success">
        
        <button type="button" class="close" data-dismiss="alert">

        X
        </button>
               {{session()->get('message')}}
        </div>

        @endif
       
     <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
@csrf
 <div style="padding: 15px;">


 <label for="">Doctor Name</label>
 <input type="text" style="color:black"name="name" placeholder="Write down the Name" required="">
 </div>

 <div style="padding: 15px;">


 <label for="">Phone Number</label>
 <input type="number" style="color:black" name="phone" placeholder="Write down the Number" required="">
 </div>

 <div style="padding: 15px;">


 <label for="">Doctor's Speciality</label>
<select name="speciality" id="" style="color: black;" width="200px;" required="">
<option>--Select--</option>
<option value="Cardiologist">Cardiologist</option>
<option value="Optholomogist">Optholomogist</option>
<option value="Medicine">Medicine</option>
<option value="Neurologist">Neurologist</option>

</select>
 </div>


 <div style="padding: 15px;">


 <label for="">Chamber No</label>
 <input type="text" style="color:black"name="room" placeholder="Write down the Name" required="">
 </div>


 <div style="padding: 15px;">


<label for="">Doctor's Image</label>
<input type="file" name="file" required="">
</div>

<div style="padding: 15px;">

<input type="submit" class="btn btn-outline-success">


     </form>

        </div> 
        













    <!-- container-scroller -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>