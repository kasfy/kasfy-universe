<?php

namespace Universe\Exception;

/***
    κ₯ ππΈππ½π 
    κ₯ πππ π½π£ππππ¨π π£π ππ π£ ππππ£π₯ πΉπππ-πΌππ 
    κ₯ πΈπ¦π₯ππ π£: πππ₯ππππ€ππ¦πππ£ π [ππ₯π₯π‘π€://πππ₯ππππ€π.ππ€.π π£π]
 ***/

use Universe\Application;

class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}