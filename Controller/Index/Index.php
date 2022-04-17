<?php

namespace AHT\knockout\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;

    protected $_buidlingFactory;
    protected $json;
    protected $resultJsonFactory;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \AHT\knockout\Model\BuildingFactory $buildingFactory,
        \Magento\Framework\Serialize\Serializer\Json $json,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_buidlingFactory = $buildingFactory;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->json = $json;
        return parent::__construct($context);
    }
    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $building = $this->_buidlingFactory->create()->getCollection();
        //lấy dữ liệu từ ajax gửi sang
        //$response = $this->getRequest()->getParams();

        // echo '<pre>';
        // var_dump($response);die;

        //$resultJson = $this->resultJsonFactory->create();
        // chuyển kết quả về dạng object json và trả về cho ajax
        //return $resultJson->setData($response);
        
        return $this->_pageFactory->create();
    }
}
