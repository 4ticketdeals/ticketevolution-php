<?php

/**
 * TicketEvolution Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://github.com/ticketevolution/ticketevolution-php/blob/master/LICENSE.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@teamonetickets.com so we can send you a copy immediately.
 *
 * @category    TicketEvolution
 * @package     TicketEvolution_Webservice_ResultSet
 * @subpackage  Filter
 * @author      J Cobb <j@teamonetickets.com>
 * @author      Jeff Churchill <jeff@teamonetickets.com>
 * @copyright   Copyright (c) 2012 Team One Tickets & Sports Tours, Inc. (http://www.teamonetickets.com)
 * @license     https://github.com/ticketevolution/ticketevolution-php/blob/master/LICENSE.txt     New BSD License
 */


/**
 * @category    TicketEvolution
 * @package     TicketEvolution_Webservice_ResultSet
 * @subpackage  Filter
 * @copyright   Copyright (c) 2012 Team One Tickets & Sports Tours, Inc. (http://www.teamonetickets.com)
 * @license     https://github.com/ticketevolution/ticketevolution-php/blob/master/LICENSE.txt     New BSD License
 */
class TicketEvolution_Webservice_ResultSet_Filter_TicketGroups_InHand
    extends TicketEvolution_Webservice_ResultSet_Filter_Abstract
{
    /**
     * The value to match against the 'in_hand' property
     *
     * @var bool
     */
    public $inHand;


    /**
     * @param Iterator $iterator
     * @param bool $inHand
     */
    public function __construct($iterator, $inHand=true)
    {
        parent::__construct($iterator);

        $this->inHand = (bool) $inHand;
    }


    /**
     * Only return certain ticketGroups
     */
    public function accept()
    {
        if (parent::current()->in_hand === $this->inHand) {
            return true;
        }

        return false;
    }
}
