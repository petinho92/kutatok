<?php namespace Application\Missions\Web\Api;

use Application\Missions\Web\Services\RegistrationService;
use Atomino\Carbon\ValidationError;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;

class RegistrationApi extends Api
{
    public function __construct(private RegistrationService $registrationService)
    {
    }

    #[Route(self::POST, '/post-registration')]
    public function registration(){
        try{
            $registrants = $this->registrationService->create($this->data->all());
        }catch (ValidationError $error){
            $this->setStatusCode(422);
            return $error->getMessages();
        }
        return $registrants;
    }
}
