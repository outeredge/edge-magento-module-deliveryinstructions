<?php
namespace OuterEdge\Deliveryinstructions\Model;

use Magento\Sales\Model\Order as MageOrder;

class Order extends MageOrder
{
    /**
     * Returns delivery instruction
     *
     * @return string|null
     */
    public function getDeliveryInstruction()
    {
        return $this->getDeliveryInstructions();
    }
}