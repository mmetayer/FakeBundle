<?php

namespace Pim\Bundle\FakeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * @author    Mathias METAYER <mathias.metayer@akeneo.com>
 * @copyright 2017 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class FakeController
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        return new Response('Hello world');
    }
}
