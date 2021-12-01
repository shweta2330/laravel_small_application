@extends('layout/app')

@section('section')

<?php // print_r(prodcutData);die;?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>

            <h6><a href="{{url('export-excel-csv-file')}}"> Export</a></h6>
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
        	
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th style="width: 40px">Price</th>
                </tr>
              </thead>
              <tbody>
                @php $i=1; @endphp
                @foreach ($prodcutData as $item)
                    
                
                <tr>
                  <td>{{$i++}}</td>
                  <td><img src="{{ asset('uploads/' . $item->image) }}" width="50px"  height=""/></td>
                  <td>
                    {{$item->name}}
                  </td>
                  <td><span class="badge bg-danger">{{$item->price}}</span></td>
                </tr>
               @endforeach
                
                  
              </tbody>
            </table>
            
              <ul class=" float-right">
                {{ $prodcutData->links() }}
              </ul>
            </div>
          </div>
          </div>
          <!-- /.card-body -->
          


        </div>
        
      </div>
    </section>
    
  </div>
@endsection



