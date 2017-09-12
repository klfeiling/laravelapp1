@extends('AppTemplate')
@section('content')
	@include('PagesContents.PageHeader')
	@include('auth.login')
	<div class="clearfix"></div>
	<div class="container">
		<div class="main-content">
			@include('PagesContents.Navigation1')
			@include('PagesContents.Navigation2')
			<div class="webIntro-page">
				<h4>网站简介</h4>
				<p>本网站是一个基于机器学习的电影版权估值平台。核心部分结合神经网络算法和中国电影市场的实际情况，采用了四层BP神经网络模型，从多个维度考虑对电影版权估值的影响因素，并借鉴已有的算法模型，例如google提出的电影票房预测模型等，能够较为准确地预测已经上市的电影版权的数值。</p>
				<p>使用神经网络对电影版权估值，能够代替人进行已有的模型进行演算，而且考虑了几十种甚至更多的影响因素，从而使结果更加准确，有信服力。理想状态下可能做到对于即将上市的电影进行预测，从而推进我国电影朝着产业化的更深层次迈进。</p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="copy-rights text-center">
			<p>&nbsp;</p>
		</div>
	</div>
@stop