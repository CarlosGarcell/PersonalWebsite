<?php namespace Mailers;

class Mailer 
{

	public function sendSelf($view, $data = []) 
	{
		\Mail::queue($view, $data, function($message) use($data)
		{
			$message->from($data['email'], $data['name']);

			$message->to('web.garcell@gmail.com', 'Carlos Garcell')->subject($data['subject']);
		});
	}

	public function copyTo($view, $data = []) 
	{
		\Mail::queue($view, $data, function($message) use($data)
		{
			$message->from('web.garcell@gmail.com', 'Carlos Garcell');

			$message->to($data['email'] , $data['name'])->subject($data['subject']);
		});
	}
}