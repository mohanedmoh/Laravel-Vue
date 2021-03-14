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
                                                        <th>Agent</th>
							<th>Phone</th>
                                                        <th>Plan</th>
                                                        <th >Plot No</th>
                                                        <th >Client</th>
                                                        <th >Service</th>
                                                        <!--th >actions</th -->
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    @if ($objs ->count())
                                                        @php $count = 1; @endphp
                                                    @foreach ($objs  as $services)
                                                    <tr>
                                                        <td>{{$count++}} </td>
                                                        <td>{{$services->agent['agent_name']}}</td>
							<td>{{$services->agent['phone']}}</td>
                                                        <td>{{$services->plot->plan['name']}}</td>
                                                        <td>{{$services->plot['plot_no']}} </td>
                                                        <td>{{$services->client_name}}</td>
                                                        <td>{{$services->serviceType['name']}}</td>
                                                       
                                                       
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
