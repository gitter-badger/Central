<?php

namespace Hoa\Ruler\Model\Comparator {

/**
 * LessThanEqual
 *
 * @uses AbstractComparator
 * @uses ComparatorInterface
 * @author Stephane PY <stephane.py@hoa-project.net>
 */
class LessThanEqual extends AbstractComparator implements ComparatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getToken ( ) {

        return '<=';
    }

    /**
     * {@inheritdoc}
     */
    public function assert ( ) {

        return $this->left->getValue() <= $this->right->getValue();
    }
}

}