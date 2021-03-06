<?php
/**
 * B2W Digital - Companhia Digital
 *
 * Do not edit this file if you want to update this SDK for future new versions.
 * For support please contact the e-mail bellow:
 *
 * sdk@e-smart.com.br
 *
 * @category  SkuHub
 * @package   SkuHub
 *
 * @copyright Copyright (c) 2018 B2W Digital - BSeller Platform. (http://www.bseller.com.br).
 *
 * @author    Tiago Sampaio <tiago.sampaio@e-smart.com.br>
 */

namespace SkyHub\Api\Handler\Request\Sales;

use SkyHub\Api\Handler\Request\HandlerAbstract;

class SystemHandler extends HandlerAbstract
{

    /** @var string */
    protected $baseUrlPath = '/sale_systems';


    /**
     * @return \SkyHub\Api\Handler\Response\HandlerInterface
     */
    public function statuses()
    {
        /** @var \SkyHub\Api\Handler\Response\HandlerInterface $responseHandler */
        $responseHandler = $this->service()->get($this->baseUrlPath());
        return $responseHandler;
    }


    /**
     * @return null
     */
    public function entityInterface()
    {
        return null;
    }
}
