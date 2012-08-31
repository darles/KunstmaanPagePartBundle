<?php
namespace Kunstmaan\PagePartBundle\Form;
use Kunstmaan\PagePartBundle\Tests\Form\PagePartAdminTypeTestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-08-20 at 12:56:56.
 */
class TextPagePartAdminTypeTest extends PagePartAdminTypeTestCase
{
    /**
     * @var TextPagePartAdminType
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new TextPagePartAdminType;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Generated from @assert () == 'kunstmaan_pagepartbundle_textpageparttype'.
     *
     * @covers Kunstmaan\PagePartBundle\Form\TextPagePartAdminType::getName
     */
    public function testGetName()
    {
        $this->assertEquals(
          'kunstmaan_pagepartbundle_textpageparttype',
          $this->object->getName()
        );
    }

    /**
     * @covers Kunstmaan\PagePartBundle\Form\TextPagePartAdminType::buildForm
     */
    public function testBuildForm()
    {
        $this->object->buildForm($this->builder, array());
        $this->builder->get('content');
    }

    /**
     * @covers Kunstmaan\PagePartBundle\Form\TextPagePartAdminType::setDefaultOptions
     */
    public function testSetDefaultOptions()
    {
        $this->object->setDefaultOptions($this->resolver);
        $resolve = $this->resolver->resolve();
        $this->assertEquals($resolve["data_class"], 'Kunstmaan\PagePartBundle\Entity\TextPagePart');
    }
}