<?php

class Edge_DeliveryInstructions_Model_Observer
{
    public function saveDeliveryInstructions($observer)
    {
        $message = strip_tags($observer->getEvent()->getRequest()->getParam('delivery_instructions'));
        $quote = $observer->getEvent()->getQuote();

        $quote->setDeliveryInstructions($message);

        return $this;
    }
}