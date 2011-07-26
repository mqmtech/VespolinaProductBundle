<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\ProductBundle\Document;

use Vespolina\ProductBundle\Document\BaseProduct;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
/**
 * @MongoDB\Document
 *
 * @author Richard Shank <develop@zestic.com>
 */
class Product extends BaseProduct
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;
}
