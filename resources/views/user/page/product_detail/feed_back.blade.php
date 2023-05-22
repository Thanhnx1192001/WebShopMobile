<div id="list-comment" class="comment-list">
    @if($feed_back_product)
    @php
    $feed_back_product = $feed_back_product->reverse();
    @endphp
    @foreach($feed_back_product as $row)
    <div id="comment-4411" class="comment-item cmt-parent">
        <div class="inner">
            <div class="commentAvatar guest">
                <div class="avatar" style="width:40px; height:40px;"><span class="iconcom-user">{{substr($row->name, 0, 1)}}</span></div>
            </div>
            <div class="commentBody">
                <div class="commentName">
                    <span class="name">{{$row->name}}</span>
                    <span class="star-wrap">
                        @for( $i=1 ; $i <= $row->star; $i++)
                            <i class="fa fa-star"></i>
                            @endfor
                            @for( $j=1 ; $j <= 5- ($row->star) ; $j++)
                                <i class="fa fa-star-o"></i>
                                @endfor
                    </span>
                </div>
                <div class="commentText">{{$row->content}}</div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>