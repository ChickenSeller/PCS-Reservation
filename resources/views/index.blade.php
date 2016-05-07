@extends('layouts.base')

@section('content')
	<div class="a-content">
		<h2>XXXXX</h2> 

		<div class="inner">
			<form class="index-form">	
				<div class="input-group">
					<input type="text" id="name" class="form-control" placeholder="姓名" required>
					<input type="text" id="student_id" class="form-control" placeholder="ID" required>
					<input type="text" id="phone_number" class="form-control" placeholder="Tel" required>
                    <select type="button" class="btn btn-default" id = "type" name="type" required="true">
                        <option value="" selected="selected" disabled>---选择服务方式---</option>
                        <option value="indoor">值班</option>
                        <option value="outdoor">上门服务</option>
                    </select>

                    <input type="text" id="place" class="form-control hidden" placeholder="地点">
                    <!-- 路由or台式机问题 -->
                    <select type="button" class="btn btn-default hidden" id="indoorType" name="indoorType">
                        <option value="" selected="selected" disabled>---选择问题类型---</option>
                        <option value="xxx">XXX-1</option>
                        <option value="xxx">XXX-2</option>
                    </select>                    

                    <!-- 问题选择  值班和台式机的问题放在一起了  选项动态生成-->
                    <select type="button" class="btn btn-default" id="problem" name="problem" required="true">
                        <option value="" selected="selected" disabled>---选择问题简述---</option>
                        <option value="xxx">problem-1</option>
                        <option value="other">其他</option>
                    </select>          

                    <input type="text" id="other-problem" class="form-control hidden" placeholder="problem description">


                    <!-- available time -->
                    <select type="button" class="btn btn-default" name="time" required="true">
                        <option value="" selected="selected" disabled>---选择服务时间---</option>
                        <option value="xx">time-1</option>
                        <option value="xx">time-2</option>
                    </select>
				</div>

				<button class="btn btn-lg btn-primary btn-block" id="order" type="submit">预约</button>
				
			</form>
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
