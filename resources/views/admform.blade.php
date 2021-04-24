@extends('header_footer')
@section('title','Form')
@section('main')

        <div class="container py-3">
            <div class="row">
                <div class="col-8 mx-auto">
                    <form action="" method="">
                        <div class="mb-3">
                            <div class="form-label">Name</div>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender : </label>
                            <label for="" class="form-check-label">Male</label>
                            <input type="radio" class="form-check-input" type="radio"  name="gender">
                            <label for="" class="form-check-label">female</label>
                            <input type="radio" class="form-check-input" type="radio" name="gender">
                        </div>
                        <div class="mb-3 ">
                            <div class="text-center"><input type="submit" value="Apply" class="btn btn-danger w-50"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


@endsection
