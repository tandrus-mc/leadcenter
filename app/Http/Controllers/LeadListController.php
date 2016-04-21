<?php

namespace App\Http\Controllers;

use App\LeadList;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LeadListGeneralInfoRequest;


class LeadListController extends Controller
{
    public function __construct(){
        parent::constructWithUserAuth();
    }

    public function index(){
        $leadLists = $this->user
                          ->leadLists()
                          ->get();

        return view('leadlist.index', compact('leadLists'));
    }

    public function store(LeadListGeneralInfoRequest $request){
        $newLeadList = $this->user
                            ->leadLists()
                            ->create([
                                'list_name' => $request->leadListName,
                                'list_notes' => $request->leadListNotes,
        ]);

        return redirect()->route('uploadLeadList.show', [$newLeadList]);
    }

    public function create(){

        return view('leadlist.create');
    }

    public function show($id){
        $leadList = $this->user
                         ->leadLists()
                         ->findOrFail($id);
        $listData = $leadList->previewTable();

        return view('leadlist.show', compact('leadList', 'listData'));
    }


    public function update(Request $request){
        dd($request->file('leadList'));
    }

    public function edit($id){
        $leadList = $this->user
                         ->leadLists()
                         ->findOrFail($id);
        $listData = $leadList->previewTable();

        return view('leadlist.edit', compact('leadList', 'listData'));
    }

    public function destroy(){

    }

    public function uploadLeadList(){

        return view("leadlist.upload-lead-list");
    }

    public function storeLeadList(Request $request, $id){
        $this->user->leadLists()
                   ->findOrFail($id)
                   ->addFile($request->file('leadList'));
    }

    public function downloadLeadList($id){
        $this->user->leadLists()
                   ->findOrFail($id)
                   ->download();
    }

    public function sendToXverify($id){
        return route('csv.transfer', [$id]);
    }
}
