<?php

namespace App\Http\Controllers;

use App\LeadList;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LeadListGeneralInfoRequest;
use League\Csv\Reader;


class LeadListController extends Controller
{
    public function __construct(){
        parent::constructWithUserAuth();
    }

    public function index(){
        $leadLists = $this->user->leadLists()->get();
        return view('leadlist.index', compact('leadLists'));
    }

    public function store(LeadListGeneralInfoRequest $request){
        $newLeadList = $this->user->leadLists()->create([
            'list_name' => $request->leadListName,
            'list_notes' => $request->leadListNotes,
        ]);

        return redirect()->route('uploadLeadList.show', [$newLeadList]);
    }

    public function create(){
        return view('leadlist.create');
    }

    public function show($id){
        $leadList = $this->user->leadLists()->where('id', $id)->first();
        $list = Reader::createFromPath($leadList->path);
        $header = $list->fetchOne(0);
        for($i = 1; $i < 101; $i++){
            $results[] = $list->fetchOne($i);
        }
        return view('leadlist.show', compact('leadList', 'results', 'header'));
    }


    public function update(){

    }

    public function edit_index(){

    }

    public function edit(Request $request){

    }

    public function destroy(){

    }

    public function uploadLeadList(){
        return view("leadlist.upload-lead-list");
    }

    public function storeLeadList(Request $request, $id){
        $DR                   = DIRECTORY_SEPARATOR;
        $pathPartial          = storage_path('app'.$DR.'uploads');
        $uploadedLeadList     = $request->file('leadList');
        $leadList             = $this->user->leadLists()->where('id', $id)->first();
        $listName             = time().'_'.$leadList->list_name.'.csv';
        $leadList->path       = $pathPartial.$DR.$listName;
        $leadList->validation = 'working';

        $leadList->save();
        $uploadedLeadList->move($pathPartial, $listName);
    }
}
