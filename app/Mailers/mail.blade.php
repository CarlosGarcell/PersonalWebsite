<?php namespace Carlos\Mailers;

class Mailer {

	public funtion sendTo($name, $email, $subject, $view, $data = []) {

		Mail::send($view, $data, function($message) use($email, $subject)
		{
			// $message->from('c.garcell91@gmail.com', 'CarlosG');

			$message->to($email)->subject($subject)
		});
	}
}