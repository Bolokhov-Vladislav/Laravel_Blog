<h2>{{ $title }}</h2>
<ol class="breadcrumb">
	<li><a href="{{ route('admin.index') }}">{{ $parent }}</a><span class="mr-1 ml-1">/</span></li>
	<li class="active">{{ $active }}</li>
</ol>