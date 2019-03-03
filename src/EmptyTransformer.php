<?php
namespace Lostinyou\Response;

use League\Fractal\TransformerAbstract;


class EmptyTransformer extends TransformerAbstract
{
    /**
     * Transform a collection.
     *
     * @return array
     */
    public function transform()
    {
        return [];
    }
}
