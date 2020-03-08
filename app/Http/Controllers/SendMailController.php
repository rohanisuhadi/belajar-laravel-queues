<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
       public function sendEmail()
       {
              Mail::to('rohanisuhadi94@gmail.com')
                     ->send(new SendMail());
              echo "send mail";
       }

       public function sendEmailQueues()
       {
              $emailJob = (new SendMailJob());
              dispatch($emailJob);
              echo "send mail with queues";
       }
}
