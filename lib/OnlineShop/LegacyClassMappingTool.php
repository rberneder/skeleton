<?php
/**
 * Pimcore
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2009-2015 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace OnlineShop;

class LegacyClassMappingTool {

    private static $mappingClasses = [
        'OnlineShop\Plugin' => 'OnlineShop_Plugin',
        'OnlineShop\Framework\Environment' => 'OnlineShop_Framework_Impl_Environment',
        'OnlineShop\Framework\Factory' => 'OnlineShop_Framework_Factory',
        'OnlineShop\Framework\Exception\InvalidConfigException' => 'OnlineShop_Framework_Exception_InvalidConfigException',
        'OnlineShop\Framework\Exception\UnsupportedException' => 'OnlineShop_Framework_Exception_UnsupportedException',
        'OnlineShop\Framework\Exception\VoucherServiceException' => 'OnlineShop_Framework_Exception_VoucherServiceException',
        'OnlineShop\Framework\OfferTool\DefaultService' => 'OnlineShop_OfferTool_Impl_DefaultService',
        'OnlineShop\Framework\OfferTool\AbstractOffer' => 'OnlineShop_OfferTool_AbstractOffer',
        'OnlineShop\Framework\OfferTool\AbstractOfferItem' => 'OnlineShop_OfferTool_AbstractOfferItem',
        'OnlineShop\Framework\OfferTool\AbstractOfferToolProduct' => 'OnlineShop_OfferTool_AbstractOfferToolProduct',
        'OnlineShop\Framework\Tools\Config\HelperContainer' => 'OnlineShop_Framework_Config_HelperContainer',
        'OnlineShop\Framework\CartManager\AbstractCartItem' => 'OnlineShop_Framework_AbstractCartItem',
        'OnlineShop\Framework\CartManager\AbstractCart' => 'OnlineShop_Framework_AbstractCart',
        'OnlineShop\Framework\CartManager\AbstractCartCheckoutData' => 'OnlineShop_Framework_AbstractCartCheckoutData',
        'OnlineShop\Framework\CartManager\SessionCartItem' => 'OnlineShop_Framework_Impl_SessionCartItem',
        'OnlineShop\Framework\CartManager\SessionCartCheckoutData' => 'OnlineShop_Framework_Impl_SessionCartCheckoutData',
        'OnlineShop\Framework\CartManager\SessionCart' => 'OnlineShop_Framework_Impl_SessionCart',
        'OnlineShop\Framework\CartManager\CartItem' => 'OnlineShop_Framework_Impl_CartItem',
        'OnlineShop\Framework\CartManager\CartCheckoutData' => 'OnlineShop_Framework_Impl_CartCheckoutData',
        'OnlineShop\Framework\CartManager\Cart' => 'OnlineShop_Framework_Impl_Cart',
        'OnlineShop\Framework\CartManager\CartItem\Dao' => 'OnlineShop_Framework_Impl_CartItem_Resource',
        'OnlineShop\Framework\CartManager\CartItem\Listing' => 'OnlineShop_Framework_Impl_CartItem_List',
        'OnlineShop\Framework\CartManager\CartItem\Listing\Dao' => 'OnlineShop_Framework_Impl_CartItem_List_Resource',
        'OnlineShop\Framework\CartManager\CartCheckoutData\Listing\Dao' => 'OnlineShop_Framework_Impl_CartCheckoutData_List_Resource',
        'OnlineShop\Framework\CartManager\CartCheckoutData\Listing' => 'OnlineShop_Framework_Impl_CartCheckoutData_List',
        'OnlineShop\Framework\CartManager\CartCheckoutData\Dao' => 'OnlineShop_Framework_Impl_CartCheckoutData_Resource',
        'OnlineShop\Framework\CartManager\Cart\Listing\Dao' => 'OnlineShop_Framework_Impl_Cart_List_Resource',
        'OnlineShop\Framework\CartManager\Cart\Listing' => 'OnlineShop_Framework_Impl_Cart_List',
        'OnlineShop\Framework\CartManager\Cart\Dao' => 'OnlineShop_Framework_Impl_Cart_Resource',
        'OnlineShop\Framework\CartManager\MultiCartManager' => 'OnlineShop_Framework_Impl_MultiCartManager',
        'OnlineShop\Framework\CartManager\CartPriceModificator\ICartPriceModificator' => 'OnlineShop_Framework_ICartPriceModificator',
        'OnlineShop\Framework\CartManager\CartPriceModificator\Discount' => 'OnlineShop_Framework_Impl_CartPriceModificator_Discount',
        'OnlineShop\Framework\CartManager\CartPriceModificator\Shipping' => 'OnlineShop_Framework_Impl_CartPriceModificator_Shipping',
        'OnlineShop\Framework\CartManager\CartPriceCalculator' => 'OnlineShop_Framework_Impl_CartPriceCalculator',
        'OnlineShop\Framework\PriceSystem\Price' => 'OnlineShop_Framework_Price',
        'OnlineShop\Framework\PriceSystem\ModificatedPrice' => 'OnlineShop_Framework_Impl_ModificatedPrice',
        'OnlineShop\Framework\PriceSystem\AbstractPriceSystem' => 'OnlineShop_Framework_Impl_AbstractPriceSystem',
        'OnlineShop\Framework\PriceSystem\CachingPriceSystem' => 'OnlineShop_Framework_Impl_CachingPriceSystem',
        'OnlineShop\Framework\PriceSystem\AttributePriceSystem' => 'OnlineShop_Framework_Impl_AttributePriceSystem',
        'OnlineShop\Framework\PriceSystem\AbstractPriceInfo' => 'OnlineShop_Framework_AbstractPriceInfo',
        'OnlineShop\Framework\PriceSystem\AttributePriceInfo' => 'OnlineShop_Framework_Impl_AttributePriceInfo',
        'OnlineShop\Framework\PriceSystem\LazyLoadingPriceInfo' => 'OnlineShop_Framework_Impl_LazyLoadingPriceInfo',
        'OnlineShop\Framework\AvailabilitySystem\AttributeAvailabilitySystem' => 'OnlineShop_Framework_Impl_AttributeAvailabilitySystem',
        'OnlineShop\Framework\PricingManager\PricingManager' => 'OnlineShop_Framework_Impl_PricingManager',
        'OnlineShop\Framework\PricingManager\Rule' => 'OnlineShop_Framework_Impl_Pricing_Rule',
        'OnlineShop\Framework\PricingManager\Rule\Listing\Dao' => 'OnlineShop_Framework_Impl_Pricing_Rule_List_Resource',
        'OnlineShop\Framework\PricingManager\Rule\Dao' => 'OnlineShop_Framework_Impl_Pricing_Rule_Resource',
        'OnlineShop\Framework\PricingManager\Rule\Listing' => 'OnlineShop_Framework_Impl_Pricing_Rule_List',
        'OnlineShop\Framework\PricingManager\PriceInfo' => 'OnlineShop_Framework_Impl_Pricing_PriceInfo',
        'OnlineShop\Framework\PricingManager\Environment' => 'OnlineShop_Framework_Impl_Pricing_Environment',
        'OnlineShop\Framework\PricingManager\Action\CartDiscount' => 'OnlineShop_Framework_Impl_Pricing_Action_CartDiscount',
        'OnlineShop\Framework\PricingManager\Action\FreeShipping' => 'OnlineShop_Framework_Impl_Pricing_Action_FreeShipping',
        'OnlineShop\Framework\PricingManager\Action\Gift' => 'OnlineShop_Framework_Impl_Pricing_Action_Gift',
        'OnlineShop\Framework\PricingManager\Action\ProductDiscount' => 'OnlineShop_Framework_Impl_Pricing_Action_ProductDiscount',
        'OnlineShop\Framework\PricingManager\Condition\AbstractOrder' => 'OnlineShop_Framework_Impl_Pricing_Condition_AbstractOrder',
        'OnlineShop\Framework\PricingManager\Condition\Bracket' => 'OnlineShop_Framework_Impl_Pricing_Condition_Bracket',
        'OnlineShop\Framework\PricingManager\Condition\CartAmount' => 'OnlineShop_Framework_Impl_Pricing_Condition_CartAmount',
        'OnlineShop\Framework\PricingManager\Condition\CatalogCategory' => 'OnlineShop_Framework_Impl_Pricing_Condition_CatalogCategory',
        'OnlineShop\Framework\PricingManager\Condition\CatalogProduct' => 'OnlineShop_Framework_Impl_Pricing_Condition_CatalogProduct',
        'OnlineShop\Framework\PricingManager\Condition\ClientIp' => 'OnlineShop_Framework_Impl_Pricing_Condition_ClientIp',
        'OnlineShop\Framework\PricingManager\Condition\DateRange' => 'OnlineShop_Framework_Impl_Pricing_Condition_DateRange',
        'OnlineShop\Framework\PricingManager\Condition\Sales' => 'OnlineShop_Framework_Impl_Pricing_Condition_Sales',
        'OnlineShop\Framework\PricingManager\Condition\Sold' => 'OnlineShop_Framework_Impl_Pricing_Condition_Sold',
        'OnlineShop\Framework\PricingManager\Condition\Tenant' => 'OnlineShop_Framework_Impl_Pricing_Condition_Tenant',
        'OnlineShop\Framework\PricingManager\Condition\Token' => 'OnlineShop_Framework_Impl_Pricing_Condition_Token',
        'OnlineShop\Framework\PricingManager\Condition\VoucherToken' => 'OnlineShop_Framework_Impl_Pricing_Condition_VoucherToken',
        'OnlineShop\Framework\Model\AbstractCategory' => 'OnlineShop_Framework_AbstractCategory',
        'OnlineShop\Framework\Model\AbstractFilterDefinition' => 'OnlineShop_Framework_AbstractFilterDefinition',
        'OnlineShop\Framework\Model\AbstractFilterDefinitionType' => 'OnlineShop_Framework_AbstractFilterDefinitionType',
        'OnlineShop\Framework\Model\AbstractOrder' => 'OnlineShop_Framework_AbstractOrder',
        'OnlineShop\Framework\Model\AbstractOrderItem' => 'OnlineShop_Framework_AbstractOrderItem',
        'OnlineShop\Framework\Model\AbstractPaymentInformation' => 'OnlineShop_Framework_AbstractPaymentInformation',
        'OnlineShop\Framework\Model\AbstractProduct' => 'OnlineShop_Framework_AbstractProduct',
        'OnlineShop\Framework\Model\AbstractSetProductEntry' => 'OnlineShop_Framework_AbstractSetProductEntry',
        'OnlineShop\Framework\Model\AbstractSetProduct' => 'OnlineShop_Framework_AbstractSetProduct',
        'OnlineShop\Framework\Model\AbstractVoucherSeries' => 'OnlineShop_Framework_AbstractVoucherSeries',
        'OnlineShop\Framework\Model\AbstractVoucherTokenType' => 'OnlineShop_Framework_AbstractVoucherTokenType',
        'OnlineShop\Framework\Model\CategoryFilterDefinitionType' => 'OnlineShop_Framework_CategoryFilterDefinitionType',
        'OnlineShop\Framework\VoucherService\Reservation\Dao' => 'OnlineShop_Framework_VoucherService_Reservation_Resource',
        'OnlineShop\Framework\VoucherService\Statistic\Dao' => 'OnlineShop_Framework_VoucherService_Statistic_Resource',
        'OnlineShop\Framework\VoucherService\Token\Listing\Dao' => 'OnlineShop_Framework_VoucherService_Token_List_Resource',
        'OnlineShop\Framework\VoucherService\Token\Listing' => 'OnlineShop_Framework_VoucherService_Token_List',
        'OnlineShop\Framework\VoucherService\Token\Dao' => 'OnlineShop_Framework_VoucherService_Token_Resource',
        'OnlineShop\Framework\VoucherService\Reservation' => 'OnlineShop_Framework_VoucherService_Reservation',
        'OnlineShop\Framework\VoucherService\Statistic' => 'OnlineShop_Framework_VoucherService_Statistic',
        'OnlineShop\Framework\VoucherService\Token' => 'OnlineShop_Framework_VoucherService_Token',
        'OnlineShop\Framework\VoucherService\DefaultService' => 'OnlineShop_Framework_VoucherService_Default',
        'OnlineShop\Framework\VoucherService\TokenManager\AbstractTokenManager' => 'OnlineShop_Framework_VoucherService_AbstractTokenManager',
        'OnlineShop\Framework\VoucherService\TokenManager\Single' => 'OnlineShop_Framework_VoucherService_TokenManager_Single',
        'OnlineShop\Framework\VoucherService\TokenManager\Pattern' => 'OnlineShop_Framework_VoucherService_TokenManager_Pattern',
        'OnlineShop\Framework\PaymentManager\Status' => 'OnlineShop_Framework_Payment_Status',
        'OnlineShop\Framework\PaymentManager\Payment\Datatrans' => 'OnlineShop_Framework_Impl_Payment_Datatrans',
        'OnlineShop\Framework\PaymentManager\Payment\Klarna' => 'OnlineShop_Framework_Impl_Payment_Klarna',
        'OnlineShop\Framework\PaymentManager\Payment\PayPal' => 'OnlineShop_Framework_Impl_Payment_PayPal',
        'OnlineShop\Framework\PaymentManager\Payment\QPay' => 'OnlineShop_Framework_Impl_Payment_QPay',
        'OnlineShop\Framework\PaymentManager\PaymentManager' => 'OnlineShop_Framework_Impl_PaymentManager',



    ];

    private static $mappingInterfaces = [
        'OnlineShop\Framework\IComponent' => 'OnlineShop_Framework_IComponent',
        'OnlineShop\Framework\IEnvironment' => 'OnlineShop_Framework_IEnvironment',
        'OnlineShop\Framework\OfferTool\IService' => 'OnlineShop_OfferTool_IService',
        'OnlineShop\Framework\CartManager\ICartManager' => 'OnlineShop_Framework_ICartManager',
        'OnlineShop\Framework\CartManager\ICart' => 'OnlineShop_Framework_ICart',
        'OnlineShop\Framework\CartManager\ICartItem' => 'OnlineShop_Framework_ICartItem',
        'OnlineShop\Framework\CartManager\CartPriceModificator\IDiscount' => 'OnlineShop_Framework_CartPriceModificator_IDiscount',
        'OnlineShop\Framework\CartManager\CartPriceModificator\IShipping' => 'OnlineShop_Framework_CartPriceModificator_IShipping',
        'OnlineShop\Framework\CartManager\ICartPriceCalculator' => 'OnlineShop_Framework_ICartPriceCalculator',
        'OnlineShop\Framework\PriceSystem\IPrice' => 'OnlineShop_Framework_IPrice',
        'OnlineShop\Framework\PriceSystem\IModificatedPrice' => 'OnlineShop_Framework_Impl_IModificatedPrice',
        'OnlineShop\Framework\PriceSystem\IPriceSystem' => 'OnlineShop_Framework_IPriceSystem',
        'OnlineShop\Framework\PriceSystem\ICachingPriceSystem' => 'OnlineShop_Framework_ICachingPriceSystem',
        'OnlineShop\Framework\PriceSystem\IPriceInfo' => 'OnlineShop_Framework_IPriceInfo',
        'OnlineShop\Framework\AvailabilitySystem\IAvailability' => 'OnlineShop_Framework_IAvailability',
        'OnlineShop\Framework\AvailabilitySystem\IAvailabilitySystem' => 'OnlineShop_Framework_IAvailabilitySystem',
        'OnlineShop\Framework\PricingManager\IRule' => 'OnlineShop_Framework_Pricing_IRule',
        'OnlineShop\Framework\PricingManager\IPriceInfo' => 'OnlineShop_Framework_Pricing_IPriceInfo',
        'OnlineShop\Framework\PricingManager\IEnvironment' => 'OnlineShop_Framework_Pricing_IEnvironment',
        'OnlineShop\Framework\PricingManager\ICondition' => 'OnlineShop_Framework_Pricing_ICondition',
        'OnlineShop\Framework\PricingManager\IAction' => 'OnlineShop_Framework_Pricing_IAction',
        'OnlineShop\Framework\PricingManager\IPricingManager' => 'OnlineShop_Framework_IPricingManager',
        'OnlineShop\Framework\PricingManager\Action\IGift' => 'OnlineShop_Framework_Pricing_Action_IGift',
        'OnlineShop\Framework\PricingManager\Action\IDiscount' => 'OnlineShop_Framework_Pricing_Action_IDiscount',
        'OnlineShop\Framework\PricingManager\Condition\IBracket' => 'OnlineShop_Framework_Pricing_Condition_IBracket',
        'OnlineShop\Framework\PricingManager\Condition\ICartAmount' => 'OnlineShop_Framework_Pricing_Condition_ICartAmount',
        'OnlineShop\Framework\PricingManager\Condition\ICartProduct' => 'OnlineShop_Framework_Pricing_Condition_ICartProduct',
        'OnlineShop\Framework\PricingManager\Condition\ICatalogProduct' => 'OnlineShop_Framework_Pricing_Condition_ICatalogProduct',
        'OnlineShop\Framework\PricingManager\Condition\ICategory' => 'OnlineShop_Framework_Pricing_Condition_ICategory',
        'OnlineShop\Framework\PricingManager\Condition\IDateRange' => 'OnlineShop_Framework_Pricing_Condition_IDateRange',
        'OnlineShop\Framework\Model\IIndexable' => 'OnlineShop_Framework_ProductInterfaces_IIndexable',
        'OnlineShop\Framework\Model\ICheckoutable' => 'OnlineShop_Framework_ProductInterfaces_ICheckoutable',
        'OnlineShop\Framework\VoucherService\TokenManager\ITokenManager' => 'OnlineShop_Framework_VoucherService_ITokenManager',
        'OnlineShop\Framework\VoucherService\IVoucherService' => 'OnlineShop_Framework_IVoucherService',
        'OnlineShop\Framework\PaymentManager\IPayment' => 'OnlineShop_Framework_IPayment',
        'OnlineShop\Framework\PaymentManager\IPaymentManager' => 'OnlineShop_Framework_IPaymentManager',
        'OnlineShop\Framework\PaymentManager\IStatus' => 'OnlineShop_Framework_Payment_IStatus',


    ];



    public static function loadMapping() {
        foreach(self::$mappingInterfaces as $withNamespace => $withoutNamespace) {
            class_alias($withNamespace, $withoutNamespace);
//            class_alias($withoutNamespace, $withoutNamespace);
        }

        foreach(self::$mappingClasses as $withNamespace => $withoutNamespace) {
            class_alias($withNamespace, $withoutNamespace);
//            class_alias($withoutNamespace, $withoutNamespace);
        }

    }


}