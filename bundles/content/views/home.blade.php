@layout('layouts.main')

@section('page_title')
@if (!empty($page_data->meta_title))
| {{ strtolower($page_data->meta_title) }}
@elseif (!empty($page_data->pretty_name))
| {{ strtolower($page_data->pretty_name) }}
@endif
@endsection

@section('page_description')
@if (!empty($page_data->meta_description))
{{ $page_data->meta_description }}
@endif
@endsection

@section('page_keywords')
@if (!empty($page_data->meta_keyword))
{{ $page_data->meta_keyword }}
@endif
@endsection

@section('content')
<div class="row-fluid">
    <div class="span12 relative" id="boojer-homepage">
        <div id="home-gallery" class="clearfix">
            <? if (1==2 && !empty($images['thumbs'])): ?>
                <? foreach ($images['thumbs'] as $image): ?>
                    <a href="<?=$image['url']; ?>" target="_blank" rel="home-galler" class="viewImageAction"><img src="<?=$image['thumbUrl']; ?>" alt="" data-width="<?=$image['twidth']; ?>" data-height="<?=$image['theight']; ?>"></a>
                <? endforeach; ?>
            <? endif; ?>
        </div>
        @if (!empty($page_data->cmspage->content))
            <div class="content-heading">{{ $page_data->cmspage->content }}</div>
        @endif
        <div id="boojer-home-circle">
        	<div>
				<p class="cabin title">/'bu ʒər/</p> <!-- /'bu d<sub>3</sub>&#399;r/ -->
				<p class="cabin">NOUN</p>
				<p class="cabin">1. &nbsp;a unique (and sometimes quirky) individual marked by an independent, creative spirit.</p>
				<p class="cabin">2. &nbsp;someone lucky enough to work for booj.</p>
			</div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(function () {
            pageJS.homePage();
        });
    </script>
@endsection