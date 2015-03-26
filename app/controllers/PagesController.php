<?php

use Mailers\Mailer;

class PagesController extends \BaseController {

	 // Functions to route the different links of the website

	protected $mailer;

	public function __construct(Mailer $mailer)
	{
		$this->mailer = $mailer;
	}
	
	public function home()
	{
		return View::make('home');
	}

	public function about()
	{
		return View::make('about');
	}

	public function portfolio() 
	{
		return View::make('portfolio');
	}

	public function blog() 
	{
		return View::make('blog');
	}

	public function contact() 
	{
		return View::make('contact');
	}

	public function mail()
	{
		$validation = Validator::make(Input::all(), ['inputName'=>'required', 
													'inputEmail'=>'required', 
													'inputSubject'=>'required', 
													'inputDescription'=>'required']);

		if($validation->fails())
		{
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}

		$data = ['name' => Input::get('inputName'), 
				 'email' => Input::get('inputEmail'), 
				 'subject' => Input::get('inputSubject'), 
				 'description' => Input::get('inputDescription')];

		if(Input::get('copyEmail') == 'checked')
		{
			$this->mailer->sendSelf('emails.sendSelf', $data);
			$this->mailer->copyTo('emails.copyTo', $data);
		}
		else
		{
			$this->mailer->sendSelf('emails.sendSelf', $data);	
		}

		return Redirect::to('contact');
	}
}
