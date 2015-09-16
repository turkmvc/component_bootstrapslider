<?php
/**
 * Created by PhpStorm.
 * User: Furkan
 * Date: 10.8.2015
 * Time: 23:42
 */

namespace Components\BootstrapSlider\Repositories\Bootstrapslider;
use Whole\Core\Repositories\Repository;
use Components\BootstrapSlider\Models\Bootstrapslider;


class BootstrapsliderRepository extends Repository
{


    /**
     * @param Bootstrapslider $bootstrapslider
     */
    public function __construct(Bootstrapslider $bootstrapslider)
    {
        $this->model = $bootstrapslider;
    }

}