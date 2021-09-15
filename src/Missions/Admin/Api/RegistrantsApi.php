<?php namespace Application\Missions\Admin\Api;

use Application\Entity\Registrants;
use Application\Missions\Admin\Services\RegistrantsService;
use Atomino\Carbon\Database\Finder\Filter;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;
use function Atomino\debug;

class RegistrantsApi extends Api
{
    public function __construct(private RegistrantsService $registrantsService)
    {
    }

    #[Route(self::GET, '/getData')]
    public function getStat()
    {
        $registrantsNumber = Registrants::search()->count();
        $registrants = Registrants::search()->collect();
        $progs =[];
        foreach ($registrants as $reg)
        {
            $progs = array_merge($progs,$reg->programs);

        }
        $alma = array_count_values($progs);
        debug('merge');
        debug($progs);
        debug('count');
        debug($alma);

    }
}
