@extends('admin.layout')

@section('title','Categories')


@section('content')

@if (Session::has('mess'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ Session::get('mess') }}</strong>
    <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close" style="margin-left:50rem ; font-size:25px">X</button>
  </div>
@endif

@if (Session::has('dmess'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ Session::get('dmess') }}</strong>
    <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close" style="margin-left:50rem ; font-size:25px">X</button>
  </div>
@endif
       

  <div class="modal fade" id="deletecat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Are You Sure You Want To Delete This Category.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
             <form method="post">
                @csrf
               <input type="hidden" id="feed_id" name="del_id" value="" />
            <button type="submit" name="del_btn" class="btn btn-danger">Delete</button>
            </form> 
            </div>
    </div>
</div>
</div>


 <h3 class="m-3">Categories</h3>

 <div class="w-50 m-3">
    <form action="" method="post">
        @csrf
        <input type="text" name="cat_name" id="" class="form-control mt-3">
        <input type="submit" value="Add Category" name="add_btn" class="btn btn-primary mt-3">
    </form>
 </div>

 <div>
 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All Cateogies</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>

                                        @foreach ($b as $item)
                                        <tr>
                                            <td>{{$item->cat_name}}</td>
                                            <td> <a class="btn btn-secondary" id="del" href="#" data-id="{{ $item->id }}" data-toggle="modal" data-target="#deletecat">
                                            {{-- <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> --}}
                                            
                                            Delete
                                        </a></td>
                                            </tr>
                                        @endforeach
                                    
                                          
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
 </div>

 <script>
    $(document).ready(function () {
    $('body').on('click', '#del',function(){
        document.getElementById("feed_id").value = $(this).attr('data-id');
            console.log($(this).attr('data-id'));
        });
    });

 </script>















@endsection