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
        font-size: 11pt;
        color: #666666;
    }

    td.top.left.right.winner {
        background-color: #d4edda;
        text-align: center;
        vertical-align: middle;
        font-size: 11pt;
        color: #155724;
    }

    td.top.left.right.loser {
        background-color: #f8d7da;
        text-align: center;
        vertical-align: middle;
        font-size: 11pt;
        color: #721c24;
    }

    table.chart td {
        align-content: center;
    }

    td {
        text-align: center;
    }

    .btn.winner {
        padding: 2px !important;
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
                                <td class="top left right <?= !empty($participants[0]) ? isWinner($participants[0]) : '' ?>" colspan=2>{{$participants[0]->participantName ?? "n/a"}}</td>
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
                                <td class="top left right <?=  !empty($participants[8]) ? isWinner($participants[8]) : ''  ?>" colspan=2>{{$participants[8]->participantName ?? "n/a"}}</td>
                            </tr>
                            <tr>
                                <td class="left right winnerBtn" colspan=2></td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[0]->id) ? getSetWinnerForm($eventId, $participants[0]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[8]->id) ? getSetWinnerForm($eventId, $participants[8]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="top left right <?=  !empty($participants[1]) ? isWinner($participants[1]) : ''  ?>" colspan=2>{{$participants[1]->participantName ?? "n/a"}}</td>
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
                                <td class="top left right <?=  !empty($participants[9]) ? isWinner($participants[9]) : ''  ?>" colspan=2>{{$participants[9]->participantName ?? "n/a"}}</td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[1]->id) ? getSetWinnerForm($eventId, $participants[1]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[9]->id) ? getSetWinnerForm($eventId, $participants[9]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="top left right <?=  !empty($participants[2]) ? isWinner($participants[2]) : ''  ?>" colspan=2>{{$participants[2]->participantName ?? "n/a"}}</td>
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
                                <td class="top left right <?=  !empty($participants[10]) ? isWinner($participants[10]) : ''  ?>" colspan=2>{{$participants[10]->participantName ?? "n/a"}}</td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[2]->id) ? getSetWinnerForm($eventId, $participants[2]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[10]->id) ? getSetWinnerForm($eventId, $participants[10]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="top left right <?=  !empty($participants[3]) ? isWinner($participants[3]) : ''  ?>" colspan=2>{{$participants[3]->participantName ?? "n/a"}}</td>
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
                                <td class="top left right <?=  !empty($participants[11]) ? isWinner($participants[11]) : ''  ?>" colspan=2>{{$participants[11]->participantName ?? "n/a"}}</td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[3]->id) ? getSetWinnerForm($eventId, $participants[3]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[11]->id) ? getSetWinnerForm($eventId, $participants[11]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="top left right <?=  !empty($participants[4]) ? isWinner($participants[4]) : '' ?>" colspan=2>{{$participants[4]->participantName ?? "n/a"}}</td>
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
                                <td class="top left right <?=  !empty($participants[12]) ? isWinner($participants[12]) : '' ?>" colspan=2>{{$participants[12]->participantName ?? "n/a"}}</td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[4]->id) ? getSetWinnerForm($eventId, $participants[4]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[12]->id) ? getSetWinnerForm($eventId, $participants[12]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="top left right <?=  !empty($participants[5]) ? isWinner($participants[5]) : '' ?>" colspan=2>{{$participants[5]->participantName ?? "n/a"}}</td>
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
                                <td class="top left right <?= !empty($participants[13]) ? isWinner($participants[13]) : '' ?>" colspan=2>{{$participants[13]->participantName ?? "n/a"}}</td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[5]->id) ? getSetWinnerForm($eventId, $participants[5]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[13]->id) ? getSetWinnerForm($eventId, $participants[13]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="top left right <?=  !empty($participants[6]) ? isWinner($participants[6]) : '' ?>" colspan=2>{{$participants[6]->participantName ?? "n/a"}}</td>
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
                                <td class="top left right <?=  !empty($participants[14]) ? isWinner($participants[14]) : '' ?>" colspan=2>{{$participants[14]->participantName ?? "n/a"}}</td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[6]->id) ? getSetWinnerForm($eventId, $participants[6]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[14]->id) ? getSetWinnerForm($eventId, $participants[14]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="top left right <?=  !empty($participants[7]) ? isWinner($participants[7]) : '' ?>" colspan=2>{{$participants[7]->participantName ?? "n/a"}}</td>
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
                                <td class="top left right <?=  !empty($participants[15]) ? isWinner($participants[15]) : '' ?>" colspan=2>{{$participants[15]->participantName ?? "n/a"}}</td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[7]->id) ? getSetWinnerForm($eventId, $participants[7]->id, 1, 1) : '' ?>
                                </td>
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
                                <td class="left right" colspan=2>
                                    <?= !empty ($participants[15]->id) ? getSetWinnerForm($eventId, $participants[15]->id, 1, 1) : '' ?>
                                </td>
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

<?php
    /**
     * @param $eventId
     * @param $participantId
     * @param $round
     * @param $status
     */
    function getSetWinnerForm($eventId, $participantId, $round, $status) {
        if (!empty($participantId)) {
            return '
            <form method="POST" action="/participant/storeStanding/'.$eventId.'/'.$participantId.'/'.$round.'/'.$status.'" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="'.csrf_token().'">
                <input name="participantId" type="hidden" value="'.$participantId.'">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                </button>
            </form>';
        }
        return '';
    }

    /**
    * @param $participant
     * @return string
     */
    function isWinner($participant) {
        if ($participant->round1) {
            return 'winner';
        } elseif (!$participant->round1) {
            return 'loser';
        } else {
            return '';
        }
    }
?>
