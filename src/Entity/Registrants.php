<?php namespace Application\Entity;

use Atomino\Carbon\Attributes\Modelify;
use Application\Atoms\Entity\_Registrants;
use Atomino\Carbon\Attributes\Validator;
use Atomino\Carbon\Plugins\Created\Created;
use Atomino\Carbon\Validation\UniqueEntity;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

#[Validator('name', NotBlank::class, ['message' => 'Név megadása kötelező!'])]
#[Validator('city', NotBlank::class, ['message' => 'Város kiválasztása kötelező!'])]
#[Validator('school', NotBlank::class, ['message' => 'Iskola kiválasztása kötelező!'])]
#[Validator('email', NotBlank::class, ['message' => 'Email cím megadása kötelező!'])]
#[Validator(null, UniqueEntity::class, ['fields' => ['email']])]
#[Validator('email', Email::class, ['message' => 'Email cím nem megfelelő!'])]
#[Validator('programs', NotBlank::class, ['message'=>'Program választásaa kötelező!'])]
#[Created]
#[Modelify(\Application\Database\DefaultConnection::class, 'registrants', true)]
class Registrants extends _Registrants{
}