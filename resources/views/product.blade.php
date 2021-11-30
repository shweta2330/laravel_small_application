@extends('layout/app')

@section('section')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        	
    <form class="form-inline" action="" id="contact-form">
    <label for="email2" class="mb-2 mr-sm-2">name:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="name" placeholder="Enter name" name="name">
    <label for="email2" class="mb-2 mr-sm-2">Price:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="price" placeholder="Enter price" name="price">
    <label for="pwd2" class="mb-2 mr-sm-2">Image:</label>
    <input type="file" class="form-control mb-2 mr-sm-2" id="image" name="image">
    <div class="form-check mb-2 mr-sm-2">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="remember"> Remember me
      </label>
    </div>    
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
  </form>


        </div>
        
      </div>
    </section>
    
  </div>
@endsection



