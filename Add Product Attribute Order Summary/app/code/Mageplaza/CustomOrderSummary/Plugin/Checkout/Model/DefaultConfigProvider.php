<?php
namespace Mageplaza\CustomOrderSummary\Plugin\Checkout\Model;

use Magento\Checkout\Model\Session as CheckoutSession;

/**
 * Class DefaultConfigProvider
 * Mageplaza\CustomOrderSummary\Plugin\Checkout\Model
 */
class DefaultConfigProvider
{
    /**
     * @var CheckoutSession
     */
    protected $checkoutSession;

    /**
     * Constructor
     *
     * @param CheckoutSession $checkoutSession
     */
    public function __construct(
        CheckoutSession $checkoutSession
    ) {
        $this->checkoutSession = $checkoutSession;
    }

    /**
     * @param \Magento\Checkout\Model\DefaultConfigProvider $subject
     * @param array $result
     *
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function afterGetConfig(
        \Magento\Checkout\Model\DefaultConfigProvider $subject,
        array $result
    ) {
        $items = $result['totalsData']['items'];
        foreach ($items as $index => $item) {
            $quoteItem                                       = $this->checkoutSession->getQuote()->getItemById($item['item_id']);
            $result['quoteItemData'][$index]['manufacturer'] = $quoteItem->getProduct()->getAttributeText('manufacturer');
        }

        return $result;
    }
}
