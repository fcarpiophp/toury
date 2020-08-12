<?php

namespace App\Http\Controllers;

use App\Events;
use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * @param $eventId
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($eventId)
    {
        return view('participant.create', [
            'eventId' => $eventId,
            'participants' => 5
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            $data = $request->input();
            foreach ($data['participantName'] as $key => $participant) {
                if (!empty($participant)) {
                    $participants = new Participant();
                    $participants->eventId = $data['eventId'];
                    $participants->participantName = $participant;
                    $participants->participantOrder = $key;
                    $participants->save();
                }
            }
            return redirect('/participant/show/'.$data['eventId'])->with('status', "Insert successful");
        } catch (Exception $e) {
            return redirect('/participant/create')->with('failed', $e->getMessage());
        }
    }

    /**
     * @param $eventId
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($eventId)
    {
        $participants = DB::table('participants')->get()->where('eventId', $eventId)->sortBy('participantOrder');
        $indexedParticipants = $this->indexParticipants($participants);
        return view('/participant/chartShow', ['participants' => $indexedParticipants]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
        //
    }

    /**
     * @param $eventId
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function saveStanding($eventId) {
        $participants = DB::table('participants')->get()->where('eventId', $eventId)->sortBy('participantOrder');
        $indexedParticipants = $this->indexParticipants($participants);
        return view('/participant/chartEdit', ['participants' => $indexedParticipants, 'eventId' => $eventId]);
    }

    /**
     * @param $eventId
     * @param $participantId
     * @param $round
     * @param $status
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function storeStanding($eventId, $participantId, $round, $status) {
        $participants = DB::table('participants')->get()->where('eventId', $eventId)->sortBy('participantOrder');
        $indexedParticipants = $this->indexParticipants($participants);

        // set winner
        $this->setStatus($participantId, $round, $status);

        // set loser
        $this->setStatus($this->getOpponentIdMatrix($participantId, $indexedParticipants, $round), $round, !$status);

        // Get updated data
        $participants = DB::table('participants')->get()->where('eventId', $eventId)->sortBy('participantOrder');
        $indexedParticipants = $this->indexParticipants($participants);

        return view('/participant/chartEdit', ['participants' => $indexedParticipants, 'eventId' => $eventId]);
    }

    /**
     * @param $participantId
     * @param $participants
     * @param $round
     * @return int|null
     */
    public function getOpponentIdMatrix($participantId, $participants, $round) {
        switch ($round) {
            case 1:
                $opponentId = $this::getFirstRoundOpponentId($participantId, $participants);
                break;
            default:
                $opponentId = null;
        }

        return $opponentId;
    }

    /**
     * @param $participantId
     * @param $round
     * @param $status
     */
    public function setStatus($participantId, $round, $status): void
    {
        $affected = DB::table('participants')
            ->where('id', $participantId)
            ->update(['round'.$round => $status]);
    }

    /**
     * @param $participantId
     * @param $participants
     * @return int
     */
    public static function getFirstRoundOpponentId($participantId, $participants) {
        // Search re-indexed participants for this participant id
        foreach ($participants as $key => $participant) {
            if ($participant->id == $participantId) {
                $reIndexedParticipantId = $key;
                continue;
            }
        }

        return $reIndexedParticipantId % 2 == 0 ? $participantId + 1 : $participantId - 1;
    }

    /**
     * @param \Illuminate\Support\Collection $participants
     * @return array
     */
    public function indexParticipants(\Illuminate\Support\Collection $participants): array
    {
        $indexedParticipants = array();
        foreach ($participants as $participant) {
            $indexedParticipants[] = $participant;
        }
        return $indexedParticipants;
    }
}
