@include('blog.admin.header')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4 text-center"><span class="text-muted fw-light"></span> Add a Doctor</h4>
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
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          
          <div class="card-body">
            <form action="{{ route('admin.store') }}" method="post">
                @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Docter's Name</label>
                <div class="col-sm-10">
                  <input type="text" 
                  name="doctor_name" 
                  maxlength="25" 
                  required 
                  class="form-control" 
                  id="basic-default-name" 
                  placeholder="Name" 
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Doctor's Specialization</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    name="specialization"
                    maxlength="25"
                    required
                    class="form-control"
                    id="basic-default-company"
                    placeholder="Specialization"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">Doctor's Email</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <input
                      type="email"
                      name="email"
                      required
                      id="basic-default-email"
                      class="form-control"
                      placeholder="Email"
                      aria-label="john.doe"
                      aria-describedby="basic-default-email2"
                    />
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">Doctor's Phone No</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <input
                      type="number"
                      name="phone"
                      required
                      id="basic-default-email"
                      class="form-control"
                      placeholder="Phone Number"
                      aria-label="john.doe"
                      aria-describedby="basic-default-email2"
                    />
                  </div>
                  <div class="form-text">You can use only numbers</div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">Doctor's Image</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <input
                      type="file"
                      name="image_path"
                      required
                      id="basic-default-email"
                      class="form-control"
                      placeholder="Doctor's Image"
                      aria-label="john.doe"
                      aria-describedby="basic-default-email2"
                    />
                  </div>
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Create Doctor</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
      </div>
      @include('blog.admin.footer')
