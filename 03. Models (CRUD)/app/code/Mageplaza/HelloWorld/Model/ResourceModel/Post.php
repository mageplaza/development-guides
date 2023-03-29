<?php
namespace Mageplaza\HelloWorld\Model\ResourceModel;


/**
 * Class Post
 * @package Mageplaza\HelloWorld\Model\ResourceModel
 */
class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Post constructor.
     *
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     */
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    ) {
        parent::__construct($context);
    }


    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('mageplaza_helloworld_post', 'post_id');
    }

}