<div class="detail-container">
    <div class="row details-row">
        <div class="col-md-1 details-title-left">
            <img src="/{{$design->user->picture}}"/>
        </div>
        <div class="col-md-10 details-title-right">
            <h1>{{$design->tattooName}}</h1>
                <p>by <a href="#">{{$design->user->forename}} {{$design->user->surname}}</a> on {{ $design->tattooDate->toFormattedDateString() }}</p>
        </div>
    </div>
    <div class="row details-media">
        <div class="col-md-4 details-media-left">
            <div class="details-media-stats-container">
                <div class="details-media-stats">
                    <img src="/images/assets/img/views2.png"> <p>{{$design->tattooViews}} Views</p>
                </div>

                <div class="details-media-stats">
                    <img src="/images/assets/img/share2.png"> <p>{{$design->tattooShares}} Shares</p>
                </div>

                <div class="details-media-stats">
                    <img src="/images/assets/img/heart2.png"> <p>{{$design->tattooLikes}} Likes</p>
                </div>

                <br/>

                <div class="details-media-tags">
                    <b>Tags: </b> <a href="#">{{$design->tattooTags}}</a>
                </div>
            </div>
        </div>
        <div class="col-md-7 details-media-right">
            <div class="details-media-image-container">
                <img src="/{{$design->tattooImage}}">
            </div>
        </div>
    </div>
    <div class="row details-comments">
        <div class="details-comments-left">
            <div class="details-comments-left-title">
                <h1>{{App\Comment::where('design_id', $design->id)->count()}} Comments</h1>
            </div>

            @foreach ($design->comments as $comment)

                <div class="details-comments-left-display">
                    <div class="details-comments-left-display-image">
                        <img src="/{{$comment->user->picture}}">
                    </div>
                    <div class="details-comments-left-display-text">
                        <div class="details-comments-left-name">
                            <a href="#"><h3>{{$comment->user->forename}} {{$comment->user->surname}}</h3></a>
                            <p>{{$comment->created_at->diffForHumans()}}</p>
                        </div>
                        <div class="details-comments-left-text">
                            <p>{{$comment->comment}}<p>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
        </div>


        <div class="details-comments-right">
            <div class="details-comments-right-title">
                <h1>Post a Comment</h1>
            </div>
            <div class="details-comments-right-text">
                <form method="POST" action="/design/{{ $design->id }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea name="comment" placeholder="Your Comment here" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
