@extends('template.default')

@section('content')
<br/>
<br/>

 <div class="portlet box red">
                                            <div class="portlet-title">
                                                <div class="caption"> Edit 
                                                     </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>                                                   
                                                    

                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="{{url('/Artical_update')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                   <div class="form-body">
                                                   {{ csrf_field() }}
                                                   <div class="hidden form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                                                            <label class="col-md-3 control-label">ID</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                      <span class="input-group-addon input-circle-left">
                                                                        <i class="fa fa-plane"></i>
                                                                    </span>
                                                                    <input readonly type="text" class="form-control input-circle-right" name="id" id="id" value="{{$objs->id}}"  required>
                                                                 
                                                                </div>
                                                                  @if ($errors->has('id'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('id') }}</strong>
                                                                        </span>
                                                                    @endif
                                                            </div>
                                                        </div>

                                                   <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                                            <label class="col-md-3 control-label">Title</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                      <span class="input-group-addon input-circle-left">
                                                                        <i class="fa fa-plane"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control input-circle-right" name="title" id="title" value="{{old('title',$objs->title)}}"  required>
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
                                                                    <textarea rows="8" cols="50"  class="form-control input-circle-right" name="description" id="description" value="{{old('description')}}"  required>{{old('description',$objs->description)}} </textarea>
                                                                 
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
                                                                     <select class="form-control" name='artical_type_id' id='artical_type_id' value="{{old('artical_type_id',$objs->artical_type_id)}}" />
                                                                                    <option value="">إختار</option>
                                                                                    @if ($types->count())
                                                                                        @foreach ($types as $type)
                                                                                            <option value="{{$type->id}}" {{$type->id==$objs->artical_type_id?"selected":""}}>{{$type->title}}</option>
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
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-7 col-md-4">
                                                                
                                                            
                                                                <a href="{{route('Artical')}}"  class="btn btn-circle grey-salsa btn-outline">Back</a>
                                                                <button type="submit" name="newUserBTN" id="newUserBTN" style="" class="btn btn-circle red">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
@endsection