@foreach($comments as $comment)
<div class="display-comment">
    <strong>{{ $comment->user->name }}</strong>
    <p>{{ $comment->comment }}</p>
    <a href="" id="reply"></a>
    <form method="post" action="{{ route('reply.add') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="comment" class="form-control" id="comment-input"/>
            <input type="hidden" name="post_id" value="{{ $post_id }}" />
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-block w-10" id="replies" style="font-size: 0.8em;">Reply</button>
        </div>
    </form>
    @include('partial.replies', ['comments' => $comment->replies])
</div>
@endforeach 