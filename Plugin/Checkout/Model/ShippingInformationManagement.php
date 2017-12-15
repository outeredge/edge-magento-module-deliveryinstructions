<?php

namespace OuterEdge\Deliveryinstructions\Plugin\Checkout\Model;

class ShippingInformationManagement
{
    protected $quoteRepository;
    
    public function __construct(
        \Magento\Quote\Model\QuoteRepository $quoteRepository
    ) {
        $this->quoteRepository = $quoteRepository;
    }
    
    /**
     * @param \Magento\Checkout\Model\ShippingInformationManagement $subject
     * @param $cartId
     * @param \Magento\Checkout\Api\Data\ShippingInformationInterface $addressInformation
     */
    public function beforeSaveAddressInformation(
        \Magento\Checkout\Model\ShippingInformationManagement $subject,
        $cartId,
        \Magento\Checkout\Api\Data\ShippingInformationInterface $addressInformation
    ) {
        $extAttributes = $addressInformation->getExtensionAttributes();
        $deliveryInstructions = $extAttributes->getDeliveryInstructions();
        $quote = $this->quoteRepository->getActive($cartId);
        $quote->setDeliveryInstructions($deliveryInstructions);
    }
    
}
