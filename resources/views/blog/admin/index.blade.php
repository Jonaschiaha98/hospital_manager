@include('blog.admin.header')

<div class="work">
  <p class="greet">Greetings Dr {{ Str::ucfirst(Auth::user()['name']) }}</p>
</div>


@include('blog.admin.footer')