<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\academic_record;
use App\Models\acknowledgement;
use App\Models\bank_detail;
use App\Models\next_of_kin;
use App\Models\Personal_detail;

class datamanip extends Controller
{
    //
    public function index(Request $request)
    {
        $aca= new academic_record;
        $ack= new acknowledgement;
        $bak= new bank_detail;
        $nok= new next_of_kin;
        $pdt= new Personal_detail;

        //echo dd($request->all());

        $regno=$request->regno;

        $aca->regno=$regno;
        $aca->Course=$request->ss_course;
        $aca->institution_name=$request->ss_insti;
        $aca->board_of_study	=$request->ss_board;
        $aca->year_of_passing	=$request->ss_pass;
        $aca->marks_or_cgpa	=$request->ss_cgpa;

        $ack->regno=$regno;
        $ack->place=$request->place;
        $ack->date=$request->date;
        $ext = $request->file('signature')->getClientOriginalExtension();
        $ack->signature= $request->file('signature')->storeAs('signatures', $regno.'.'.$ext);





        $bak->regno=$regno;
        $bak->IFSC_code=$request->IFSC_code;
        $bak->account_no=$request->Bank_Acct;
        $bak->aadhar_no=$request->Aadhar_No;
        $bak->PAN_no=$request->PAN_No;

        $nok->regno=$regno;
        $nok->relationship=$request->kin_Relationship;
        $nok->address=$request->kin_address;
        $nok->telephone_no=$request->kin_telephone;
        #dd($_FILES);
        #dd($request->file('signature'));
        $pdt->regno=$regno;
        $pdt->address=($request->address1).'\n'.($request->address2).'\n'.($request->address3);
        $pdt->contact_no=$request->contactNo;
        $pdt->email=$request->email;
        $pdt->dob=$request->dob;
        $pdt->age=$request->age;
        $pdt->gender=$request->gender;
        $pdt->fathersname=$request->fatherName;
        $pdt->mothersname=$request->motherName;
        $pdt->nationality=$request->nationality;
        $pdt->bloodgroup=$request->blood;
        $pdt->identification=$request->idmark_1.'\n'.$request->idmark_2;
        $pdt->education=$request->qualification;
        $pdt->marks=$request->qualifications_per;
        $ext = $request->file('profile')->getClientOriginalExtension();
        $pdt->profilepic=$request->file('profile')->storeAs('profilepics', $regno.'.'.$ext);





        $pdt->save();
        $nok->save();
        $ack->save();
        $aca->save();
        $bak->save();
        return "entered";
       //to check all the datas dumped from the form
       //if your want to get single element,someName in this case
       //$someName = $request->someName;
    }
}
