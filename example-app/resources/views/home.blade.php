@extends('layouts.default')
@section('title','HomePage')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Information form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
 <section class="content">
    <div class="col-md">


        <!-- Input addon -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Personal information</h3>
          </div>
          <div class="card-body">

            <label >Name</label>
            <div class="input-group mb-3">

              <input type="text" class="form-control" placeholder="Name">
            </div>

            <label >Surname</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Surname">
            </div>

            <label >Birthday</label>
            <div class="input-group mb-3">

              <input type="date" class="form-control">

            </div>


            <label >Gender</label>
            <div class="input-group mb-3">

                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input">
                    <label class="form-check-label">Male</label>
                    &emsp; &emsp; &emsp;
                    <input type="radio" name="gender" class="form-check-input">
                    <label class="form-check-label">Female</label>
                </div>

              </div>

              <label >Age</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Age">
                <div class="input-group-append">
                </div>
              </div>

              <label >Picture</label>
              <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="custom-File">
                    <label for="custom-File" class="custom-file-label">Choose file</label>
                </div>
              </div>

              <label >Address</label>
              <div class="input-group mb-3">

                    <textarea class="form-control" rows="3" placeholder="address"> </textarea>

              </div>

              <label >Fav Color</label>
              <div class="form-group mb-3 ">
                <select class="form-control">
                    <option value="red">red</option>
                    <option value="blue">blue</option>
                    <option value="green">green</option>
                    <option value="black">black</option>
                    <option value="white">white</option>
                </select>
            </div>

            <label >Music Style</label>

              <div class="custom-control custom-checkbox">

                <input type="checkbox" class="custom-control-input" id="Jazz" value="Jazz">
                <label for="Jazz" class="custom-control-label"> Jazz </label>

            </div>
            <div class="custom-control custom-checkbox">

                <input type="checkbox" class="custom-control-input" id="Rock" value="Rock">
                <label for="Rock" class="custom-control-label"> Rock </label>

            </div>
            <div class="custom-control custom-checkbox">

                <input type="checkbox" class="custom-control-input" id="HipHop" value="HipHop">
                <label for="HipHop" class="custom-control-label"> HipHop </label>

            </div>
            <br><br>
            <div class="form-check ">
                <input type="checkbox" class="form-check-input" id="agree">
                <label class="form-check-label" for="agree">agree</label>
              </div>




          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-info"><i class="fas fa-check-square"></i> Submit</button>
            <button type="submit" class="btn btn-default float-right"><i class="fas fa-times"></i> Cancel</button>
          </div>
        </div>



      </div>
 </section>
@endsection
