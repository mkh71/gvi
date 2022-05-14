<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\User;
use App\Models\UserClinic;
use Aranyasen\HL7\Segments\PID;
use Illuminate\Http\Request;
use Auth;

use Aranyasen\HL7\Message; // If Message is used
use Aranyasen\HL7\Segment; // If Segment is used
use Aranyasen\HL7\Segments\MSH; // If MSH is used
// ... and so on

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        if (Auth::user()->role_id != 1 && Auth::user()->clinic_id == null){
            $clinic = $this->clinicSelect();
            if ($clinic == 0){
                return redirect(route('clinics.index'));
            }
        }

        $records = [
            "doctor_count"  =>  0,
            "patient_count" => 0,
            "appointment_count" => 0,
            "doctors" => array(),
            "patients" => array(),
            "appointments" =>array()
        ];
        return view('backend.dashboard', compact('records'));

//        if(Auth::user()->hasRole(strtolower('admin'))) {
//            return redirect('admin/dashboard');
//        } elseif (Auth::user()->hasRole(strtolower('doctor'))) {
//            return redirect('doctor/dashboard');
//        }else {
//            return redirect('patient/dashboard');
//        }
    }

    public function clinicSelect(){
        $clinics = Clinic::query()->where('status',1)->get();
        if(count($clinics) == 0)
            return 0;

        if(count($clinics)>1){
            if(auth()->user()->hasRole('admin')) {
                $clinics = Clinic::query()->where('parent_id', auth()->id())->get();
                if( count($clinics)>1 || count($clinics[0]->childs) > 0 )
                    return view('home', compact('clinics'));
            }else{
                $clinics = UserClinic::query()->where('user_id', auth()->id())->get();
                if(count($clinics)>1)
                    return view('home', compact('clinics'));
            }
        }else{
            $user = User::find(auth()->id());
            $user->update([
                'clinic_id' => $clinics[0]->id,
            ]);
            return 1;
        }
        return redirect()->back();
    }

    public function homeSelection($id){
        $user = User::find(auth()->id());
        if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('clinic admin')){
            $user->update(['clinic_id'=> $id]);
        }else{
            $userClinic = UserClinic::where('clinic_id', $id)->where('user_id', auth()->id())->first();
            if ($userClinic){
                $user->update([
                    'clinic_id' => $userClinic->clinic_id,
                    'role_id' => $userClinic->role_id,
                    //'reference_id' => $userClinic->reference_id,
                ]);
            }else{
                $user->update(['clinic_id' => $id]);
            }
        }
        return redirect(route('home'));
    }

    public function hl7(){
        $msg = new Message();
        $msh = new MSH();
        $msg->addSegment($msh); // Message is: "MSH|^~\&|||||20171116140058|||2017111614005840157||2.3|\n"
        $msg = new Message("MSH|^~\&|HL7Soup|Instance1|HL7Soup|Instance2|200911021022||MDM^T01^MDM_T01|64322|P|2.5.1
EVN|T01|200911021022|200911021022|O|74357
PID|1|103456|103456||Stanley^Jim^^||19780429|M|||19 Raymond St^^Albany^^5632^UK|||||M|CHR||46264212||||London|Y||
PV1|1|I|CARE POINT^5^1^Instate^^C|R||||||||||||N|||8573245|||||||||||||||||||||||||200911011122|||||
TXA|1|CN|RTF|||||20081126100756||||24567^FACIL||||34252.rtf|DO|R|AV|AC|||
"); // Either \n or \r can be used as segment endings
        $pid = $msg->getFirstSegmentInstance('PID');

//        echo $pid->getField(3); // prints 'abcd'
//        echo $msg->toString(true); // Prints entire HL7 string

// Get the first segment

        $msg->getFirstSegmentInstance('PID'); // Returns the first PID segment. Same as $msg->getSegmentsByName('PID')[0];

// Check if a segment is present in the message object
        $msg->hasSegment('PID'); // return true or false based on whether PID is present in the $msg object

// Check if a message is empty
        $msg = new Message();
        $msg->isempty();


// Create any custom segment
        $abc = new Segment('ABC');
        $abc->setField(1, 'xyz');
        $abc->setField(2, 0);
        $abc->setField(4, ['']); // Set an empty field at 4th position. 2nd and 3rd positions will be automatically set to empty
        $abc->clearField(2); // Clear the value from field 2
        $msg->setSegment($abc, 1); // Message is now: "MSH|^~\&|||||20171116140058|||2017111614005840157||2.3|\nABC|xyz|\n"

// Create a defined segment (To know which segments are defined in this package, look into Segments/ directory)
// Advantages of defined segments over custom ones (shown above) are 1) Helpful setter methods, 2) Auto-incrementing segment index
        $pid = new PID(); // Automatically creates PID segment, and adds segment index at PID.1
        $pid->setPatientName([auth()->user()->info->first_name, auth()->user()->info->last_name]); // Use a setter method to add patient's name at standard position (PID.5)
        $pid->setField(5); // Apart from standard setter methods, you can manually set a value at any position too
        unset($pid); // Destroy the segment and decrement the id number. Useful when you want to discard a segment.
// Creating multiple message objects may have an unexpected side-effect: segments start with wrong index values (Check tests/MessageTest for explanation)...
// Use 4th argument as true, or call resetSegmentIndices() on $msg object to reset segment indices to 1
        $msg = new Message("MSH|^~\&|||||||ORM^O01||P|2.3.1|", null, true, true);
// ... any segments added here will now start index from 1, as expected.
// Sometimes you may want to have exact index values, rather than auto-incrementing for each instance of a segment
// Use 5th argument as false...
        $hl7String = "MSH|^~\&|||||||ORU^R01|00001|P|2.3.1|\n" . "OBX|1||11^AA|\n" . "OBX|1||22^BB|\n";
        $msg = new Message($hl7String, null, true, true, false); // $msg contains both OBXs with given indexes in the string
// Create a segment with empty sub-fields retained
        $msg = new Message("MSH|^~\\&|1|\rPV1|1|O|^AAAA1^^^BB|", null, true); // Third argument 'true' forces to keep all sub fields
        $pv1 = $msg->getSegmentByIndex(1);
        $fields = $pv1->getField(3); // $fields is ['', 'AAAA1', '', '', 'BB']

// Create/send message with segment-ending bar character (|) removed
        $msg = new Message("MSH|^~\\&|1|\nABC|||xxx\n", ['SEGMENT_ENDING_BAR' => false]);
        $msg->toString(true); // Returns "MSH|^~\&|1\nABC|||xxx\n"
        //(new Connection($ip, $port))->send($msg); // Sends the message without ending bar-characters (details on Connection below)
// Specify custom values for separators, HL7 version etc.
        $msg = new Message("MSH|^~\\&|1|\rPV1|1|O|^AAAA1^^^BB|", ['SEGMENT_SEPARATOR' => '\r\n', 'HL7_VERSION' => '2.3']);

// Segment with separator character (~) creates sub-arrays containing each sub-segment
        $message = new Message("MSH|^~\&|||||||ADT^A01||P|2.3.1|\nPID|||3^0~4^1"); // Creates [[3,0], [4,1]]

// To create a single array instead, pass 'true' as 5th argument. This may be used to retain behavior from previous releases
// Notice: Since this leads to a non-standard behavior, it may be removed in future
        $message = new Message("MSH|^~\&|||||||ADT^A01||P|2.3.1|\nPID|||3^0~4^1", null, false, false, true, true); // Creates ['3', '0~4', '1']

        dd($message);
    }
}
