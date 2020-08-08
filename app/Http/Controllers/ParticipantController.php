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
            foreach ($data['participantName'] as $partticipant) {
                if (!empty($participant)) {
                    $participants = new Participant();
                    $participants->eventId = $data['eventId'];
                    $participants->participantName = $partticipant;
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
        $participants = DB::table('participants')->get()->where('eventId', $eventId);
        return view('/participant/chart', ['participants' => $participants]);
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
}
