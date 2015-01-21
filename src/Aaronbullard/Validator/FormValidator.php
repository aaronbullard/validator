<?php namespace Aaronbullard\Validator;

use Validator;

abstract class FormValidator {

	protected $rules = [];

	final public function validate(array $formData)
	{
		$validator = Validator::make($formData, $this->rules);

		if( $validator->fails() )
		{
			$exception = new FormValidationException( FormValidationException::FAILED );

			$exception->setErrors( $validator->messages()->all() );

			throw $exception;
		}
	}
}