<?php

namespace Test\Graphql\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class HelloWorld implements ResolverInterface
{
    /**
     * @inheirtDoc
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        $name = $args['name'];
        if (!isset($name) || is_string($name)) {
            throw new GraphQlInputException(__('Say me your name!!! >_<'));
        }

        return [
            'item' => "hello World $name ."
        ];
    }
}
