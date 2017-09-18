@extends("layout.master")

@section('content')

    @include('layout.banner')

    <div id="design-sort">
        <ul>
            <li>
                <a href="#">Popular</a>
            </li>
            <li>
                <a href="#">Recent</a>
            </li>
        </ul>
    </div>

    <div class="design-showcase">
        <div class="design-container">
            <div class="row design-row">

                @foreach ($designs as $design)

                    @include('designs.index')

                @endforeach
            </div>

        </div>
    </div>
@endsection

