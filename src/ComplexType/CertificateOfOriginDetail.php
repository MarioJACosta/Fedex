<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CertificateOfOriginDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CertificateOfOriginDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'CertificateOfOriginDetail';

    /**
     * @param ShippingDocumentFormat $documentFormat
     * @return CertificateOfOriginDetail
     */
    public function setDocumentFormat($documentFormat) {
        return $this->DocumentFormat = $documentFormat;
    }

    /**
     * @param CustomerImageUsage $customerImageUsages
     * @return CertificateOfOriginDetail
     */
    public function setCustomerImageUsages($customerImageUsages) {
        return $this->CustomerImageUsages = $customerImageUsages;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CertificateOfOriginDetail
     */
    public function setCertificateOfOriginDetail(array $param) {

        $documentFormat = new ShippingDocumentFormat();
        $customerImageUsages = new CustomerImageUsage();

        $certificateOfOriginDetail = new CertificateOfOriginDetail();
        $certificateOfOriginDetail->setDocumentFormat($documentFormat->setShippingDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16])));
        $certificateOfOriginDetail->setCustomerImageUsages($customerImageUsages->setCustomerImageUsage(array($param[17], $param[18], $param[19], $param[20])));

        return $certificateOfOriginDetail;
    }

}
