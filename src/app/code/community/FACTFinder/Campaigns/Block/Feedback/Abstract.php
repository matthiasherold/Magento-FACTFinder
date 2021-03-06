<?php
/**
 * FACTFinder_Campaigns
 *
 * @category Mage
 * @package FACTFinder_Campaigns
 * @author Flagbit Magento Team <magento@flagbit.de>
 * @copyright Copyright (c) 2016, Flagbit GmbH & Co. KG
 * @license https://opensource.org/licenses/MIT  The MIT License (MIT)
 * @link http://www.flagbit.de
 */

/**
 * Class FACTFinder_Campaigns_Block_Feedback_Abstract
 *
 * @category Mage
 * @package FACTFinder_Campaigns
 * @author Flagbit Magento Team <magento@flagbit.de>
 * @copyright Copyright (c) 2016, Flagbit GmbH & Co. KG
 * @license https://opensource.org/licenses/MIT  The MIT License (MIT)
 * @link http://www.flagbit.de
 */
abstract class FACTFinder_Campaigns_Block_Feedback_Abstract extends FACTFinder_Campaigns_Block_Abstract
{

    protected $_template = 'factfinder/campaigns/feedback.phtml';


    /**
     * Get campaign feedback based on label
     *
     * @return array
     */
    public function getActiveFeedback()
    {
        $feedback = '';

        $_campaigns = $this->_getHandler()->getCampaigns();

        if ($_campaigns && $_campaigns->hasFeedback()) {
            $label = $this->getLabel();
            $feedback = $_campaigns->getFeedback($label);
        }

        return $feedback;
    }


}