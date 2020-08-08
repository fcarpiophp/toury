<?php
//    dump($participants[0]->participantName);
//?>
@extends('layouts.app')
<style type="text/css">
    td {
        height: 20px;
        width: 70px;
    }

    .top {
        border-top: 1px solid #CCCCCC;
    }

    .bottom {
        border-bottom: 1px solid #CCCCCC;
    }

    .left {
        border-left: 1px solid #CCCCCC;
    }

    .right {
        border-right: 1px solid #CCCCCC;
    }

    .mainContainer {
        max-width: 95% !important;
    }

    td.top.left.right {
        background-color: #CCCCCC;
        text-align: center;
        vertical-align: middle;
        font-weight: bold;
        color: #666666;
    }

    table.chart td {
        align-content: center;
    }

</style>
@section('content')
    <div class="chartContainer">
        <div class="row justify-content-center">
            <div>
                <div class="card">
                    <div class="card-header">Standings Chart</div>
                    <div class="card-body">
                        <table class="chart">
                            <tbody>
                            <tr>
                                <td class="top left right" colspan=2>{{$participants[0]->participantName}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="top left right" colspan=2>{{$participants[7]->participantName}}</td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td class="top left right" colspan=2>level21L</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="top left right" colspan=2>Level21R</td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="bottom left"></td>
                                <td class="bottom"></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td class="bottom"></td>
                                <td class="bottom"></td>
                                <td class="top left"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td class="bottom right"></td>
                                <td class="bottom"></td>
                            </tr>
                            <tr>
                                <td class="top left right" colspan=2>{{$participants[1]->participantName}}</td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td class="top left right" colspan=2>{{$participants[8]->participantName}}</td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="top left right" colspan=2>Level31L</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="top left right" colspan=2>Level31R</td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="bottom left"></td>
                                <td class="bottom"></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td class="bottom"></td>
                                <td class="bottom"></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="bottom"></td>
                                <td class="bottom"></td>
                            </tr>
                            <tr>
                                <td class="top left right" colspan=2>{{$participants[2]->participantName}}</td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="top left right" colspan=2>{{$participants[9]->participantName}}</td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td class="top left right" colspan=2>Level22L</td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="top left right" colspan=2>Level22R</td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="bottom left"></td>
                                <td class="bottom"></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td class="bottom"></td>
                                <td class="bottom"></td>
                                <td class="top left"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td class="bottom right"></td>
                                <td class="bottom"></td>
                            </tr>
                            <tr>
                                <td class="top left right" colspan=2>{{$participants[3]->participantName}}</td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td class="top left right" colspan=2>{{$participants[10]->participantName}}</td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="top left right" colspan=2>Winner!</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="top left right" colspan=2>Semi Finalist L</td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td class="top left right" colspan=2>Semi Finalist R</td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="bottom left"></td>
                                <td class="bottom"></td>
                                <td class="left right" colspan=2></td>
                                <td class="bottom"></td>
                                <td class="left right" colspan=2></td>
                                <td class="bottom"></td>
                                <td class="left right" colspan=2></td>
                                <td class="bottom"></td>
                                <td class="bottom"></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="bottom"></td>
                                <td class="bottom"></td>
                            </tr>
                            <tr>
                                <td class="top left right" colspan=2>{{$participants[4]->participantName}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="top left right" colspan=2>{{$participants[11]->participantName}}</td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td class="top left right" colspan=2>Level23L</td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="top left right" colspan=2>Level23R</td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="bottom left"></td>
                                <td class="bottom"></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td class="bottom"></td>
                                <td class="bottom"></td>
                                <td class="top left"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td class="bottom right"></td>
                                <td class="bottom"></td>
                            </tr>
                            <tr>
                                <td class="top left right" colspan=2>{{$participants[5]->participantName}}</td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td class="top left right" colspan=2>{{$participants[12]->participantName}}</td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="top left right" colspan=2>Level32L</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="top left right" colspan=2>Level32R</td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="bottom left"></td>
                                <td class="bottom"></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td class="bottom"></td>
                                <td class="bottom"></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="bottom"></td>
                                <td class="bottom"></td>
                            </tr>
                            <tr>
                                <td class="top left right" colspan=2>{{$participants[6]->participantName}}</td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="top left right" colspan=2>{{$participants[13]->participantName}}</td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td class="top left right" colspan=2>Level24L</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="top left right" colspan=2>Level24R</td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="bottom left"></td>
                                <td class="bottom"></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td class="bottom"></td>
                                <td class="bottom"></td>
                                <td class="top left"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="left"></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td class="bottom right"></td>
                                <td class="bottom"></td>
                            </tr>
                            <tr>
                                <td class="top left right" colspan=2>{{$participants[7]->participantName}}</td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td class="top left right" colspan=2>{{$participants[15]->participantName}}</td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="left right" colspan=2></td>
                            </tr>
                            <tr>
                                <td class="bottom left right" colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan=2></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="bottom left right" colspan=2></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
