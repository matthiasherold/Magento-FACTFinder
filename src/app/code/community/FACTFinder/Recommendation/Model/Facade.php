<?php
/**
 * FACTFinder_Recommendation
 *
 * @category Mage
 * @package FACTFinder_Recommendation
 * @author Flagbit Magento Team <magento@flagbit.de>
 * @copyright Copyright (c) 2016, Flagbit GmbH & Co. KG
 * @license https://opensource.org/licenses/MIT  The MIT License (MIT)
 * @link http://www.flagbit.de
 *
 */

/**
 * Class FACTFinder_Recommendation_Model_Facade
 *
 * Facade class that adds recommendations functionality to the core facade
 *
 * @category Mage
 * @package FACTFinder_Recommendation
 * @author Flagbit Magento Team <magento@flagbit.de>
 * @copyright Copyright (c) 2016, Flagbit GmbH & Co. KG
 * @license https://opensource.org/licenses/MIT  The MIT License (MIT)
 * @link http://www.flagbit.de
 */
class FACTFinder_Recommendation_Model_Facade extends FACTFinder_Core_Model_Facade
{


    /**
     * Set config data to recommendations adaptor
     *
     * @param array  $params
     * @param string $channel
     * @param int    $id
     *
     * @return void
     */
    public function configureRecommendationAdapter($params, $channel = null, $id = null)
    {
        $this->_configureAdapter($params, "recommendation", $channel, $id);
    }


    /**
     * Get recommendations array
     *
     * @param string $channel
     * @param int    $id
     *
     * @return ArrayIterator
     */
    public function getRecommendations($channel = null, $id = null)
    {
        return $this->_getFactFinderObject("recommendation", "getRecommendations", $channel, $id);
    }


    /**
     * Trigger recommendations import on FF side
     *
     * @param null|string $channel
     * @param bool        $download
     *
     * @return \SimpleXMLElement
     */
    public function triggerRecommendationImport($channel = null, $download = true)
    {
        $this->configureImportAdapter(array('channel' => $channel));

        return $this->getImportAdapter($channel)->triggerRecommendationImport($download);
    }


}