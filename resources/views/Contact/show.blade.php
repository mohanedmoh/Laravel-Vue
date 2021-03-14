@extends('template.default')

@section('content')
<br/>
<br/>

@include('template.partials.messages')

<div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Taly History  </div>
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
                                                        <th>Type</th>
                                                        <th>Plan</th>
                                                        <th >Plot No</th>
                                                        <th >Client</th>
                                                        <th>Phone</th>
                                                        <th >Title</th>
                                                        <th >Describtion</th>
                                                        <!--th >actions</th -->
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    @if ($objs ->count())
                                                        @php $count = 1; @endphp
                                                    @foreach ($objs  as $contacts)
                                                    <tr>
                                                        <td>{{$count++}} </td>
                                                        <td>{{$contacts->type['name']}}</td>
                                                        <td>{{$contacts->plot->plan['name']}}</td>
                                                        <td>{{$contacts->plot['plot_no']}} </td>
                                                        <td>{{$contacts->user['name']}}</td>
                                                        <td>{{$contacts->user['phone']}}</td>
                                                        <td>{{$contacts->title}}</td>
                                                        <td>{{$contacts->describtion}}</td>
                                                        <!--td></td-->
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
