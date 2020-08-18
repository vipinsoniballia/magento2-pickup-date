<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Sr\Pickup\Plugin\Magento\Checkout\Block\Checkout;

class LayoutProcessor
{

    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array  $jsLayout
    ) {
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
        ['shippingAddress']['children']['shipping-address-fieldset']['children']['pickup_date'] = [
            'component' => 'Magento_Ui/js/form/element/abstract',
            'config' => [
                'customScope' => 'shippingAddress.custom_attributes',
                'template' => 'ui/form/field',
                'elementTmpl' => 'ui/form/element/date',
                'options' => [],
                'id' => 'pickup-date'
            ],
            'dataScope' => 'shippingAddress.custom_attributes.pickup_date',
            'label' => 'Pickup Date',
            'provider' => 'checkoutProvider',
            'visible' => true,
            'validation' => [],
            'sortOrder' => 250,
            'id' => 'pickup-date'
        ];


        return $jsLayout;
    }
}

