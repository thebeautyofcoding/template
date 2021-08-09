<?php
namespace Heiner\Heiner\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ContentTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Heiner\Heiner\Domain\Model\Content
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Heiner\Heiner\Domain\Model\Content();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHeaderReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHeader()
        );
    }

    /**
     * @test
     */
    public function setHeaderForStringSetsHeader()
    {
        $this->subject->setHeader('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'header',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBodytextReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBodytext()
        );
    }

    /**
     * @test
     */
    public function setBodytextForStringSetsBodytext()
    {
        $this->subject->setBodytext('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bodytext',
            $this->subject
        );
    }
}
