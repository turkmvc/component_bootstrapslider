<?php
/**
 * Created by PhpStorm.
 * User: Furkan
 * Date: 9.9.2015
 * Time: 03:18
 */

namespace Components\BootstrapSlider\Injections;
use Components\BootstrapSlider\Repositories\Bootstrapslider\BootstrapsliderRepository;

class SliderInjection
{
    protected $bootstrapslider;

    public function __construct(BootstrapsliderRepository $bootstrapslider)
    {
        $this->bootstrapslider = $bootstrapslider;
    }

    public function get()
    {
		return $this->bootstrapslider->all();
    }
}