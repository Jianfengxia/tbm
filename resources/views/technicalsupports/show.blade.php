@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>

            @lang('view.Technicalsupport')@lang('view.show')
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('technicalsupports.show_fields')
                    <a href="{!! route('technicalsupports.index') !!}" class="btn btn-default">@lang('view.Back')</a>
                </div>
            </div>
        </div>
    </div>
@endsection
