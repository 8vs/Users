@extends('layouts.base')

@section('content')
    <p>
    <a class="btn" data-bs-toggle="collapse" href="#multiCollapseExample1" > количество пользователей с заданным именем</a>
    </p>

    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <form action="/result" method="get">
                    <input type="hidden" value="{{ csrf_token() }}">
                    <input type="hidden" name="action" value="1">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Имя" required pattern="[А-Я]{1}[а-я]{0,29}">
                        <input type="submit" class="btn btn-primary" value="Найти">
                    </div> 
                </form>
            </div>
        </div>
    </div>

    <p>
        <a class="btn" data-bs-toggle="collapse" href="#multiCollapseExample2" > количество пользователей, возраст которых в заданном диапазоне</a>
    </p>

    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
                <form action="/result" method="get">
                    <input type="hidden" value="{{ csrf_token() }}">
                    <input type="hidden" name="action" value="2">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="age1" placeholder="От" required pattern="[0-9]{0,3}">
                        <input type="text" class="form-control" name="age2" placeholder="До" required pattern="[0-9]{0,3}">
                        <input type="submit" class="btn btn-primary" value="Найти">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <p>
    <a class="btn" data-bs-toggle="collapse" href="#multiCollapseExample3" > средний возраст</a>
    </p>

    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample3">
                <form action="/result" method="get">
                    <input type="hidden" value="{{ csrf_token() }}">
                    <input type="hidden" name="action" value="3">
                    <div class="input-group mb-3">
                        <input type="submit" class="btn btn-primary" value="Найти">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <p>
        <a class="btn" data-bs-toggle="collapse" href="#multiCollapseExample4" > вывод самых популярных имен с указанием количества пользователей</a>
    </p>

    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample4">
                <form action="/result" method="get">
                    <input type="hidden" value="{{ csrf_token() }}">
                    <input type="hidden" name="action" value="4">
                    <div class="input-group mb-3">
                        <input type="submit" class="btn btn-primary" value="Найти">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <p>
        <a class="btn" data-bs-toggle="collapse" href="#multiCollapseExample5" > вывод самых популярных городов с указанием количества пользователей</a>
    </p>

    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample5">
                <form action="/result" method="get">
                    <input type="hidden" value="{{ csrf_token() }}">
                    <input type="hidden" name="action" value="5">
                    <div class="input-group mb-3">
                        <input type="submit" class="btn btn-primary" value="Найти">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection