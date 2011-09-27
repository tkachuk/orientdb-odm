<?php

/*
 * This file is part of the Orient package.
 *
 * (c) Alessandro Nadalin <alessandro.nadalin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Class Factory
 *
 * @package     Orient
 * @subpackage  Mapper
 * @author      Alessandro Nadalin <alessandro.nadalin@gmail.com>
 * @author      David Funaro <ing.davidino@gmail.com>
 */

namespace Congow\Orient\ODM\Mapper\ClassMetadata;

use Congow\Orient\ODM\Mapper\ClassMetadata; 
use Doctrine\Common\Persistence\Mapping\ClassMetadataFactory;

/**
 * @todo this class needs to be tested, is part of the core of the ODM
 */
class Factory implements ClassMetadataFactory
{
    protected $metadata = array();
    
    /**
     * @to implement and test
     */
    public function getAllMetadata()
    {
        return $this->metadata;
    }
    
    /**
     * @to implement and test
     */
    public function getMetadataFor($className)
    {
        if (!$this->hasMetadataFor($className)) {
            $metadata = new ClassMetadata($className);
            $this->setMetadataFor($className, $metadata);
        }
        
        return $this->metadata[$className];
    }
    
    /**
     * @to implement and test
     */
    public function hasMetadataFor($className)
    {
        return isset($this->metadata[$className]);
    }
    
    /**
     * @to implement and test
     */
    public function setMetadataFor($className, $metadata)
    {
        $this->metadata[$className] = $metadata;
    }
}

