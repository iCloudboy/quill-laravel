
    <div class="col-md-4">
        <div class="col-md-9 design-image">
            <a href="./design/{{$design->id}}"> <img src="{{ $design->tattooImage }}"\></a>
        </div>
        <div class="col-md-9 design-stats">
            <p>Views: {{ $design->tattooViews }}</p>
            <p>Shares: {{ $design->tattooShares }}</p>
            <p>Likes: {{ $design->tattooLikes }}</p>
        </div>
    </div>
