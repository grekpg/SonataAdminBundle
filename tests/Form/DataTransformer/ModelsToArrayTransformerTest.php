<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Tests\Form\DataTransformer;

use PHPUnit\Framework\TestCase;
use Sonata\AdminBundle\Form\DataTransformer\ModelsToArrayTransformer;
use Sonata\AdminBundle\Model\ModelManagerInterface;
use Sonata\AdminBundle\Tests\Fixtures\Entity\Foo;

class ModelsToArrayTransformerTest extends TestCase
{
    public function testConstructor(): void
    {
        $transformer = new ModelsToArrayTransformer(
            $this->createStub(ModelManagerInterface::class),
            Foo::class
        );

        $this->assertInstanceOf(ModelsToArrayTransformer::class, $transformer);
    }
}
