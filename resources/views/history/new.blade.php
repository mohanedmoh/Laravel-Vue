@extends('template.default')

@section('content')
<br/>
<br/>

@include('template.partials.messages')

<div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Talya History  </div>
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
                                                        <th >Article</th>
                                                        <th >actions</th>
                                                      

                                                    </tr>
                                                  
                                                </thead>
                                                <tbody>
                                                @if ($art->count())

@foreach ($art as $arts)
<tr>
<td>{{$arts->id}}</td>
<td>{{$arts->title}}</td>
<td>{{$arts->desc}}</td>


<td>
<a href="{{route('history_edit', Crypt::encrypt($arts->id))}}" data-toggle="tooltip" data-placement="top" title="Edit  Data" class="btn btn-warning" ><span class="fa fa-edit fa-fw"></span></a>                                                        
<button id="" data-toggle="modal" data-target="#confirmation" data-placement="top" title="Delete Data" class="btn btn-danger" onclick="confirmFun('{{$arts->id}}')"><span class="fa fa-times fa-fw"></span></button>

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
                                                <form action="/store_history" method="POST" class="form-horizontal">
                                                   <div class="form-body">
                                                   {{ csrf_field() }}
                                                   
                                                   
                                                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                                            <label class="col-md-3 control-label">Title</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                      <span class="input-group-addon input-circle-left">
                                                                        <i class="fa fa-question"></i>
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

                                                        <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                                            <label class="col-md-3 control-label">Article</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                      <span class="input-group-addon input-circle-left">
                                                                        <i class="fa fa-reply"></i>
                                                                    </span>
                                                                    <textarea rows="4" cols="50"  class="form-control input-circle-right" name="desc" id="desc" value="{{old('desc')}}"  required>{{old('desc')}} </textarea>
                                                                 
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
                        url: "{{ url('/delete_history') }}",
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