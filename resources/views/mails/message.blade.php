<h1>
    You've got a message.
</h1>

<h3>Name: {{ $request->name }}</h3>
<h3>Email: {{ $request['email'] }}</h3>
<h3>Phone: {{ $request['phone'] }}</h3>
<h3>Message:</h3>
<p>
    {{ $request['message'] }}
</p>
