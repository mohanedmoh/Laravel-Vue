@extends('template.default')

@section('content')
<br/>
<br/>

@include('template.partials.messages');

<div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Articals Data </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        
                                    
                                        
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                      
                                            <table data-pagination="true" data-search="true" id="sample_1" class="table table-striped table-bordered table-hover" >
                                               <thead>
                                                    <tr class="">
                                                        
                                                        <th >#</th>
                                                        <th >Title</th>
                                                        <th >Description</th>
                                                        <th >Type</th>
                                                        <th >Image</th>
                                                        <th >actions</th>
                                                      

                                                    </tr>
                                                  
                                                </thead>
                                                <tbody>
                                                @if ($objs->count())

@foreach ($objs as $obj)
<tr>
<td>{{$obj->id}}</td>
<td>{{$obj->title}}</td>
<td>{{$obj->description}}</td>
<td>{{$obj->artical_type['title']}}</td>
<td>
@if($obj->url!=null)
<a href="{{str_replace('public','storage',$obj->url) }}" data-toggle="tooltip" data-placement="top" title="Edit  Data" class="btn btn-success" ><span class="fa fa-folder-open fa-fw"></span></a>                                                        
@endif
</td>

<td>
<a href="{{route('Artical_edit', Crypt::encrypt($obj->id))}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Edit  Data" class="btn btn-warning" ><span class="fa fa-edit fa-fw"></span></a>                                                        
<button id="" data-toggle="modal" data-target="#confirmation" data-placement="top" title="Delete Data" class="btn btn-danger" onclick="confirmFun('{{$obj->id}}')"><span class="fa fa-times fa-fw"></span></button>

</td>
</tr>
@endforeach

@endif
</tbody>
                                                
                                              
                                            </table>
                                        </div>
                                </div>
                            </div>
<hr/>
  <div class="portlet box red">
                                            <div class="portlet-title">
                                                <div class="caption"> Add New
                                                     </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>                                                   
                                                    

                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="{{url('/Artical_new')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                   <div class="form-body">
                                                   {{ csrf_field() }}
                                                   
                                                   
                                                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                                            <label class="col-md-3 control-label">Title</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                      <span class="input-group-addon input-circle-left">
                                                                        <i class="fa fa-plane"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control input-circle-right" name="title" id="title" value="{{old('title')}}"  required>
                                                                 
                                                                </div>
                                                                  @if ($errors->has('title'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('title') }}</strong>
                                                                        </span>
                                                                    @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                                            <label class="col-md-3 control-label">description</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                      <span class="input-group-addon input-circle-left">
                                                                        <i class="fa fa-reply"></i>
                                                                    </span>
                                                                    <textarea rows="8" cols="50"  class="form-control input-circle-right" name="description" id="description" value="{{old('description')}}"  required>{{old('description')}} </textarea>
                                                                 
                                                                </div>
                                                                  @if ($errors->has('description'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('description') }}</strong>
                                                                        </span>
                                                                    @endif
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group{{ $errors->has('artical_image') ? ' has-error' : '' }}">
                                                        <label class="col-md-3 control-label">Upload Image</label>
                                                            <div class="col-md-6">
                                                                <input type="file" name="artical_image" id="artical_image" value="{{old('artical_image')}}" class="form-control"/>
                                                                @if ($errors->has('artical_image'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('artical_image') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        
                                                       
                                                          <div class="form-group{{ $errors->has('artical_type') ? ' has-error' : '' }}">
                                                            <label class="col-md-3 control-label">Artical Type</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon input-circle-left">
                                                                        <i class="fa fa-building"></i>
                                                                    </span>
                                                                     <select class="form-control" name='artical_type_id' id='artical_type_id' value="{{old('artical_type_id')}}" >
                                                                                    <option value="">إختار</option>
                                                                                    @if ($types->count())
                                                                                        @foreach ($types as $type)
                                                                                            <option value="{{$type->id}}">{{$type->title}}</option>
                                                                                        @endforeach
                                                                                    @endif
                                                                                </select>
                                                                </div>
                                                                  @if ($errors->has('artical_type_id'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('artical_type_id') }}</strong>
                                                                        </span>
                                                                    @endif
                                                            </div>
                                                        </div>                                                       
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-7 col-md-4">
                                                                
                                                            
                                                                <button type="reset"  class="btn btn-circle grey-salsa btn-outline">Reset</button>
                                                                <button type="submit" name="newUserBTN" id="newUserBTN" style="" class="btn btn-circle red">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>

@endsection

<script>
            function confirmFun(id) {$("#confirmedID").val(id);}
            
            function confirmationNO() {$("#confirmedID").val("");}

            function confirmationYes() 
            {
        
             var id =$("#confirmedID").val();
         
             $.ajax({
                        url: "{{ url('/Artical_delete') }}",
                        method: 'post',
                        data: {id:id,  "_token": "{{ csrf_token() }}" },
                        success: function(result)
                        {
                            if(result==1)
                            {
                               $("#infoModal").modal("show");
                                $("#infoBody").html("<div class='alert alert-success'><h3> Deleted Successfully</h3></div>");
                            }
                            else
                            {
                                $("#infoModal").modal("show");
                                $("#infoBody").html("<div class='alert alert-danger'><h3><strong>Error !</strong> Please try again later</h3></div>");
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) { alert(errorThrown);}
                    });

        }
</script>