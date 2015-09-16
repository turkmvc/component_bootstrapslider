<div class="form-group">
    {!! Form::label("Slider",null,['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-10">
        <div>
            <img id="imagesfile" onclick="openKCFinder(this,'slider','slider_img','slider_remove_btn')" class="img-thumbnail slider_img" style="height:128px;" src="{!! $slider->slider!=''?$slider->slider:'https://placeholdit.imgix.net/~text?txtsize=17&bg=efefef&txtclr=aaaaaa%26amp%3Btext%3Dresim%2Byok&txt=Resim+Yok&w=128&h=128' !!}" />
        </div>
        <a class="btn default slider_remove_btn" @if($slider->slider=="") style="display:none;margin-top:4px;" @else style="margin-top:4px;" @endif>Kaldır</a>
        {!! Form::hidden('slider') !!}
    </div>
</div>



<div class="form-group">
    {!! Form::label("Slider Başlığı",null,['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::text('title',null,['placeholder'=>'Slider Başlığı','class'=>'form-control']) !!}
    </div>
</div>