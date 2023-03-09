@include('blog.admin.header')
<div class="work flex flex-row">
  <div class="form">
    <form action="{{ route('admin.store_testimony') }}" method="post">
      @csrf
      <div class="input">
        <input type="text" name="name" id="" placeholder="Name" class="w-full bg-slate-300">
      </div>
      <div class="input">
        <input type="text" name="testimony" id="" placeholder="Testimony">
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
