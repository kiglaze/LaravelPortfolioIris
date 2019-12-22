@extends('layouts.app')

@section('content')
    <h2>Work Samples</h2>
    @foreach($worksamples as $workSample)
        <article class="work-sample">
            <h3>{{ $workSample->title }}</h3>
            <p>{{ $workSample->excerpt }}</p>
            <p>{{ $workSample->description }}</p>
            @if($workSample->code_link)
                <a href="https://{{ $workSample->code_link }}" target="_blank">See Code</a>
            @endif
            @if($workSample->direct_link)
                <a href="https://{{ $workSample->direct_link }}" target="_blank">See Site</a>
            @endif
        </article>
    @endforeach
@endsection
