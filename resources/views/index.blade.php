<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-3" style="">
        <nav class="nav nav-pills nav-justified p-2 border rounded gap-1" style="background-color: #00000008;">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addExercise" data-group="0">Додати вправу</button>

            <a href="" class="btn btn-primary d-flex justify-content-center align-items-center p-1" style="width: 40px; height: 40px;">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.51064 0C3.82979 0 0 3.825 0 8.5C0 13.175 3.82979 17 8.51064 17C10.8511 17 13.0213 16.0863 14.5532 14.535L13.0213 13.005C11.8723 14.1525 10.2766 14.875 8.48936 14.875C4.95745 14.875 2.10638 12.0275 2.10638 8.5C2.10638 4.9725 4.95745 2.125 8.48936 2.125C10.2553 2.125 11.7872 2.89 12.9362 4.05875L10.617 6.375H17V0L14.4681 2.52875C12.9362 0.99875 10.8298 0 8.48936 0H8.51064Z" fill="white"/>
                </svg>
            </a>
        </nav>
        @if (session('success'))
            <div class="alert alert-success mt-3" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="modal fade" id="addExercise" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Додати вправу</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <form action="{{ route('exercise.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Вправа</label>
                                <input type="text" name="exercise_name" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Група м'язів</label>
                                <input class="form-control" name="group" id="message-text">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Кількість підходів</label>
                                <input type="text" class="form-control" name="approach" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Кількість повторень</label>
                                <input type="text" class="form-control" name="repetition" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Вага на 1 підхід</label>
                                <input type="text" class="form-control" name="weight" id="recipient-name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Додати</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
