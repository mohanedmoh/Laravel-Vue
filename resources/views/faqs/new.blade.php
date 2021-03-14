@extends('template.default')

@section('content')
<br/>
<br/>

@include('template.partials.messages');

<div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        FAQs Data </div>
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
                                                        <th >Question</th>
                                                        <th >Answer</th>
                                                        <th >actions</th>
                                                      

                                                    </tr>
                                                  
                                                </thead>
                                                <tbody>
                                                @if ($objs->count())

@foreach ($objs as $obj)
<tr>
<td>{{$obj->id}}</td>
<td>{{$obj->question}}</td>
<td>{{$obj->answer}}</td>


<td>
<a href="{{route('Faq_edit', Crypt::encrypt($obj->id))}}" data-toggle="tooltip" data-placement="top" title="Edit  Data" class="btn btn-warning" ><span class="fa fa-edit fa-fw"></span></a>                                                        
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
                                                <form action="{{url('/Faq_new')}}" method="POST" class="form-horizontal">
                                                   <div class="form-body">
                                                   {{ csrf_field() }}
                                                   
                                                   
                                                        <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                                                            <label class="col-md-3 control-label">Question</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                      <span class="input-group-addon input-circle-left">
                                                                        <i class="fa fa-question"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control input-circle-right" name="question" id="question" value="{{old('question')}}"  required>
                                                                 
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
                                                                    <textarea rows="4" cols="50"  class="form-control input-circle-right" name="answer" id="answer" value="{{old('answer')}}"  required>{{old('answer')}} </textarea>
                                                                 
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
                        url: "{{ url('/Faq_delete') }}",
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