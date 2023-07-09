<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Калькулятор</title>
</head>
<body style="background-color: lightblue">
<br><br><br>
<div class="container text-center">
    <div class="row">
        <div class="col-md-4 m-auto">
            <form action="/calculation" method="POST">
                @csrf
                <div class="card" style="background-color: #2E8B57">
                    <div class="card-body m-auto">
                        <h1 class="text-center text-light">Калькулятор</h1>

                        <div class="form-group row" style="margin-bottom: 5px; width: 400px">
                            <div class="col-md-9">
                                <input type="number" step="0.00001" name="firstnumber" id="firstnumber" class="form-control" placeholder="Введите первое число: " required="">
                            </div>
                        </div>

                        <div class="form-group row" style="margin-bottom: 5px; width: 400px">
                            <div class="col-md-9">
                                <input type="number" step="0.00001" name="secondnumber" id="secondnumber" class="form-control" placeholder="Введите второе число: " required="">
                            </div>
                        </div>

                        <div class="form-group row" style="margin-bottom: 5px; width: 400px">
                            <div class="col-md-9">
                                <select name="operator" id="operator" class="form-control" style="color: grey">
                                    <option>Выберите операцию: </option>
                                    <option value="+">+</option>
                                    <option value="-">-</option>
                                    <option value="*">*</option>
                                    <option value="/">/</option>
                                    <option value="%">%</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <input type="submit" name="btn" class="btn btn-warning btn-lg font-weight-bold" value="Решить">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row" style="margin-left: 30%; margin-right: 30%; margin-top: 10px">
    <div class="col-md-4 col-auto" style="width: 400px; margin-left: auto; margin-right: auto">
        @if(session('message'))
            <div class="alert alert-warning">
                <p style="font-weight: bold">Решение: </p>
                <p>{{ session('message') }}</p>
            </div>
        @endif
    </div>
</div>
</body>
</html>
