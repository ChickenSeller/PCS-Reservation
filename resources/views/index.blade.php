@extends('layouts.base')

@section('content')
	<div class="a-content">
		<h2>XXXXX</h2> 

		<div class="inner">
            {!! Form::open(array('class'=>'index-form')) !!}
				<div class="input-group" style="width: 100%">
                    {!! Form::text('name','',array('class'=>'form-control','placeholder'=>'姓名','required'=>'')) !!}
                    {!! Form::number('stu_num','',array('class'=>'form-control','placeholder'=>'学号','required'=>'')) !!}
                    {!! Form::number('phone_num','',array('class'=>'form-control','placeholder'=>'手机号','required'=>'')) !!}
                    {!! Form::select('if_errands',array('indoor'=>'值班','outdoor'=>'上门服务'),null,array('placeholder'=>'---选择服务方式--','required'=>'true','id'=>'type','class'=>'btn btn-default','type'=>'button')) !!}
                    {!! Form::text('location',null,array('placeholder'=>'地点','class'=>'form-control hidden','id'=>'place')) !!}
                    <!-- 路由or台式机问题 -->

                    {!! Form::select('indoorType',array('router'=>'路由器问题','pc'=>'电脑问题'),null,array('placeholder'=>'---选择问题类型---','required'=>'true','id'=>'indoorType','class'=>'btn btn-default','type'=>'button')) !!}


                    <!-- 问题选择  值班和台式机的问题放在一起了  选项动态生成-->
                    {!! Form::select('description',array('xxx'=>'problem-1','other'=>'其他'),null,array('placeholder'=>'---选择问题简述---','required'=>'true','id'=>'problem','class'=>'btn btn-default','type'=>'button')) !!}

                    {!! Form::text('description-other',null,array('placeholder'=>'problem description','class'=>'form-control hidden','id'=>'other-problem')) !!}


                    <!-- available time -->
                    <select type="button" class="btn btn-default" name="appointment_date" required="true">
                        <option value="" selected="selected" disabled>---选择服务时间---</option>
                        <option value="xx">time-1</option>
                        <option value="xx">time-2</option>
                    </select>

                    <select type="button" class="btn btn-default" name="time" required="true">
                        <option value="" selected="selected" disabled>---选择服务时间---</option>
                        <option value="xx">time-1</option>
                        <option value="xx">time-2</option>
                    </select>
				</div>

				<button class="btn btn-lg btn-primary btn-block" id="order" type="submit">预约</button>
				
			{!! Form::close() !!}
		</div>
	</div>

    <div id="order-info">
        <div class="inner">
            <h2>服务单</h2>
            <ul class="links">
                <li>xxxx</li>
                <li>xxxx</li>
                <li>xxxx</li>
            </ul>
            <a href="#" class="close">Close</a>
        </div>
    </div>
@stop


@section('javascript')
$(document).ready(function(){
    console.log($('#type'));
    //$('body').css('background-image','linear-gradient(to top, rgba(46, 49, 65, 0.8), rgba(46, 49, 65, 0.8)), url("/images/bg2.jpg")');
    $('#type').change(function(){
        var type = $('#type option:selected').val();
        if(type == "indoor") {
            $('#place').removeAttr('required');
            $('#place').addClass('hidden');
            $('#indoorType').addClass('hidden');
            $('#indoorType').removeAttr('required');
        } else {
            $('#place').attr('required', 'true');
            $('#place').removeClass('hidden');
            $('#indoorType').removeClass('hidden');
            $('#indoorType').attr('required', 'true');
        }
    });

    $('#problem').change(function(){
        var problem = $('#problem option:selected').val();
        console.log(problem);
        if(problem == "other") {
            console.log('hello');
            $('#other-problem').removeClass('hidden');
            $('#other-problem').removeAttr('required');
        } else {
            $('#other-problem').addClass('hidden');
            $('#other-problem').addAttr('required');
        }
    }) 
});
@stop
