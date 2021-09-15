<?php namespace Application\Missions\Web\Services;

use Application\Entity\Registrants;
use Atomino\Carbon\ValidationError;

/**
 * @param array $input
 * @throws ValidationError
 */
class RegistrationService{


    public function create(array $input){
    $registrants = Registrants::create();
    $registrants->name = $input['_name'];
    $registrants->email = $input['_email'];
    $registrants->city = $input['_city'];
    $registrants->school = $input['_school'];
    $registrants->programs = $input['_programs'];
    $registrants->save();
    return $registrants;
}


}
