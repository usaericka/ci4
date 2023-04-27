<?php

namespace App\Controllers;

use App\Models\FeedbackModel;

class FeedbackController extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'Submitted Form',
        ];
        $feedback = new FeedbackModel();
        $data['feedbacks'] = $feedback->findAll(); 
        return view('contact/index.php', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Contact Page',
        ];
        return view('contact/create' , $data);
    }

    public function store()
    {
        $feedbacks = new FeedbackModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'), 
            'message' => $this->request->getPost('message') 
        ];
        $feedbacks->save($data);
        return redirect('contact')->with('status', 'Inserted Successfully');
    }

    public function edit($id = null)
    {
        $feedback = new FeedbackModel();
        $data['feedback'] = $feedback->find($id);
        return view('contact/edit', $data); 
    }

    public function update($id = null)
    {
        $feedback = new FeedbackModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'), 
            'message' => $this->request->getPost('message') 
        ];
        $feedback->update($id, $data);
        return redirect()->to(base_url('contact'))->with('status', 'Updated Successfully');
    }

    public function delete($id = null)
    {
        $feedback = new FeedbackModel();
        $feedback->delete($id);
        return redirect()->back()->with('status', 'Deleted Successfully');
    }
}
 