@extends('layout/main')

@section('title', 'Henkaten')

@section('container')
<div class="col-md-12" id="load_content" height=100%>
    <div class="row">
        <div class="col-12" >
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" style="margin: 2px 15px; font-size:20px; font-weight:bold">
                    <a class="nav-link active" id="Aplus-tab" data-toggle="tab" href="#homeAplus" role="tab" aria-controls="homeAplus" aria-selected="true">Area A+</a>
                </li>
                <li class="nav-item" style="margin: 2px 15px; font-size:20px; font-weight:bold">
                    <a class="nav-link" id="A-tab" data-toggle="tab" href="#homeA" role="tab" aria-controls="homeA" aria-selected="true">Area A</a>
                </li>
                <li class="nav-item" style="margin: 2px 15px; font-size:20px; font-weight:bold">
                    <a class="nav-link" id="B-tab" data-toggle="tab" href="#homeB" role="tab" aria-controls="homeB" aria-selected="false">Area B</a>
                </li>
                <li class="nav-item" style="margin: 2px 15px; font-size:20px; font-weight:bold">
                    <a class="nav-link" id="C-tab" data-toggle="tab" href="#homeC" role="tab" aria-controls="homeC" aria-selected="false">Area C</a>
                </li>
                <li class="nav-item" style="margin: 2px 15px; font-size:20px; font-weight:bold">
                    <a class="nav-link" id="D-tab" data-toggle="tab" href="#homeD" role="tab" aria-controls="homeD" aria-selected="false">Area D</a>
                </li>
                <li class="nav-item" style="margin: 2px 15px; font-size:20px; font-weight:bold">
                    <a class="nav-link" id="E-tab" data-toggle="tab" href="#homeE" role="tab" aria-controls="homeE" aria-selected="false">Area E</a>
                </li>
                <li class="nav-item" style="margin: 2px 15px; font-size:20px; font-weight:bold">
                    <a class="nav-link" id="F-tab" data-toggle="tab" href="#homeF" role="tab" aria-controls="homeF" aria-selected="false">Area F</a>
                </li>
                <li class="nav-item" style="margin: 2px 15px; font-size:20px; font-weight:bold">
                    <a class="nav-link" id="All-tab" data-toggle="tab" href="#homeAll" role="tab" aria-controls="homeAll" aria-selected="false">All Area</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row" style="margin: 30px 10px;">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="homeAplus" role="tabpanel" aria-labelledby="Aplus-tab">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>MACHINE</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="row float-right" style="padding-right: 100px ">
                                                    <button style="background-color: rgb(6, 231, 6); width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: ON</h6>
                                                    <button style="background-color: yellow; width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: STANDBY</h6>
                                                    <button style="background-color: grey; width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: OFF</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($henkaten as $henkaten)
                                            @if ($henkaten->Power_ON == 1 && $henkaten->Auto_Mode_Signal == 1)
                                                <div class="card hkt-item" id="{{$henkaten->Machine_Number}}" style="background-color: rgb(6, 231, 6); width:9rem; height:6rem; margin:5px; padding-top:8px;" data-toggle="modal" data-target="#modalAplus{{$henkaten->Machine_Number}}">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold;">{{$henkaten->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkaten->PartName}}</span>
                                                                                                <!-- Modal -->
                                                                                                <div class="modal fade" id="modalAplus{{$henkaten->Machine_Number}}" tabindex="-1" role="dialog" aria-labelledby="modalAplus" aria-hidden="true">
                                                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$henkaten->Machine_Number}}</h5>
                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                        </button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                            <p>Nama Part 1 : {{$henkaten->NamaPart1}}</p>
                                                                                                            <p>Nama Part 2 : {{$henkaten->NamaPart2}}</p>
                                                                                                            <p>Nama Part 3 : {{$henkaten->NamaPart3}}</p>
                                                                                                            <p>Nama Part 4 : {{$henkaten->NamaPart4}}</p>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    </div>
                                                                                                </div>
                                                </div>
                                            @elseif ($henkaten->Power_ON == 1 && $henkaten->Auto_Mode_Signal == 0)
                                                <div class="card hkt-item" id="{{$henkaten->Machine_Number}}" style="background-color: yellow; width:9rem; height:6rem; margin:5px; padding-top:8px" data-toggle="modalAplus" data-target="#modalAplus">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold">{{$henkaten->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkaten->PartName}}</span>
                                                </div>
                                            @elseif ($henkaten->Power_ON == 0)
                                                <div class="card hkt-item" id="{{$henkaten->Machine_Number}}" style="background-color: grey; width:9rem; height:6rem; margin:5px; padding-top:8px" data-toggle="modalAplus" data-target="#modalAplus">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold">{{$henkaten->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkaten->PartName}}</span>
                                                </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" style="padding-left: 70px">
                                <div class="row">
                                    <div class="col-6">
                                        <h5>STATION</h5>
                                    </div>
                                    <div class="col-6">
                                        <div class="row float-right" style="padding-right: 100px ">
                                            <button style="background-color: rgb(6, 231, 6); width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: ON</h6>
                                            <button style="background-color: red; width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: PROBLEM</h6>
                                            <button style="background-color: grey; width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: OFF</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach ($station as $station)
                                        @if ($station->tanggal != NULL)
                                            <div class="card hkt-sttn" id="{{$station->Nama_Station}}" style="background-color: rgb(6, 231, 6); width:9rem; height:6rem; margin:5px; padding-top:8px">
                                                <span style="font-size: 28px; text-align:center; font-weight:bold">{{$station->Nama_Station}}</span>
                                                <span style="font-size: 11px; text-align:center; font-weight:bold">{{$station->mp_id}}</span>
                                            </div>
                                        @elseif ($station->tanggal == NULL)
                                            <div class="card hkt-sttn" id="{{$station->Nama_Station}}" style="background-color: grey; width:9rem; height:6rem; margin:5px; padding-top:8px">
                                                <span style="font-size: 28px; text-align:center; font-weight:bold">{{$station->Nama_Station}}</span>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="homeA" role="tabpanel" aria-labelledby="A-tab">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>MACHINE</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="row float-right" style="padding-right: 100px ">
                                                    <button style="background-color: rgb(6, 231, 6); width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: ON</h6>
                                                    <button style="background-color: yellow; width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: STANDBY</h6>
                                                    <button style="background-color: grey; width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: OFF</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($henkatenA as $henkatenA)
                                            @if ($henkatenA->Power_ON == 1 && $henkatenA->Auto_Mode_Signal == 1)
                                                <div class="card hkt-item" id="{{$henkatenA->Machine_Number}}" style="background-color: rgb(6, 231, 6); width:9rem; height:6rem; margin:5px; padding-top:8px;" data-toggle="modal" data-target="#modalAplus{{$henkatenA->Machine_Number}}">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold;">{{$henkatenA->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkatenA->PartName}}</span>
                                                                                                <!-- Modal -->
                                                                                                <div class="modal fade" id="modalAplus{{$henkatenA->Machine_Number}}" tabindex="-1" role="dialog" aria-labelledby="modalAplus" aria-hidden="true">
                                                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$henkatenA->Machine_Number}}</h5>
                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                        </button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                            <p>Nama Part 1 : {{$henkatenA->NamaPart1}}</p>
                                                                                                            <p>Nama Part 2 : {{$henkatenA->NamaPart2}}</p>
                                                                                                            <p>Nama Part 3 : {{$henkatenA->NamaPart3}}</p>
                                                                                                            <p>Nama Part 4 : {{$henkatenA->NamaPart4}}</p>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    </div>
                                                                                                </div>
                                                </div>
                                            @elseif ($henkatenA->Power_ON == 1 && $henkatenA->Auto_Mode_Signal == 0)
                                                <div class="card hkt-item" id="{{$henkatenA->Machine_Number}}" style="background-color: yellow; width:9rem; height:6rem; margin:5px; padding-top:8px" data-toggle="modalAplus" data-target="#modalAplus">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold">{{$henkatenA->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkatenA->PartName}}</span>
                                                </div>
                                            @elseif ($henkatenA->Power_ON == 0)
                                                <div class="card hkt-item" id="{{$henkatenA->Machine_Number}}" style="background-color: grey; width:9rem; height:6rem; margin:5px; padding-top:8px" data-toggle="modalAplus" data-target="#modalAplus">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold">{{$henkatenA->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkatenA->PartName}}</span>
                                                </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" style="padding-left: 70px">
                                <div class="row">
                                    <div class="col-6">
                                        <h5>STATION</h5>
                                    </div>
                                    <div class="col-6">
                                        <div class="row float-right" style="padding-right: 100px ">
                                            <button style="background-color: rgb(6, 231, 6); width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: ON</h6>
                                            <button style="background-color: red; width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: PROBLEM</h6>
                                            <button style="background-color: grey; width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: OFF</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach ($stationA as $stationA)
                                        @if ($stationA->tanggal != NULL)
                                            <div class="card hkt-sttn" id="{{$stationA->Nama_Station}}" style="background-color: rgb(6, 231, 6); width:9rem; height:6rem; margin:5px; padding-top:8px">
                                                <span style="font-size: 28px; text-align:center; font-weight:bold">{{$stationA->Nama_Station}}</span>
                                                <span style="font-size: 11px; text-align:center; font-weight:bold">{{$stationA->mp_id}}</span>
                                            </div>
                                        @elseif ($stationA->tanggal == NULL)
                                            <div class="card hkt-sttn" id="{{$stationA->Nama_Station}}" style="background-color: grey; width:9rem; height:6rem; margin:5px; padding-top:8px">
                                                <span style="font-size: 28px; text-align:center; font-weight:bold">{{$stationA->Nama_Station}}</span>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="homeB" role="tabpanel" aria-labelledby="B-tab">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>MACHINE</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="row float-right" style="padding-right: 100px ">
                                                    <button style="background-color: rgb(6, 231, 6); width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: ON</h6>
                                                    <button style="background-color: yellow; width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: STANDBY</h6>
                                                    <button style="background-color: grey; width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: OFF</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($henkatenB as $henkatenB)
                                            @if ($henkatenB->Power_ON == 1 && $henkatenB->Auto_Mode_Signal == 1)
                                                <div class="card hkt-item" id="{{$henkatenB->Machine_Number}}" style="background-color: rgb(6, 231, 6); width:9rem; height:6rem; margin:5px; padding-top:8px;" data-toggle="modal" data-target="#modalAplus{{$henkatenB->Machine_Number}}">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold;">{{$henkatenB->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkatenB->PartName}}</span>
                                                                                                <!-- Modal -->
                                                                                                <div class="modal fade" id="modalAplus{{$henkatenB->Machine_Number}}" tabindex="-1" role="dialog" aria-labelledby="modalAplus" aria-hidden="true">
                                                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$henkatenB->Machine_Number}}</h5>
                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                        </button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                            <p>Nama Part 1 : {{$henkatenB->NamaPart1}}</p>
                                                                                                            <p>Nama Part 2 : {{$henkatenB->NamaPart2}}</p>
                                                                                                            <p>Nama Part 3 : {{$henkatenB->NamaPart3}}</p>
                                                                                                            <p>Nama Part 4 : {{$henkatenB->NamaPart4}}</p>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    </div>
                                                                                                </div>
                                                </div>
                                            @elseif ($henkatenB->Power_ON == 1 && $henkatenB->Auto_Mode_Signal == 0)
                                                <div class="card hkt-item" id="{{$henkatenB->Machine_Number}}" style="background-color: yellow; width:9rem; height:6rem; margin:5px; padding-top:8px" data-toggle="modalAplus" data-target="#modalAplus">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold">{{$henkatenB->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkatenB->PartName}}</span>
                                                </div>
                                            @elseif ($henkatenB->Power_ON == 0)
                                                <div class="card hkt-item" id="{{$henkatenB->Machine_Number}}" style="background-color: grey; width:9rem; height:6rem; margin:5px; padding-top:8px" data-toggle="modalAplus" data-target="#modalAplus">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold">{{$henkatenB->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkatenB->PartName}}</span>
                                                </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" style="padding-left: 70px">
                                <div class="row">
                                    <div class="col-6">
                                        <h5>STATION</h5>
                                    </div>
                                    <div class="col-6">
                                        <div class="row float-right" style="padding-right: 100px ">
                                            <button style="background-color: rgb(6, 231, 6); width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: ON</h6>
                                            <button style="background-color: red; width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: PROBLEM</h6>
                                            <button style="background-color: grey; width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: OFF</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach ($stationB as $stationB)
                                        @if ($stationB->tanggal != NULL)
                                            <div class="card hkt-sttn" id="{{$stationB->Nama_Station}}" style="background-color: rgb(6, 231, 6); width:9rem; height:6rem; margin:5px; padding-top:8px">
                                                <span style="font-size: 28px; text-align:center; font-weight:bold">{{$stationB->Nama_Station}}</span>
                                                <span style="font-size: 11px; text-align:center; font-weight:bold">{{$stationB->mp_id}}</span>
                                            </div>
                                        @elseif ($stationB->tanggal == NULL)
                                            <div class="card hkt-sttn" id="{{$stationB->Nama_Station}}" style="background-color: grey; width:9rem; height:6rem; margin:5px; padding-top:8px">
                                                <span style="font-size: 28px; text-align:center; font-weight:bold">{{$stationB->Nama_Station}}</span>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="homeC" role="tabpanel" aria-labelledby="C-tab">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>MACHINE</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="row float-right" style="padding-right: 100px ">
                                                    <button style="background-color: rgb(6, 231, 6); width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: ON</h6>
                                                    <button style="background-color: yellow; width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: STANDBY</h6>
                                                    <button style="background-color: grey; width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: OFF</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($henkatenC as $henkatenC)
                                            @if ($henkatenC->Power_ON == 1 && $henkatenC->Auto_Mode_Signal == 1)
                                                <div class="card hkt-item" id="{{$henkatenC->Machine_Number}}" style="background-color: rgb(6, 231, 6); width:9rem; height:6rem; margin:5px; padding-top:8px;" data-toggle="modal" data-target="#modalAplus{{$henkatenC->Machine_Number}}">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold;">{{$henkatenC->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkatenC->PartName}}</span>
                                                                                                <!-- Modal -->
                                                                                                <div class="modal fade" id="modalAplus{{$henkatenC->Machine_Number}}" tabindex="-1" role="dialog" aria-labelledby="modalAplus" aria-hidden="true">
                                                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$henkatenC->Machine_Number}}</h5>
                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                        </button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                            <p>Nama Part 1 : {{$henkatenC->NamaPart1}}</p>
                                                                                                            <p>Nama Part 2 : {{$henkatenC->NamaPart2}}</p>
                                                                                                            <p>Nama Part 3 : {{$henkatenC->NamaPart3}}</p>
                                                                                                            <p>Nama Part 4 : {{$henkatenC->NamaPart4}}</p>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    </div>
                                                                                                </div>
                                                </div>
                                            @elseif ($henkatenC->Power_ON == 1 && $henkatenC->Auto_Mode_Signal == 0)
                                                <div class="card hkt-item" id="{{$henkatenC->Machine_Number}}" style="background-color: yellow; width:9rem; height:6rem; margin:5px; padding-top:8px" data-toggle="modalAplus" data-target="#modalAplus">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold">{{$henkatenC->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkatenC->PartName}}</span>
                                                </div>
                                            @elseif ($henkatenC->Power_ON == 0)
                                                <div class="card hkt-item" id="{{$henkatenC->Machine_Number}}" style="background-color: grey; width:9rem; height:6rem; margin:5px; padding-top:8px" data-toggle="modalAplus" data-target="#modalAplus">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold">{{$henkatenC->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkatenC->PartName}}</span>
                                                </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" style="padding-left: 70px">
                                <div class="row">
                                    <div class="col-6">
                                        <h5>STATION</h5>
                                    </div>
                                    <div class="col-6">
                                        <div class="row float-right" style="padding-right: 100px ">
                                            <button style="background-color: rgb(6, 231, 6); width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: ON</h6>
                                            <button style="background-color: red; width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: PROBLEM</h6>
                                            <button style="background-color: grey; width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: OFF</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach ($stationC as $stationC)
                                        @if ($stationC->tanggal != NULL)
                                            <div class="card hkt-sttn" id="{{$stationC->Nama_Station}}" style="background-color: rgb(6, 231, 6); width:9rem; height:6rem; margin:5px; padding-top:8px">
                                                <span style="font-size: 28px; text-align:center; font-weight:bold">{{$stationC->Nama_Station}}</span>
                                                <span style="font-size: 11px; text-align:center; font-weight:bold">{{$stationC->mp_id}}</span>
                                            </div>
                                        @elseif ($stationC->tanggal == NULL)
                                            <div class="card hkt-sttn" id="{{$stationC->Nama_Station}}" style="background-color: grey; width:9rem; height:6rem; margin:5px; padding-top:8px">
                                                <span style="font-size: 28px; text-align:center; font-weight:bold">{{$stationC->Nama_Station}}</span>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="homeD" role="tabpanel" aria-labelledby="D-tab">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>MACHINE</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="row float-right" style="padding-right: 100px ">
                                                    <button style="background-color: rgb(6, 231, 6); width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: ON</h6>
                                                    <button style="background-color: yellow; width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: STANDBY</h6>
                                                    <button style="background-color: grey; width:1rem; height:0.7rem; margin:5px"></button>
                                                    <h6 style="margin-top:9px; font-size:11px">: OFF</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($henkatenD as $henkatenD)
                                            @if ($henkatenD->Power_ON == 1 && $henkatenD->Auto_Mode_Signal == 1)
                                                <div class="card hkt-item" id="{{$henkatenD->Machine_Number}}" style="background-color: rgb(6, 231, 6); width:9rem; height:6rem; margin:5px; padding-top:8px;" data-toggle="modal" data-target="#modalAplus{{$henkatenD->Machine_Number}}">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold;">{{$henkatenD->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkatenD->PartName}}</span>
                                                                                                <!-- Modal -->
                                                                                                <div class="modal fade" id="modalAplus{{$henkatenD->Machine_Number}}" tabindex="-1" role="dialog" aria-labelledby="modalAplus" aria-hidden="true">
                                                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$henkatenD->Machine_Number}}</h5>
                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                        </button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                            <p>Nama Part 1 : {{$henkatenD->NamaPart1}}</p>
                                                                                                            <p>Nama Part 2 : {{$henkatenD->NamaPart2}}</p>
                                                                                                            <p>Nama Part 3 : {{$henkatenD->NamaPart3}}</p>
                                                                                                            <p>Nama Part 4 : {{$henkatenD->NamaPart4}}</p>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    </div>
                                                                                                </div>
                                                </div>
                                            @elseif ($henkatenD->Power_ON == 1 && $henkatenD->Auto_Mode_Signal == 0)
                                                <div class="card hkt-item" id="{{$henkatenD->Machine_Number}}" style="background-color: yellow; width:9rem; height:6rem; margin:5px; padding-top:8px" data-toggle="modalAplus" data-target="#modalAplus">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold">{{$henkatenD->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkatenD->PartName}}</span>
                                                </div>
                                            @elseif ($henkatenD->Power_ON == 0)
                                                <div class="card hkt-item" id="{{$henkatenD->Machine_Number}}" style="background-color: grey; width:9rem; height:6rem; margin:5px; padding-top:8px" data-toggle="modalAplus" data-target="#modalAplus">
                                                    <span style="font-size: 28px; text-align:center; font-weight:bold">{{$henkatenD->Machine_Number}}</span>
                                                    <span style="font-size: 10px; text-align:center; font-weight:bold">{{$henkatenD->PartName}}</span>
                                                </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" style="padding-left: 70px">
                                <div class="row">
                                    <div class="col-6">
                                        <h5>STATION</h5>
                                    </div>
                                    <div class="col-6">
                                        <div class="row float-right" style="padding-right: 100px ">
                                            <button style="background-color: rgb(6, 231, 6); width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: ON</h6>
                                            <button style="background-color: red; width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: PROBLEM</h6>
                                            <button style="background-color: grey; width:1rem; height:0.7rem; margin:5px"></button>
                                            <h6 style="margin-top:9px; font-size:11px">: OFF</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach ($stationD as $stationD)
                                        @if ($stationD->tanggal != NULL)
                                            <div class="card hkt-sttn" id="{{$stationD->Nama_Station}}" style="background-color: rgb(6, 231, 6); width:9rem; height:6rem; margin:5px; padding-top:8px">
                                                <span style="font-size: 28px; text-align:center; font-weight:bold">{{$stationD->Nama_Station}}</span>
                                                <span style="font-size: 11px; text-align:center; font-weight:bold">{{$stationD->mp_id}}</span>
                                            </div>
                                        @elseif ($stationD->tanggal == NULL)
                                            <div class="card hkt-sttn" id="{{$stationD->Nama_Station}}" style="background-color: grey; width:9rem; height:6rem; margin:5px; padding-top:8px">
                                                <span style="font-size: 28px; text-align:center; font-weight:bold">{{$stationD->Nama_Station}}</span>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="homeE" role="tabpanel" aria-labelledby="E-tab">

                    </div>
                    <div class="tab-pane fade" id="homeF" role="tabpanel" aria-labelledby="F-tab">

                    </div>
                    <div class="tab-pane fade" id="homeAll" role="tabpanel" aria-labelledby="All-tab">
                        <div class="row">
                            <img src="{{ asset('images/area.png') }}" alt="" height="600px" width="1000px" style="margin-left: 100px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('js')
<script type="text/javascript">
$(document).ready(function() {

setInterval(function(){
    $.ajax({
        url: '{{url('/reload')}}',
        type: 'get',
        success:function(data){
            $('.hkt-item').each(function(){
                var machine_number = $(this).attr('id');
                data.forEach(function(item, index) {
                    if (machine_number == item.Machine_Number) {
                        if (item.Auto_Mode_Signal == 1 && item.Power_ON == 1) {
                            $('#'+machine_number).css("background-color", "rgb(6, 231, 6)");
                            // console.log('item ; '+item.Machine_Number + ' On')
                        } else if(item.Auto_Mode_Signal == 0 && item.Power_ON == 1) {
                            $('#'+machine_number).css("background-color", "yellow");
                            // console.log('item ; '+item.Machine_Number + ' Stand by')
                        } else if(item.Power_ON == 0) {
                            $('#'+machine_number).css("background-color", "grey");
                            // console.log('item ; '+item.Machine_Number + ' Off')
                        }
                    }
                })
            });

        }
    });
    $('load_content').fadeIn("slow");
}, 60000);

setInterval(function(){
    $.ajax({
        url: '{{url('/reloadA')}}',
        type: 'get',
        success:function(data){
            $('.hkt-item').each(function(){
                var machine_number = $(this).attr('id');
                data.forEach(function(item, index) {
                    if (machine_number == item.Machine_Number) {
                        if (item.Auto_Mode_Signal == 1 && item.Power_ON == 1) {
                            $('#'+machine_number).css("background-color", "rgb(6, 231, 6)");
                            // console.log('item ; '+item.Machine_Number + ' On')
                        } else if(item.Auto_Mode_Signal == 0 && item.Power_ON == 1) {
                            $('#'+machine_number).css("background-color", "yellow");
                            // console.log('item ; '+item.Machine_Number + ' Stand by')
                        } else if(item.Power_ON == 0) {
                            $('#'+machine_number).css("background-color", "grey");
                            // console.log('item ; '+item.Machine_Number + ' Off')
                        }
                    }
                })
            });

        }
    });
    $('load_content').fadeIn("slow");
}, 60000);

setInterval(function(){
    $.ajax({
        url: '{{url('/reloadB')}}',
        type: 'get',
        success:function(data){
            $('.hkt-item').each(function(){
                var machine_number = $(this).attr('id');
                data.forEach(function(item, index) {
                    if (machine_number == item.Machine_Number) {
                        if (item.Auto_Mode_Signal == 1 && item.Power_ON == 1) {
                            $('#'+machine_number).css("background-color", "rgb(6, 231, 6)");
                            // console.log('item ; '+item.Machine_Number + ' On')
                        } else if(item.Auto_Mode_Signal == 0 && item.Power_ON == 1) {
                            $('#'+machine_number).css("background-color", "yellow");
                            // console.log('item ; '+item.Machine_Number + ' Stand by')
                        } else if(item.Power_ON == 0) {
                            $('#'+machine_number).css("background-color", "grey");
                            // console.log('item ; '+item.Machine_Number + ' Off')
                        }
                    }
                })
            });

        }
    });
    $('load_content').fadeIn("slow");
}, 60000);

setInterval(function(){
    $.ajax({
        url: '{{url('/reloadC')}}',
        type: 'get',
        success:function(data){
            $('.hkt-item').each(function(){
                var machine_number = $(this).attr('id');
                data.forEach(function(item, index) {
                    if (machine_number == item.Machine_Number) {
                        if (item.Auto_Mode_Signal == 1 && item.Power_ON == 1) {
                            $('#'+machine_number).css("background-color", "rgb(6, 231, 6)");
                            // console.log('item ; '+item.Machine_Number + ' On')
                        } else if(item.Auto_Mode_Signal == 0 && item.Power_ON == 1) {
                            $('#'+machine_number).css("background-color", "yellow");
                            // console.log('item ; '+item.Machine_Number + ' Stand by')
                        } else if(item.Power_ON == 0) {
                            $('#'+machine_number).css("background-color", "grey");
                            // console.log('item ; '+item.Machine_Number + ' Off')
                        }
                    }
                })
            });

        }
    });
    $('load_content').fadeIn("slow");
}, 60000);

setInterval(function(){
    $.ajax({
        url: '{{url('/reloadD')}}',
        type: 'get',
        success:function(data){
            $('.hkt-item').each(function(){
                var machine_number = $(this).attr('id');
                data.forEach(function(item, index) {
                    if (machine_number == item.Machine_Number) {
                        if (item.Auto_Mode_Signal == 1 && item.Power_ON == 1) {
                            $('#'+machine_number).css("background-color", "rgb(6, 231, 6)");
                            // console.log('item ; '+item.Machine_Number + ' On')
                        } else if(item.Auto_Mode_Signal == 0 && item.Power_ON == 1) {
                            $('#'+machine_number).css("background-color", "yellow");
                            // console.log('item ; '+item.Machine_Number + ' Stand by')
                        } else if(item.Power_ON == 0) {
                            $('#'+machine_number).css("background-color", "grey");
                            // console.log('item ; '+item.Machine_Number + ' Off')
                        }
                    }
                })
            });

        }
    });
    $('load_content').fadeIn("slow");
}, 60000);

setInterval(function(){
    $.ajax({
        url: '{{url('/reload2')}}',
        type: 'get',
        success:function(data){
            $('.hkt-sttn').each(function(){
                var station_number = $(this).attr('id');
                data.forEach(function(item, index) {
                    if (station_number == item.Nama_Station) {
                        if (item.tanggal != null) {
                            $('#'+station_number).css("background-color", "rgb(6, 231, 6)");
                            // console.log('item ; '+item.Nama_Station + ' On')
                        } else if(item.tanggal == null) {
                            $('#'+station_number).css("background-color", "grey");
                            // console.log('item ; '+item.Nama_Station + ' Stand by')
                        }
                    }
                })
            });

        }
    });
    $('load_content').fadeIn("slow");
}, 60000);

setInterval(function(){
    $.ajax({
        url: '{{url('/reload3')}}',
        type: 'get',
        success:function(data){
            $('.hkt-sttn').each(function(){
                var station_number = $(this).attr('id');
                data.forEach(function(item, index) {
                    if (station_number == item.Nama_Station) {
                        if (item.tanggal != null) {
                            $('#'+station_number).css("background-color", "rgb(6, 231, 6)");
                            //  console.log('item ; '+item.Nama_Station + ' On')
                        } else if(item.tanggal == null) {
                            $('#'+station_number).css("background-color", "grey");
                            // console.log('item ; '+item.Nama_Station + ' Stand by')
                        }
                    }
                })
            });

        }
    });
    $('load_content').fadeIn("slow");
}, 60000);

setInterval(function(){
    $.ajax({
        url: '{{url('/reload4')}}',
        type: 'get',
        success:function(data){
            $('.hkt-sttn').each(function(){
                var station_number = $(this).attr('id');
                data.forEach(function(item, index) {
                    if (station_number == item.Nama_Station) {
                        if (item.tanggal != null) {
                            $('#'+station_number).css("background-color", "rgb(6, 231, 6)");
                            //  console.log('item ; '+item.Nama_Station + ' On')
                        } else if(item.tanggal == null) {
                            $('#'+station_number).css("background-color", "grey");
                            // console.log('item ; '+item.Nama_Station + ' Stand by')
                        }
                    }
                })
            });

        }
    });
    $('load_content').fadeIn("slow");
}, 60000);

setInterval(function(){
    $.ajax({
        url: '{{url('/reload5')}}',
        type: 'get',
        success:function(data){
            $('.hkt-sttn').each(function(){
                var station_number = $(this).attr('id');
                data.forEach(function(item, index) {
                    if (station_number == item.Nama_Station) {
                        if (item.tanggal != null) {
                            $('#'+station_number).css("background-color", "rgb(6, 231, 6)");
                            //  console.log('item ; '+item.Nama_Station + ' On')
                        } else if(item.tanggal == null) {
                            $('#'+station_number).css("background-color", "grey");
                            // console.log('item ; '+item.Nama_Station + ' Stand by')
                        }
                    }
                })
            });

        }
    });
    $('load_content').fadeIn("slow");
}, 60000);

setInterval(function(){
    $.ajax({
        url: '{{url('/reload6')}}',
        type: 'get',
        success:function(data){
            $('.hkt-sttn').each(function(){
                var station_number = $(this).attr('id');
                data.forEach(function(item, index) {
                    if (station_number == item.Nama_Station) {
                        if (item.tanggal != null) {
                            $('#'+station_number).css("background-color", "rgb(6, 231, 6)");
                            //  console.log('item ; '+item.Nama_Station + ' On')
                        } else if(item.tanggal == null) {
                            $('#'+station_number).css("background-color", "grey");
                            // console.log('item ; '+item.Nama_Station + ' Stand by')
                        }
                    }
                })
            });

        }
    });
    $('load_content').fadeIn("slow");
}, 60000);

} );
</script>

{{-- <script type="text/javascript">
    function autoRefreshPage()
    {
        window.location = window.location.href;
    }
    setInterval('autoRefreshPage()', 1000);
</script> --}}
@endsection

