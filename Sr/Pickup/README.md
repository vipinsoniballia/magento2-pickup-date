# Mage2 Module Sr Pickup

    ``sr/module-pickup``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Add Pickup date in checkout

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file
 - Copy/Move/Upload `Sr` folder to `app/code`
 - Enable the module by running `php bin/magento module:enable Sr_Pickup`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - Plugin
	- afterProcess - Magento\Checkout\Block\Checkout\LayoutProcessor > Sr\Pickup\Plugin\Magento\Checkout\Block\Checkout\LayoutProcessor


## Attributes



