<?php
dump($participants);
?>
@extends('layouts.app')
<style type="text/css">
    /*td {*/
    /*    height: 20px;*/
    /*    width: 70px;*/
    /*}*/

    /*.header {*/
    /*    border-top: 1px solid #CCCCCC;*/
    /*}*/

    /*.bottom {*/
    /*    border-bottom: 1px solid #CCCCCC;*/
    /*}*/

    /*.left {*/
    /*    border-left: 1px solid #CCCCCC;*/
    /*}*/

    /*.right {*/
    /*    border-right: 1px solid #CCCCCC;*/
    /*}*/

    .mainContainer {
        max-width: 95% !important;
    }

    /*td.header.left.right {*/
    /*    background-color: #CCCCCC;*/
    /*    text-align: center;*/
    /*    vertical-align: middle;*/
    /*    font-size: 11pt;*/
    /*    color: #666666;*/
    /*}*/

    /*td.header.left.right.winner {*/
    /*    background-color: #d4edda;*/
    /*    text-align: center;*/
    /*    vertical-align: middle;*/
    /*    font-size: 11pt;*/
    /*    color: #155724;*/
    /*}*/

    /*td.header.left.right.loser {*/
    /*    background-color: #f8d7da;*/
    /*    text-align: center;*/
    /*    vertical-align: middle;*/
    /*    font-size: 11pt;*/
    /*    color: #721c24;*/
    /*}*/

    /*table.chart td {*/
    /*    align-content: center;*/
    /*}*/

    /*td {*/
    /*    text-align: center;*/
    /*}*/

    /*.btn.winner {*/
    /*    padding: 2px !important;*/
    /*}*/


    table {
        border-collapse: collapse;
    }

    td {
        height: 20px;
        width: 70px;
        vertical-align: middle;
        text-align: center;
        font-size: 10pt;
        color: #155724;
    }

    td.header {
        border-top: 1px solid #cccccc;
        border-left: 1px solid #cccccc;
        border-right: 1px solid #cccccc;
        border-bottom: 1px solid #cccccc;
        background-color: #dddddd;
        color: #666666;
    }

    td.body {
        border-left: 1px solid #cccccc;
        border-right: 1px solid #cccccc;
    }

    td.footer {
        border-left: 1px solid #cccccc;
        border-right: 1px solid #cccccc;
        border-bottom: 1px solid #cccccc;
    }

    td.left {
        border-left: 1px solid #cccccc;
    }

    td.bottom {
        border-bottom: 1px solid #cccccc;
    }

    .btn-sm {
        padding: 0px 10px 0px 10px !important;
        font-size: small !important;
    }
</style>
@section('content')
    <div class="chartContainer">
        <div class="row justify-content-center">
            <div>
                <div class="card">
                    <div class="card-header">{{$event->eventName}} Standings Chart</div>
                    <div class="card-body">
                        <table border="0">
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 0, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 0, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 0, 2) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 1, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 1, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="header" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 2, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 2, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 1, 2) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 3, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 3, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="header" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 4, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 4, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 2, 2) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 5, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 5, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="header" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 6, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 6, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 3, 2) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 7, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 7, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="header" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 8, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 8, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 4, 2) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 9, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 9, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="header" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 10, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 7, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 5, 2) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 11, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 11, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="header" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 12, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 12, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 6, 2) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 13, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 13, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="header" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 14, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 14, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 7, 2) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left bottom" id=""></td>
                                <td class="bottom" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="" id=""></td>
                                <td class="left" id=""></td>
                                <td class="" id=""></td>
                                <td class="body" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="header" id ="" colspan="2">
                                    <?= getInitialParticipantName($participants, 15, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="footer" id="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2">
                                    <?= getSetWinnerForm($event, $participants, 15, 1) ?>
                                </td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="body" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                            <tr class="" id="">
                                <td class="footer" id ="" colspan="2"></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                                <td class="" id=""></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<?php
/**
 * @param $event
 * @param $participants
 * @param $index
 * @param $round
 * @return string
 */
function getSetWinnerForm($event, $participants, $index, $round) {
    if (!empty($participants['round'.$round][$index]->id)) {
        return '
            <form method="POST" action="/participant/storeStanding/'.$event->id.'/'.$participants['round'.$round][$index]->id.'/'.$round.'" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="'.csrf_token().'">
                <input name="participantId" type="hidden" value="'.$participants['round'.$round][$index]->id.'">
                <button type="submit" class="btn btn-success btn-sm">Set Winner</button>
            </form>';
    }
    return '';
}

/**
 * @param $participant
 * @return string
 */
function isWinner($participant) {
    if ($participant->round1 === 'win') {
        return 'winner';
    } elseif ($participant->round1 === 'lose') {
        return 'loser';
    } else {
        return '';
    }
}

/**
 * @param $participant1
 * @param $participant2
 * @param $previousRound
 * @return string
 */
function getWinnerFromPreviousRound($participant1, $participant2, $previousRound) {
    $round = 'round' . $previousRound;
    if ($participant1->$round ==='win') {
        return $participant1->participantName;
    } elseif ($participant1->$round ==='win') {
        return $participant1->participantName;
    } elseif ($participant1->$round ==='na' && $participant2->$round ==='na') {
        return 'TBD';
    } else {
        return '';
    }
}

/**
 * @param $participants
 * @param $index
 * @param $round
 * @return mixed|string
 */
function getInitialParticipantName($participants, $index, $round) {
    $name = '';
    if ($round === 1) {
        $name = 'Not Used';
    }
    return isset($participants['round'.$round][$index]) ? $participants['round'.$round][$index]->participantName : $name;
}
?>
