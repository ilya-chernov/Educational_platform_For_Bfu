<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Redirect;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('rap');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [

        ]);
    }

    public function storeFeedback(Request $request) {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'feedback_text' => ['string', 'string', 'min:20']
        ]);

        $feedback = new Feedback();
        $feedback = $feedback->create([
           'name' => $request['name'],
           'surname' => $request['surname'],
           'feedback_text' => $request['feedback_text']
        ]);
        $feedback->save();
        return redirect()->route('feedback')->withSuccess('Сообщение успешно отправлено. Благодарим за уделенное внимание.');;
    }
}
