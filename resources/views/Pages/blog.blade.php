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
				<h4>技术梗概</h4>
				<p>跟随时代的潮流，我们采取神经网络的方式进行票房的预测，利用多层BP神经网络能够从多个维度对票房进行预测和分析，有效地提高预测行为的准确性，通过输入各种参数，进行监督学习，训练得到合适的网络模型，同时实时更新记录每次网络模型并进行调整，以便达到更好的结果。</p>
				<p>数据方面，通过编写网络爬虫脚本，从各个票房数据网络获取到所需要的各种数据，按照一定的过滤规则滤出信息并存放到数据库中，作为神经网络的训练集和监督集。</p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="copy-rights text-center">
			<p>&nbsp;</p>
		</div>
	</div>
@stop