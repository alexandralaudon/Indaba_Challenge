<?php namespace Indaba\FeaturedCategories\Block;
class FeaturedCategories extends \Magento\Framework\View\Element\Template
{
   protected $_categoryHelper;
   protected $categoryFlatConfig;
   protected $topMenu;
   protected $_categoryCollection;

   /**
   * @param \Magento\Framework\View\Element\Template\Context $context
   * @param \Magento\Catalog\Helper\Category $categoryHelper
   * @param array $data
   */
   public function __construct(
     \Magento\Framework\View\Element\Template\Context $context,
     \Magento\Catalog\Helper\Category $categoryHelper,
     \Magento\Catalog\Model\Indexer\Category\Flat\State $categoryFlatState,
     \Magento\Theme\Block\Html\Topmenu $topMenu,
     \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollection )
     {
        $this->_categoryHelper = $categoryHelper;
        $this->_categoryCollection = $categoryCollection;
        parent::__construct($context);
    }

    /**
     * Return categories helper
     */
    public function getCategoryHelper()
    {
        return $this->_categoryHelper;
    }

    public function getFeaturedCategoryCollection()
    {
        $collection = $this->_categoryCollection->create()
            ->addAttributeToSelect('*')
            ->addAttributeToFilter('featured_category', '1')
            ->setPageSize(5);
        return $collection;
    }
}
