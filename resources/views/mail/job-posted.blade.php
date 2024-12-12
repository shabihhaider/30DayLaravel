<h2>
    {{$job->title}}
</h2>

<p>
    Congrats! Your job is now live now on our website.
</p>

<p>
    <a href="{{url('/jobs/' . $job->id) }}">View your job Listing</a>
</p>