@extends('layouts.app')

@section('content')
    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

      <!----------------------- Login Container -------------------------->
  
         <div class="row border rounded-5 p-3 bg-white shadow box-area">
  
      <!--------------------------- Left Box ----------------------------->
  
         <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
             <div class="featured-image mb-3">
              <img src="assets/img/TempImg/tmp3.png" class="img-fluid" style="width: 250px;">
             </div>
             <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Thenebit Projects</p>
             <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Manage projects to be able to complete each task on time</small>
         </div> 
  
      <!-------------------- ------ Right Box ---------------------------->
          
         <div class="col-md-6 right-box">
            <div class="row align-items-center">
                  <div class="header-text mb-4">
                    {{-- Add an emoji hello hand to h2 below --}}
                       <h2>Hello, Again</h2> 
                       <p>Let's Go Thenebits</p>
                  </div>
  
                  {{-- @if (session('success'))
                    <div class="header-text mb-4">
                      {{ session('success') }}
                    </div>                    
                  @endif --}}
  
                  <script>
                    @if(session('success'))
                        alert('{{ session('success') }}');
                    @endif
                    
                  </script>
  
                  <form action="{{ url('task') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" name="name" placeholder="Project name" required>
                    </div>
                    <div class="input-group mb-3">
                      <input type="date" class="form-control form-control-lg bg-light fs-6" name="deadline" placeholder="Set Deadline" required>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control form-control-lg bg-light fs-6" name="status" placeholder="Pending" required disabled>
                    </div>                    
                    <div class="input-group mb-3">
                      <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Push Project</button>
                    </div>  
                  </form>                  
            </div>
         </div> 
  
        </div>
     </div>

     {{-- Timeline --}}
     <div class="container d-flex justify-content-center align-items-center">  
      <!-------------------- ------ Right Box ---------------------------->
          
         <div class="col-md-6 right-box">
            <div class="row align-items-center">
                  <div class="header-text mb-4">
                    {{-- Add an emoji hello hand to h2 below --}}
                       <h2 class="text-center">Thenebit Eye &#x1F440;</h2> 
                       
                  </div>

                  <table class="table table-striped">
                    <thead class="bg-primary text-white">
                      <tr>
                        <th>Proj.No</th>
                        <th>Project Name</th>
                        <th>Deadline</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th></th>
                      </tr>
                    </thead>
                    {{-- {{-- <tbody> --}}
                      @foreach ($task as $data)
                      <tr>
                        <td>{{ $data->id}}</td>
                        <td>{{ $data->name}}</td>
                        <td>{{ $data->deadline}}</td>
                        <td>
                            {{ $data->status}}
                        </td>
                        <td>
                          <button class="btn btn-warning">
                            <a class="text-decoration-none text-reset" href="{{ url('progress', $data->id) }}">Progress</a>
                        </button>
                        </td>
                        <td>
                            <button class="btn btn-success">
                                <a class="text-decoration-none text-reset" href="{{ url('completed', $data->id) }}">Completed</a>
                            </button>
                        </td>
                      </tr>
                      @endforeach                      
                    </tbody>
                  </table>            
            </div>
         </div> 
  
        </div>
     </div>
      
@endsection