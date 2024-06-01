<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 py-5 mx-auto">
                    <div class="card card-body">
                        <P class="text-bolder">Slider 1</P>
                    {{session('success')}}
                        <form action="{{{route('slider.create')}}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-md-3">Slider Upload</div>
                                <div class="col-md-9">
                                    <input type="file" name="slider" class="form-controll">
                                </div>
                            </div>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 py-5 mx-auto">
                    <div class="card card-body">
                        <P class="text-bolder">Slider 2</P>
                    {{session('success')}}
                        <form action="{{{route('slider.create')}}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-md-3">Slider Upload</div>
                                <div class="col-md-9">
                                    <input type="file" name="slider" class="form-controll">
                                </div>
                            </div>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>