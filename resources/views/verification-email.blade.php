<h1>IPT Systems</h1>

<p>
    Welcome {{$user->name}}!
</p>

<p>
    You've succesfully registered. Please click the verification to verify your account
</p>
<p>
    <a href="{{url('/verification/' . $user->id . "/" . $user->remember_token)}}"> Click here to verify. </a>
</p>
