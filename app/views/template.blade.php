@extends('sitecore::template')

@section('navigation')

    <nav>
        <div class="container">
            @if (Config::get('sitecore::logo'))
            <a href="{{ URL::to('/') }}"><img id="logo" src="{{ Config::get('sitecore::logo') }}"></a>
            @else
            <a id="brand" href="{{ URL::to('/') }}">{{ $flatturtle->title }}</a>
            @endif
            <ul>
            @foreach ($blocks as $block)
                @if ($block->title == 'Louer')
                <li>
                    <a href="#{{ $block->id }}" class="btn colorful">{{ $block->title }}</a>
                </li>
                @elseif ($block->title)
                <li>
                    <a href="#{{ $block->id }}">{{ $block->title }}</a>
                </li>
                @endif
            @endforeach
            @if (Config::get('sitecore::mailchimp'))
                <li>
                    <a href="#newsletter">{{ Lang::get('sitecore::newsletter.title') }}</a>
                </li>
            @endif
            @if ($reservations)
                <li>
                    <a href="#reservations" class="btn colorful">{{ Lang::get('sitecore::reservations.title') }}</a>
                </li>
            @endif
            </ul>
        </div>
    </nav>

@show

@section('footer')

    <section id="social" class="block colorful">
        <div class="container">
            <div id="copyright">
                Copyright &copy; {{ date('Y') }} <a href="http://rentalvalue.eu">rentalVALUE</a> & <a href="http://flatturtle.com" target="_blank">FlatTurtle</a>.
            </div>
        </div>
    </section>

@stop
