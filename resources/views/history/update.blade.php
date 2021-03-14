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
                                                <form action="{{url('/history_update')}}" method="POST" class="form-horizontal">
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
                                                                        <i class="fa fa-question"></i>
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

                                                        <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                                            <label class="col-md-3 control-label">Article</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                      <span class="input-group-addon input-circle-left">
                                                                        <i class="fa fa-reply"></i>
                                                                    </span>
                                                                    <textarea rows="4" cols="50"  class="form-control input-circle-right" name="desc" id="desc" value="{{old('desc',$objs->desc)}}"  required>{{old('desc',$objs->desc)}}</textarea>
                                                                 
                                                                </div>
                                                                  @if ($errors->has('desc'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('desc') }}</strong>
                                                                        </span>
                                                                    @endif
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-7 col-md-4">
                                                                
                                                            
                                                                <a href="{{route('history')}}"  class="btn btn-circle grey-salsa btn-outline">Back</a>
                                                                <button type="submit" name="newUserBTN" id="newUserBTN" style="" class="btn btn-circle red">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
@endsection