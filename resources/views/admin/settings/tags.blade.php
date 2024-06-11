@extends('admin.layouts.admin')
@section('content')

        <div class="container-fluid h-100">

            <div class="row app-block">
                <div class="col-md-3 app-sidebar">
                    <div class="card">
                      
                        <div class="app-sidebar-menu">
                            @include('admin.settings.sidebar')
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-9 app-content">
                    <div class="app-content-overlay"></div>
                   
                    <div class="card card-body app-content-body">
                        <div class="app-lists">
                            <ul class="list-group list-group-flush">
                             
                                <form action="{{route('admin.tags.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                            @forelse($tags as $tag)
                                    <li class="list-group-item">
                                       <span class="badge bg-secondary">{{$tag->id}} </span>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                                <div class="text-truncate app-list-title"> Images</div>
                                                <div class="pl-3 d-flex">
                                                    <span class="text-nowrap text-muted"></span>
                                                    
                                                </div>
                                            </div>
                                            <div class="text-muted d-flex justify-content-between">
                                                <div class="text-truncate small"></div>
                                                <div class="col-md-12">
                                                    <img src="{{asset('images/'.$tag->image)}}" width="100px">
                                                    <div class="custom-file">
                                                     
                                                        <input type="file" name="tags[{{$tag->id}}][image]" class="custom-file-input  @error('image') is-invalid @enderror" multiple>
                                                            <label class="custom-file-label" for="customFile">Select Images</label>
                                                        </div>
                                                        <small id="emailHelp" class="form-text text-muted"> Select Image
                                                        </small>
                                                          @error('image')
                                                        <span class="invalid-feedback"> <small> *</small> </span>
                                                        @enderror
                                                    </div>
                                                
                                            </div>
                                        </div>
                                    </li>
                                <li class="list-group-item">
                                    <div class="flex-grow-1 min-width-0">
                                        <div class="mb-1 d-flex justify-content-between align-items-center">
                                            <div class="text-truncate app-list-title">  Title</div>
                                            <div class="pl-3 d-flex">
                                                <span class="text-nowrap text-muted"></span>
                                                
                                            </div>
                                        </div>
                                        <div class="text-muted d-flex justify-content-between">
                                            <div class="text-truncate small"></div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="tags[{{$tag->id}}][title]"  value="{{$tag->title}}" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Slider Title">
                                                    <small id="emailHelp" class="form-text text-muted">Slider Title
                                                    </small>
                                                    @error('title')
                                                    <span class="invalid-feedback"> <small> * </small> </span>
                                                    @enderror
                                                </div>
                                            </div>
                                                
                                            
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex-grow-1 min-width-0">
                                        <div class="mb-1 d-flex justify-content-between align-items-center">
                                            <div class="text-truncate app-list-title"> Content</div>
                                            <div class="pl-3 d-flex">
                                                <span class="text-nowrap text-muted"></span>
                                                
                                            </div>
                                        </div>
                                        <input type="hidden" name="tags[{{$tag->id}}][tagId]" value="{{$tag->id}}">
                                        <div class="text-muted d-flex justify-content-between">
                                            <div class="text-truncate small"></div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea type="text"  name="tags[{{$tag->id}}][content]"   placeholder="Enter  content" value="{{$tag->content}}" class="form-control @error('content') is-invalid @enderror"  >{{$tag->content}} </textarea>
                                                    <small id="emailHelp" class="form-text text-muted">Slider Content
                                                    </small>
                                                    @error('content')
                                                    <span class="invalid-feedback"> <small> * </small> </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>              
                                </li>
                                <div class="p-4 border-yellow-400 ">
                                    <hr>
                                </div>
                                @empty 
                                @endforelse

                                

                             
                                <div style="float:right" class="pr-5 pt-3">
                                    <button type="submit" class="btn btn-primary w-20">Update </button>
                                </div>
                            </form>
                            </ul>
                          
                        </div>
                       
                    </div>
                </div>
                
            </div>

        </div>


@endsection
@section('script')
<script>




let message = {!! json_encode(Session::get('message')) !!};
let msg = {!! json_encode(Session::get('alert')) !!};
//alert(msg);
toastr.options = {
        timeOut: 8000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };
if(message != null && msg == 'success'){
toastr.success(message);
}else if(message != null && msg == 'error'){
    toastr.error(message);
}
</script>
@endsection