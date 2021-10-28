<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class FAQController extends Controller
{
    public function index()
    {
        $user = User::where('id', 2)->first();

//        dd($user->can('has_greater_id', 1));
//
//        dd($user->can('admin'));
//
//        return $user;
//

        if(Gate::allows('admin')){
            return 'Hello, you are admin you should know this!';
        }

//        if(Auth::id() == 2 || Auth::id() == 3 || Auth::id() == 5){
//            return 'Hello, you are admin you should know this!';
//        }


        $faqs = [
            [
                'Q' => 'How much is delivery?',
                'A' => 'We are delighted to be able to offer FREE delivery on all orders, regardless of size, value or destination.'
            ],
            [
                'Q' => 'Which countries and regions do you deliver to?',
                'A' => 'We currently ship free of charge to the countries and regions seen below...'
            ],
            [
                'Q' => 'When will my order arrive?',
                'A' => 'Delivery is normally made Monday – Friday (business days - excluding Public Holidays).'
            ],
            [
                'Q' => 'How can I contact you?',
                'A' => 'The best way to contact us is by filling in the online contact form. The form is designed to help you specify the problem or the query and then direct it to the member of staff best suited to deal with it. We are always keen to hear from you and help with any queries or problems. We endeavour to answer all queries within 24 hours.'
            ]
        ];

        return view('faq/index', compact('faqs'));
    }
}
