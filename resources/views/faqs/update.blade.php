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
                                                <form action="{{url('/Faq_update')}}" method="POST" class="form-horizontal">
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
                                                   
                                                        
                                                        
                                                       
                                                          <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                                                            <label class="col-md-3 control-label">Question</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                      <span class="input-group-addon input-circle-left">
                                                                        <i class="fa fa-question"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control input-circle-right" name="question" id="question" value="{{old('question',$objs->question)}}"  required>
                                                                 
                                                                </div>
                                                                  @if ($errors->has('question'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('question') }}</strong>
                                                                        </span>
                                                                    @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group{{ $errors->has('answer') ? ' has-error' : '' }}">
                                                            <label class="col-md-3 control-label">Answer</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                      <span class="input-group-addon input-circle-left">
                                                                        <i class="fa fa-reply"></i>
                                                                    </span>
                                                                    <textarea rows="4" cols="50"  class="form-control input-circle-right" name="answer" id="answer" value="{{old('answer',$objs->answer)}}"  required>{{old('answer',$objs->answer)}}</textarea>
                                                                 
                                                                </div>
                                                                  @if ($errors->has('answer'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('answer') }}</strong>
                                                                        </span>
                                                                    @endif
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-7 col-md-4">
                                                                
                                                            
                                                                <a href="{{route('FAQS')}}"  class="btn btn-circle grey-salsa btn-outline">Back</a>
                                                                <button type="submit" name="newUserBTN" id="newUserBTN" style="" class="btn btn-circle red">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
@endsection