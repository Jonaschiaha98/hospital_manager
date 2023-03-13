@include('blog.admin.header')
<div class="work flex flex-row">
  @if ($errors->any())
  <div class="errors">
  <div>
      <h3 class="text-red-700">Warning ...</h3>
  </div>
  <div>
      <ul>
      @foreach ($errors->all() as $error)
          <li class="text-red-800">{{ $error }}</li>
      @endforeach
  </ul>
  </div>
  </div>
@endif
  <div class="form">
    <form action="{{ route('store.testimony') }}" method="post">
      @csrf
      <div class="input">
        <input type="text" name="name" id="" maxlength="75" placeholder="Name" class="w-full bg-slate-300">
      </div>
      <div class="input">
        <input type="text" name="testimony" id="" maxlength="250" placeholder="Testimony">
      </div>
      <div class="input">
        <input type="file" name="image_path" id="" placeholder="Patient's image">
      </div>
      <div class="input">
        <input type="submit">
      </div>
    </form>
  </div>
</div>

@include('blog.admin.footer')
