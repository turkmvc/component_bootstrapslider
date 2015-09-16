@inject('sliders', 'Components\BootstrapSlider\Injections\SliderInjection')
        <div class="col-md-12 col-xs-12 slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
				@foreach($sliders->get() as $k=>$slider)
                    <li data-target="#carousel-example-generic" data-slide-to="{{ $k }}" @if($k==0) class="active" @endif></li>
				@endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach($sliders->get() as $k=>$slider)
						<div class="item @if($k==0) active @endif">
							<img class="img-responsive" src="{{ $slider->slider }}" style="width:100%;" />
							<div class="carousel-caption">
							{{ $slider->title }}
							</div>
						</div>
					@endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Önceki</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Sonraki</span>
                </a>
            </div>
        </div>