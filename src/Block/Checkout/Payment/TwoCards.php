<?php
/**
 * @author      Open Source Team
 * @copyright   2022 Pagar.me (https://pagar.me)
 * @license     https://pagar.me Copyright
 *
 * @link        https://pagar.me
 */

declare( strict_types=1 );

namespace Woocommerce\Pagarme\Block\Checkout\Payment;

use Woocommerce\Pagarme\Block\Checkout\Gateway;

defined( 'ABSPATH' ) || exit;

/**
 * Class TwoCards
 * @package Woocommerce\Pagarme\Block\Checkout\Payment
 */
class TwoCards extends Gateway
{
    /**
     * @var string
     */
    protected $_template = 'templates/checkout/payment/2-cards';

    /**
     * @return int
     */
    public function getQtyCards()
    {
        return 2;
    }
}
