<?php

return [
  'composer' => ['"Components\\\BootstrapSlider\\\": "components/BootstrapSlider/src/"'],
  'providers'=>['Components\BootstrapSlider\BootstrapSliderServiceProvider::class'],
  // 'aliases'=>["'Zipper'   => Chumper\Zipper\Facades\Zipper::class,"],
  'vendor'=>true,
  'migrate'=>true,
  'settings'=> [
    'name'=>'Bootstrap Slider',
    'description'=>'Bootstrap Slider',
    'folder'=>'components::bootstrapslider',
    'files'=>[
        [
            'name'=>'Slider',
            'file'=>'index'
        ],
    ],
  ],
  'sidebar'=>[
    'title'=>'Bootstrap Slider',
    'route'=>'admin.bootstrapslider.index',
    'path'=>'admin/bootstrapslider,admin/bootstrapslider/*',
  ],
  'sidebar_lang'=>[
    ['title'=>'Slider',"lang"=>'tr'],
    ['title'=>'Slider',"lang"=>'en'],
  ],
  'pages'=>[
  'admin/bootstrapslider',
  'admin/bootstrapslider/*',
  ],
];
