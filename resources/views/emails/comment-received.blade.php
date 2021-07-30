<html>

<body>
    <h3>Comment received</h3>
    <p>
        The user {{$user->name}} has posted a comment on <a href="{{route('show.teams', [ 'team' => $team ])}}">{{$team->name}} page</a>.
    </p>
    <blockquote>{{$comment->content}}</blockquote>
</body>

</html>