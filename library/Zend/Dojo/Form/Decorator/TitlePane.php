<?php
/**
 * Názov nového projektu
 *
 * LICENSE
 *
 * @category Crystal
 * @package Crystal_Dojo
 * @author Silver Zachara
 * @copyright Copyright © 2008 Silver Zachara, Andrej Hollý - IF Media
 * @version $Id: TitlePane.php 284 2009-11-05 19:20:50Z Silver Zachara $
 */

/** Zend_Dojo_Form_Decorator_DijitContainer */
require_once 'Zend/Dojo/Form/Decorator/DijitContainer.php';

/**
 * TitlePane
 *
 * Render a dijit TitlePane
 *
 * @uses Zend_Dojo_Form_Decorator_DijitContainer
 * @package Crystal_Dojo
 * @subpackage Form_Decorator
 * @author Silver Zachara
 * @copyright Copyright © 2008 Silver Zachara, Andrej Hollý - IF Media
 * @version $Id: TitlePane.php 284 2009-11-05 19:20:50Z Silver Zachara $
 */
class Zend_Dojo_Form_Decorator_TitlePane extends Zend_Dojo_Form_Decorator_DijitContainer
{
    /**
     * View helper
     * @var string
     */
    protected $_helper = 'TitlePane';
}
