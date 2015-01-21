<?php namespace Aaronbullard\Validator;

use InvalidArgumentException;

class FormValidationException extends InvalidArgumentException {

	const FAILED = "Form validation failed.";

	protected $errors;

	public function setErrors(array $errors)
	{
		$this->errors = $errors;
		return $this;
	}

	public function getErrors()
	{
		return $this->errors;
	}
}