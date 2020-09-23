@extends('pages.index')

@section('content')
    <div class="container p-140-cont">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default" style="-webkit-box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);
                -moz-box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);
                box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);">
                    <div class="panel-body">
                        <center> <b style="color:black">{{ $data['profile']->name }}</b> </center>
                        <hr style="margin:0;padding:0px;">
                        <br>
                        <i class="fa fa-envelope"></i> <b style="color:black">{{ $data['profile']->email }}</b><br>
                        <i class="fa fa-phone"></i> <b style="color:black">{{ $data['profile']->contactno }}</b>
                        {{-- <b>BUSINESS DETAILS</b> <i class="fa fa-cog"></i>
                        <hr style="margin:0;padding:0px;">
                        <i class="fa fa-building"></i> <br />
                        <i class="fa fa-building"></i> <br />
                        <i class="fa fa-building"></i> <br /> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-8">

                <div class="panel panel-default" style="-webkit-box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);
                -moz-box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);
                box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);">
                <div class="panel-heading">
                    <center><label>My Purchase</label></center>
                  </div>
                    <div class="panel-body">
                        <div class="table-responsive mb-40">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><b>To Pay</b></th>
                                        <th><b>To Ship</b></th>
                                        <th><b>To Receive</b></th>
                                        <th><b>Completed</b></th>
                                        <th><b>Cancelled</b></th>
                                    </tr>
                                </thead>
                          
                            <tbody>
                                
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    {{-- <td>{{ $quotation->quotation_no }}</td>
                                    <td>{{ date('m/d/Y',  strtotime($quotation->date_generated) )}} </td>
                                    <td><span class="label label-{{ $quotation->status_label }}">{{ $quotation->status_desc }}</span></td> --}}
                                </tr>
                              
                                  <tr>
                                    <td colspan="5">
                                      <center>No Data Available</center>
                                    </td>
                                  </tr>
                               
                              </tbody>
                            </table>
                    </div>
                    </div>
                </div> 



            </div>
        </div>
    </div>
@stop