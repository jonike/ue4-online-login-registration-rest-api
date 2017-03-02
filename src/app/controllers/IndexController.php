<?php
/**
 * @author Jason Harris <1337reloaded@gmail.com>
 * @date 2/28/2017 4:15 PM
 */

namespace Reloaded\UnrealEngine4\Web\Controllers;

use App\Library\Net\Responses\FaultResponse;
use Phalcon\Http\ResponseInterface;
use App\Library\Net\HttpStatusCode;

class IndexController extends ControllerBase
{

    public function route404Action() : ResponseInterface
    {
        return $this->response->setJsonContent(
            new FaultResponse('Endpoint not found.', HttpStatusCode::NotFound)
        );
    }

}

