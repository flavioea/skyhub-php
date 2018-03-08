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

namespace SkyHub;

use SkyHub\Api\Service\ServiceInterface;

interface ApiInterface
{
    
    /**
     * ApiInterface constructor.
     *
     * @param string                $baseUri
     * @param string                $email
     * @param string                $apiKey
     * @param string|null           $xAccountKey
     * @param ServiceInterface|null $apiService
     */
    public function __construct($baseUri, $email, $apiKey, $xAccountKey = null, ServiceInterface $apiService = null);
    
    
    /**
     * @return \SkyHub\Api\Service\ServiceInterface
     */
    public function service();
}
