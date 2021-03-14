@extends('template.default')

@section('content')
<br/>
<br/>

@include('template.partials.messages');

<div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Feedbacks Data </div>
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
                                                        <th>Username</th>
                                                        <th>Phone</th>
                                                        <th >Status</th>
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
<td>{{$obj->user_master["name"]}}</td>
<td>{{$obj->user_master["phone"]}}</td>

<td>{{($obj->status_id)==1?"Pendding":"Finished"}}</td>

<td>
@if($obj->status_id==1)
<button id="" title="Finish Feedback" class="btn btn-success" onclick="finish('{{$obj->id}}')"><span class="fa fa-check fa-fw"></span></button>
@endif
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
 
                     

@endsection

<script>
            function confirmFun(id) {$("#confirmedID").val(id);}
            
            function confirmationNO() {$("#confirmedID").val("");}

            function confirmationYes() 
            {
        
             var id =$("#confirmedID").val();
         
             $.ajax({
                        url: "{{ url('/feedback_delete') }}",
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
        function finish(id) 
            {
             $.ajax({
                        url: "{{ url('/feedback_finish') }}",
                        method: 'post',
                        data: {id:id,  "_token": "{{ csrf_token() }}" },
                        success: function(result)
                        {
                            
                            if(result==1)
                            {
                               $("#infoModal").modal("show");
                                $("#infoBody").html("<div class='alert alert-success'><h3> Finished Successfully</h3></div>");
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