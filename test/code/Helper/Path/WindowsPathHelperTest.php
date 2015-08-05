<?php

class WindowsPathHelperTest extends \code\Helper\Path\AbstractPathHelperTest
{

    /**
     * @inheritDoc
     */
    public function createPathHelper()
    {
        return new \Sstalle\php7cc\Helper\Path\WindowsPathHelper();

    }

    /**
     * @inheritDoc
     */
    public function isAbsolutePathProvider()
    {
        return array(
            array('', false),
            array('\\\\foo', true),
            array('K:\\foo', true),
            array('k:\\foo', true),
            array('\\foo', true),
            array('foo', false),
            array('k:foo', false),
            array('K:foo', false),
            array('../foo/bar', false),
        );
    }

}