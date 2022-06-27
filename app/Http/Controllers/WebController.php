<?php

namespace App\Http\Controllers;

use App\Company;
use App\Message;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function companyindex(){
        $company = company();
        return view('backend.company.edit', compact('company'));
    }
    public function companyUpdate(Request $request, $id){
        $company = Company::query()->find($id);
        $data = $request->except(['logo', 'favicon', 'mobile_logo', 'footer_logo']);

        if ($request->hasFile('logo')){
            foreach ($request->logo as $logo) {
                $url = uploadFile('logo', $logo);
                $data['logo'] = $url;
                destroyImage(public_path('storage/').$company->logo);
            }
        }
        if ($request->hasFile('favicon')){
            foreach ($request->favicon as $logo) {
                $url = uploadFile('logo', $logo);
                $data['favicon'] = $url;
                destroyImage(public_path('storage/').$company->favicon);
            }
        }
        if ($request->hasFile('mobile_logo')){
            foreach ($request->mobile_logo as $logo) {
                $url = uploadFile('logo', $logo);
                $data['mobile_logo'] = $url;
                destroyImage(public_path('storage/').$company->mobile_logo);
            }
        }
        if ($request->hasFile('footer_logo')){
            foreach ($request->footer_logo as $logo) {
                $url = uploadFile('logo', $logo);
                $data['footer_logo'] = $url;
                destroyImage(public_path('storage/').$company->footer_logo);
            }
        }
        $company->update($data);

        return redirect(route('company.index'));
    }

    public function messages(){
        $messages = Message::query()->orderByDesc('created_at')->get();
        return view('backend.messages', compact('messages'));
    }
}
