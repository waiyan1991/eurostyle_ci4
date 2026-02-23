<?php

namespace App\Controllers;

use App\Controllers\WebController;


class ContactController extends WebController
{
    public function index()
    {
        
        return $this->render('index'); 
    }
    

    public function sendSuggestion()
    {
        
        $name    = $this->request->getPost('name');
        $email   = $this->request->getPost('email');
        $type    = $this->request->getPost('type');
        $message = $this->request->getPost('message');

       
        $mail = \Config\Services::email();

        
        $mail->setFrom('system@eurostyle.com', 'Eurostyle System');
        $mail->setTo('admin@eurostyle.com'); 
        $mail->setSubject("New $type from $name");

        
        $body = "<h3> New Feedback </h3>
                 <p><b>Name:</b> $name</p>
                 <p><b>Email:</b> $email</p>
                 <p><b>Message:</b> $message</p>";

        $mail->setMessage($body);

       
        if ($mail->send()) {
            return redirect()->back()->with('status', 'Mailtrap successfully received the email!');
        } else {
            
            return redirect()->back()->with('status', $mail->printDebugger(['headers']));
        }
    }

  public function applyJob()
{
    $jobTitle = $this->request->getPost('job_title');
    $file     = $this->request->getFile('cv_file');

    $mail = \Config\Services::email();

    $mail->setFrom('system@eurostyle.com', 'Eurostyle Career System');
    $mail->setTo('admin@eurostyle.com');
    $mail->setSubject("New Job Application: {$jobTitle}");
    $mail->setMailType('html');

    $body = "
        <h3>New CV Submission</h3>
        <p><strong>Position:</strong> {$jobTitle}</p>
        <p>Please check the attached CV file below.</p>
    ";

    $mail->setMessage($body);

    if ($file && $file->isValid() && !$file->hasMoved()) {
        $mail->attach($file->getTempName(), 'attachment', $file->getClientName());
    }

    if ($mail->send()) {
        return redirect()->back()->with('status', 'Your application has been sent successfully!');
    } else {
        return redirect()->back()->with(
            'status',
            $mail->printDebugger(['headers', 'subject', 'body'])
        );
    }
}
}